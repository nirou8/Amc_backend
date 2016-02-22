<?php

class Donation extends Eloquent  {

	

	public  $table = 'donation';
       // protected $attributes;
        
         public function user()
    {
        return $this->belongsTo('User');
    }
    
    public function association()
    {
        return $this->belongsTo('Association');
    }
    
    
   
    
        
         protected $fillable = array('montant','user_id','association_id');
        public static $rules = array('montant'=>'required');
}

