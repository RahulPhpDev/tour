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
        $records = Package::with('image')->get()->sortByDesc('id');
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
        // dump($package);

        $category =  Category::pluck('type', 'id')->prepend('Please Select');
        $facility =  Facility::pluck('name', 'id')->prepend('Please Select');
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
            $record = $this->storeOverview($request);
            return redirect()
                    ->route('admin.package.create', [
                        'id' =>  $record->id,
                         'completed_step' => 1
                    ]);
        }

        if ($request->input('ongoing_step') == 3) {
            if (!$request->query('id')) return route()->redirect()->with('status', 'Please add overview first');
            $record = $this->storeItenary($request);
            return redirect()
                    ->route('admin.package.create', [
                        'id' =>  $record->id,
                         'completed_step' => 3
                    ]);
        }

        if ($request->input('ongoing_step') == 4) {
            if (!$request->query('id')) return route()->redirect()->with('status', 'Please add overview first');
            $package =  Package::findOrFail($request->query('id'));
             $package->update($request->only('include', 'exclude')) ;
            return redirect()
                    ->route('admin.package.create', [
                        'id' =>  $package->id,
                         'completed_step' => 4
                    ]);
        }

        if ($request->input('ongoing_step') == 5 && $request->hasFile('image')) {
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
         $request->only('title', 'description', 'completed_step', 'price', 'facility')
    );

     if($request->hasFile('image') && $request->image->isValid()) {
         $path = $request->image->storeAs('public/package',now()->timestamp.'_'.$package->id.'.'. $request->image->extension());
          $package->src = $path;
   } 

    $package->update(['completed_step' => $package->completed_step == 5 ? 5 : 2 ] );  
    $package->category()->attach($request->category);
    return  $package;
}

public function storeItenary($request)
{
    $package = Package::query()->findOrFail($request->query('id'));
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
    return  $package;
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
