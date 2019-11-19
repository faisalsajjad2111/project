<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopRentController extends Controller
{
 

public function saveRent(Request $request){
	try{
	$result = shopRent::saveRent($request);
	return $result;

}catch(\Exception $exception){

}
}

    //
}
