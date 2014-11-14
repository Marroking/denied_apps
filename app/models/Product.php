<?php

class Product extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

 	public function product_price_list()
  {
    return $this->belongsTo('ProductPriceList', 'IdProductPriceList'); 
  }

  public function family()
  {
    return $this->belongsTo('Family');
  }

  public function inventory()
  {
    return $this->belongsTo('inventory');
  }

  public function incidence_product()
  {
    return $this->hasOne('IncidenceProduct');
  }


}