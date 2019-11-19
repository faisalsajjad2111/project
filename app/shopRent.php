<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shopRent extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
    	'shop_id',
    	'Month',
    	'date_Received',
    	'Rent_Received',
    	'Rent_Renewing'
    ];


    public static function saveRent($data){
    	$rent = new self;
    	$rent->shop_id = $data['shop_id'];
    	$rent->Month = $data['month'];
    	$rent->date_Received = $data['recieved_date'];
    	$rent->rent_Received = $data['rent_recieved'];
    	$rent->Rent_Renewing = $data['rent_renewing'];
    	$result = $rent-save();
    	return 'saved';
    }

}
