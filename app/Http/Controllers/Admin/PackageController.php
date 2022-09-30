<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{
    Package,
    Category,
    Destination,
    Facility
};
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Package::with('image')->latest()->paginate(10);
        return view('admin.package.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $queryParamInString  = '';
        $package = new Package();
        if ($request->query('id')) {
            $package =  $package->findOrFail($request->id);
            $explode = explode('?', $request->getRequestUri());
            $queryParamInString = $explode[1];
        }
        // dd($package->category);

        $category =  Category::pluck('id','type');
        // dd($category);
        $facility =  Facility::pluck('id', 'name');
        // ->prepend('Please Select');
        return view('admin.package.create', compact('category', 'package', 'queryParamInString', 'facility', 'request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->input('ongoing_step') == 1) {
           return $this->storeOverview($request);
        }
        if ($request->input('ongoing_step') == 2) {
            return $this->storeCitiesHotel($request);
        }
        if ($request->input('ongoing_step') == 3) {
            return $this->storeItenary($request);
        }

        if ($request->input('ongoing_step') == 4) {
            if (!$request->query('id')) return route()->redirect()->with('status', 'Please add overview first');
            $package =  Package::findOrFail($request->query('id'));
            $request->merge(['completed_step' => 4]);
             $package->update($request->only('include', 'exclude', 'completed_step')) ;
            return redirect()
                    ->route('admin.package.create', [
                        'id' =>  $package->id,
                         'completed_step' => 4
                    ]);
        }

        if ($request->input('ongoing_step') == 5 && $request->hasFile('image')) {
            if (!$request->query('id')) return route()->redirect()->with('status', 'Please add overview first');

            $package =  Package::findOrFail($request->query('id'));
             $package->update(['completed_step' => 5 ] );  

            foreach ($request->file('image') as $key => $file) {
                $path = $file->storeAs('public/package',now()->timestamp.'_'.$package->id.'.'. $file->extension());
                $package->image()->create(['src' => $path]);
            }
        }
       return redirect()->route('admin.package.index')->with('status', 'Package Added');
    }

public function storeOverview($request)
{
    $package = Package::query()->updateOrCreate(
        ['id' => $request->query('id')],
         $request->only('title', 'description', 'price', 'facility', 'duration', 'destination')
    );

     if($request->hasFile('image') && $request->image->isValid()) {
         $path = $request->image->storeAs('public/package',now()->timestamp.'_'.$package->id.'.'. $request->image->extension());
          $package->src = $path;
   } 
        if (!$package->completed)
        {
            $package->update(['completed_step' =>  2 ] );  
        }
      
    $package->category()->sync($request->category);
    return redirect()
            ->route('admin.package.create', [
                'id' =>  $package->id,
                 'completed_step' => 1
            ]);
}

public function storeItenary($request)
{
   if (!$request->query('id')) return route()->redirect()->with('status', 'Please add overview first');
    $package->update(['completed_step' => $package->completed_step == 5 ? 5 : 3 ] );  
    if ($package->itinerary) $package->itinerary()->delete();
        collect($request->title)->map( function ($item, $key) use ($package, $request) {
           if ($item ) {
                $package->itinerary()->create(
                    [
                        'title' => $item,
                        'description' => $request->description[$key]
                    ]
            );
           }
            
        });
    return redirect()
                    ->route('admin.package.create', [
                        'id' =>  $package->id,
                         'completed_step' => 3
                    ]);
}

public function storeCitiesHotel($request)
{
   if (!$request->query('id')) return route()->redirect()->with('status', 'Please add overview first');
    $package = Package::query()->findOrFail($request->query('id'));
    $index = 0;
    $record = collect([]);
    collect($request->get('city'))->map( function ($value, $key)  use (&$index, $request, $record) {
        $record->push( [ 
            'city' => $request->city[$index],
            'budget' => $request->budget[$index] ?: 'On Request',
             'two_star' =>$request->two_star[$index]?: 'On Request',
            'three_star' => $request->three_star[$index]?: 'On Request',
             'four_star' => $request->four_star[$index] ?: 'On Request'
              ]
          );
        $index++;
    });
    $package->update(['hotel_city' => $record->toJson()]);
    return  redirect()
                    ->route('admin.package.create', [
                        'id' =>  $request->query('id'),
                         'completed_step' => 2
                    ]);
    
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('admin.package.show', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Package::destroy($id);
       return redirect()
                    ->route('admin.package.index')->with('status', 'Delete');
    }
}
