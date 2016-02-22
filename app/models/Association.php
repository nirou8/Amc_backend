<?php

class Association extends Eloquent  {

	

	public  $table = 'association';
       // protected $attributes;
        
         public function donations()
    {
        return $this->hasMany('Donation');
    }
    
    
   
        
         protected $fillable = array('nom','img');
        public static $rules = array('nom'=>'required');
}

