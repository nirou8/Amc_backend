<?php

class Survey extends Eloquent  {

	

	public  $table = 'survey';
       // protected $attributes;
        
         public function company()
    {
        return $this->belongsTo('Company');
    }
    
     public function questions()
    {
        return $this->hasMany('Question');
    }
   
    
    public function UserSurvey()
    {
        return $this->hasMany('UserSurvey');
    } 
    
        
         protected $fillable = array('title', 'etat', 'price', 'company_id');
        public static $rules = array('price'=>'required');
}

