<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopSoldController extends Controller
{
 

public function savesolds(Request $request){
	try{
	$result = ShopSold::savesolds($request);
	return $result;

}catch(\Exception $exception){

}
}

    
}