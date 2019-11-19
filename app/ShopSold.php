<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopSold extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
    	'shop_name',
    	'shop_id',
    	'total_cost',
    	'application_date',
    	'advanced_Checque_cash',
    	'percent',
    	'checque_no',
    	'installment',
    	'monthly',
    	'quarterly',
    	'other_Chargers',
    	'remarks'


    ];


    public static function savesolds($data){
    	$sold = new self;
    	$sold->shop_name = $data['shop_name'];
    	$sold->shop_id = $data['shop_id'];
    	$sold->total_cost = $data['total_cost'];
    	$sold->application_date = $data['application_date'];
    	$sold->advanced_Checque_cash = $data['advanced_Checque_cash'];
    	 $sold->percent = $data['percent'];
    	$sold->checque_no = $data['checque_no'];
    	$sold->installment = $data['installment'];
    	$sold->monthly = $data['monthly'];
      $sold->quarterly = $data['quarterly'];
    	 $sold->other_Chargers = $data['other_Chargers'];
        $sold->remarks = $data['remarks'];

    	$result = $sold-save();
    	return 'saved';
    }

}
