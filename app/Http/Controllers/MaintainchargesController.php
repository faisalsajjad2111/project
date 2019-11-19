<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintainchargesController extends Controller
{

public function maintaincharges(Request $request){
	try{
	$result = MaintainceCharges::maintaincharges($request);
	return $result;

}catch(\Exception $exception){

}
}

    //
}

