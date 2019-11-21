<?php

namespace App\Http\Controllers;


use App\Http\Requests\ShopSoldRequest;
use App\ShopSold;

class ShopSoldController extends Controller
{
 

public function savesolds(ShopSoldRequest $request){
	try{
$result = ShopSold::savesolds($request);
	return $result;

}catch(\Exception $exception){
	return $exception->getMessage();
}
}

    
}