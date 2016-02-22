<?php

class Question extends Eloquent  {

	

	public  $table = 'question';
       // protected $attributes;
        
         public function survey()
    {
        return $this->belongsTo('Survey');
    }
    
    public function reponses()
    {
        return $this->hasMany('Reponse');
    }
   
    
  
        
         protected $fillable = array('libelle', 'survey_id');
        public static $rules = array('libelle'=>'required');
}

