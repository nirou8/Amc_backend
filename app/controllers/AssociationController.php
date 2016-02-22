<?php
/*
 * ici c'est une classe de WebService composée de plusieurs méthodes principalement
 * les méthodes CRUD qui permettent d'agir directement sur la base de données
 */
class AssociationController extends BaseController {

	
        public $restful = true;
	public function get_all()
	{
		return Association::all();
           // return Association:: with( [ 'donations'] )->get();
	}
        
       
        
         public function get_association($id)
	{
		return Association::find($id);
	}
        
        
        public function post_association(){
            $association = Input::all();
            $v = Validator::make($association,  Association::$rules);
            
            if($v->passes()){
               
              Association::create($association);
                
                return "true";
            }
            return "false";               
        }
        
        public function put_association($id){
            $association = Input::all();
           // $v = Validator::make($association,  Association::$rules);
           // if($v->passes()){
                $association1 = Association::find($id); 
               // Patient::create($patient);
                $association1->update($association);
                
                return "true";
         //  }
            //return $v->messages();
          // return "false";
               
        }
        
        
        public function delete_association($id){
            Association::find($id)->delete();
        }
        
        
     
}
