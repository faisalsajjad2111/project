<?php

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

Route::get('arraydisplay', function () {
	echo '<h2>COmpare tow differetn elemnts which s larger</h2><br>';
	$arr_one = array('4', '7', '3', '2', '1', '7');
	$arr_two = array('1', '6', '4', '5', '2', '7');
	echo '<h3>Output:<h3><br>';
	for ($i = 0; $i < count($arr_one); $i++) {
		if ($arr_one[$i] >= $arr_two[$i]) {
			echo $arr_one[$i] . ':' . 'is greater than:' . $arr_two[$i] . '<br>';
		} else if ($arr_one[$i] <= $arr_two[$i]) {
			echo $arr_one[$i] . ':' . 'is less than' . $arr_two[$i] . '<br>';

		} else if ($arr_one[$i] == $arr_two[$i]) {
			echo $arr_one[$i] . ':' . 'is equal to' . $arr_two[$i] . '<br>';

		}
	}
	;
});
Route::get('/', function () {
	return view('welcome');
});
Route::get('maintainancecharges', function () {
	return view('maintainancecharges');
});
Route::get('shoprents', function () {
	return view('shoprents');
});
Route::get('shopsolds', function () {
	return view('shopsolds');
});
Route::get('cart', function () {
	return view('cart');
});
Route::get('login', function () {
	return view('login');
});


Route::post('save_rent', 'ShopRentController@saveRent')->name('save_rent');
Route::post('save_solds', 'ShopSoldController@savesolds')->name('save_solds');
Route::post('maintain_charges', 'MaintainchargesController@maintaincharges')->name('maintain_charges');


