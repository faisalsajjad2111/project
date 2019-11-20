<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MaintainceCharges;

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

