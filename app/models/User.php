<?php

class User extends Eloquent  {

	

	public  $table = 'users';
       // protected $attributes;
        
         public function reponses()
    {
        return $this->hasMany('Reponse');
    }
    
    
    public function donations()
    {
        return $this->hasMany('Donation');
    }
    
    
    
    public function UserSurvey()
    {
        return $this->hasMany('UserSurvey');
    } 
    
        
        protected $hidden = array('password');
         protected $fillable = array('password','nom','prenom','email','montant','img');
        public static $rules = array('password'=>'required',
            'email'=>'required');
}

