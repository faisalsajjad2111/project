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
    	'Bill No',
    	'MaintCharges',
    	'Total',
    	'Reciieved',
    	'Balance Reciieved'


    ];


    public static function maintaincharges($data){
    	$charge = new self;
    	$charge->Shop_no = $data['Shop_no'];
    	$charge->floor = $data['floor'];
    	$charge->Sqft_Size = $data['Sqft Size'];
    	$charge->Setup = $data['Setup'];
    	$charge->Bill_No = $data['Bill No'];
    	 $charge->MaintCharges = $data['MaintCharges'];
    	$charge->Total = $data['Total'];
    	$charge->Balance_Reciieved = $data['Balance Reciieved'];
    	 
    	$result = $charge-save();
    	return 'saved';
    }

}
