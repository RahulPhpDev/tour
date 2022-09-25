<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use  App\Http\Controllers\Admin\{
    DestinationController,
    CategoryController,
    FacilityController,
    GroupController
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

Route::get('/', [HomePageController::class, 'index']);

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
    $   image->delete();
        return redirect()->route('admin.package.index')->with('status', 'Image Deleted');
    })->name('image.destroy');


    Route::resource('destination', App\Http\Controllers\Admin\DestinationController::class);
   
   Route::get('/package/add-more-itenary', function () {
        return view('admin.package.form.add-more-itenary');
    })->name('package.add-more-itenary');

    Route::resource('package', App\Http\Controllers\Admin\PackageController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('facility', FacilityController::class);
    Route::resource('group', GroupController::class);
   
});
require __DIR__.'/auth.php';
