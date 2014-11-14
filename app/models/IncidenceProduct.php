<?php

class IncidenceProduct extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function user()
  {
    return $this->belongsTo('User');
  }

  public function reject()
  {
    return $this->belongsTo('Reject');
  }

  public function incidence_product()
  {
    return $this->belongsTo('Product');
  }

}