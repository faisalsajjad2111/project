<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopRentRequest;
use App\shopRent;
class ShopRentController extends Controller
{
 

public function saveRent(ShopRentRequest $request){
	try{
	$result = shopRent::saveRent($request);
	return $result;

}catch(\Exception $exception){
		return $exception->getMessage();

}
}

    //
}
