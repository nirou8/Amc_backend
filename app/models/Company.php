<?php
/* un Exemple d'une classe qui représente un model d'une base de données
 * en utilisant l'ORM Eloquent du framework Laravel
 */
class Company extends Eloquent  {

	

	public  $table = 'company';
       // protected $attributes;
        
         public function surveys()
    {
        return $this->hasMany('Survey');
    }
    
    
  
        
         protected $fillable = array('nom','img');
        public static $rules = array('nom'=>'required');
}

