<?php

class Customer extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function products_rejects()
    {
        return $this->hasMany('ProductReject');
    }

 	public function price_list()
    {
        return $this->hasOne('PriceList');
    }
}