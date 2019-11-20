<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class MaintainceCharges extends Model
{
      protected $primaryKey = 'id';
    protected $fillable = [
    	'Shop_no',
    	'floor',
    	'Sqft_Size',
    	'Setup',
    	'Bill_No',
    	'MaintCharges',
    	'Total',
    	'Reciieved',
    	'Balance_Reciieved'


    ];


    public static function maintaincharges($data){
    	$charge = new self;
    	$charge->Shop_no = $data['Shop_no'];
    	$charge->floor = $data['floor'];
    	$charge->Sqft_Size = $data['Sqft_Size'];
    	$charge->Setup = $data['Setup'];
    	$charge->Bill_No = $data['Bill_No'];
    	 $charge->MaintCharges = $data['MaintCharges'];
    	$charge->Total = $data['Total'];
    	$charge->Balance_Reciieved = $data['Balance_Reciieved'];
    	 
    	$result = $charge->save();
    	return 'saved';
    }

}
