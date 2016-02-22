<?php

class UserSurvey extends Eloquent  {

	

	public  $table = 'user_survey';
       // protected $attributes;
        
         public function user()
    {
        return $this->belongsTo('User');
    }
    
        public function survey()
    {
        return $this->belongsTo('Survey');
    }

       
         protected $fillable = array('user_id','survey_id');
       
}

