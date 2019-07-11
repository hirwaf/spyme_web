<?php
use App\Car;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return redirect('/admin');
});
Route::get('/driver',function(){
	return view('driver');
});
// Route::post('/check',function(Request $request){
// 	$p_request = $request->plate;
// 	$car = Car::where('plate_no')->first();
// 	return $car;
//     // if()

//     // else

// });
Route::post('/check','driverController@store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
