<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomePageController,
    EnquiryController
};
use  App\Http\Controllers\Admin\{
    DestinationController,
    CategoryController,
    FacilityController,
    GroupController,
    SocialController,
    VisitorController
};
use App\Models\{
    Image
};
use Illuminate\Support\Facades\Storage;
// https://github.com/codewithsadee/tourest/blob/master/assets/css/style.css
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/html', function () {
    return view('frontend.basic');
});
// Route::get('send-mail', function () {
   
//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];
   
//     \Mail::to('mrrahul2016@gmail.com')->send(new \App\Mail\EnquiryMail($details));
   
//     dd("Email is Sent.");
// });

Route::get('/', [HomePageController::class, 'index'])->name('homepage');
Route::get('/about-us', [HomePageController::class, 'about'])->name('home.about');
Route::get('/term-condition', 
function() {
    return view('frontend.utils.terms');
}
)->name('home.terms');



Route::get('/contact-us',   [HomePageController::class, 'contactUs'] )->name('home.contact');


Route::get('/package/{slug}', [HomePageController::class, 'show'])->name('package.show');
Route::get('/theme/{slug}', [HomePageController::class, 'theme'])->name('theme.show');
Route::put('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');
Route::get('/thank-you/{encryptID}', [EnquiryController::class, 'thank'])->name('enquiry.thank');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::prefix('admin')->name('admin.')->middleware('auth')->group( function () {

     Route::get('image/{id}', function ($id) {
        $image = Image::findOrFail($id);

        $image_path = public_path().'/'.$image->src;
         if (file_exists($image_path )) {
                unlink($image_path );
            }
        $image->delete();
            return redirect()->route('admin.package.index')->with('status', 'Image Deleted');
        })->name('image.destroy');


    Route::resource('destination', App\Http\Controllers\Admin\DestinationController::class);
   
        Route::get('/package/add-more-itenary', function () {
                return view('admin.package.form.add-more-itenary');
            })->name('package.add-more-itenary');

        Route::get('/package/add-more-cities-hotel', function () {
                return view('admin.package.form.add-more-cities-hotel');
        });

    Route::resource('package', App\Http\Controllers\Admin\PackageController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('facility', FacilityController::class);
    Route::resource('group', GroupController::class);
    Route::resource('social', SocialController::class)->only('index', 'create', 'store', 'edit', 'update');
   Route::get('enquiry', function () {
        $records = App\Models\Enquiry::latest()->paginate(10);    
        return view('admin.enquiry.index', compact('records'));
   })->name('enquiry');
   Route::resource('visitor', VisitorController::class)->only('create', 'store');

   Route::get('command/{str}',  function ($str) {
    echo $str;
    $artisan = \Artisan::call($str);
    
    $output = \Artisan::output();
    echo '<pre>';
    return $output;
   });
   
});
require __DIR__.'/auth.php';
