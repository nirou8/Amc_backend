<?php

class Reponse extends Eloquent  {

	

	public  $table = 'reponses';
       // protected $attributes;
        
         public function question()
    {
        return $this->belongsTo('Question');
    }
    
       public function user()
    {
        return $this->belongsTo('User');
    }
    
   
    
  
        
         protected $fillable = array('reponse', 'user_id', 'question_id');
        public static $rules = array('reponse'=>'required');
}

