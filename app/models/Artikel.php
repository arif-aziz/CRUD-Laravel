<?php

class Artikel extends Eloquent {

	protected $table = 'm_artikel';
	protected $primaryKey = "id_artikel";

	protected $guarded = array();
	public static $rules = array();

	public function relUser()
    {
        return $this->belongsTo("User", "id_user");
    }
    
}