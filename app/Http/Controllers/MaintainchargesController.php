<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaintainChargesRequest;
use App\MaintainceCharges;
class MaintainchargesController extends Controller
{

public function maintaincharges(MaintainChargesRequest $request){
	try{
	$result = MaintainceCharges::maintaincharges($request);
	return $result;

}catch(\Exception $exception){
		return $exception->getMessage();


}
}

    //
}

