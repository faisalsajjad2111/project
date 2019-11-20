<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShopSold;

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