<?php

class ReponseController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
        public $restful = true;
	public function get_all()
	{
		return Reponse::all();
           // return Reponse:: with( [ 'reponses'] )->get();
	}
        
       
        
         public function get_reponse($id)
	{
		return Reponse::find($id);
	}
        
        
        public function post_reponse(){
            $reponse = Input::all();
            $v = Validator::make($reponse,  Reponse::$rules);
            
            if($v->passes()){
               
              Reponse::create($reponse);
                
                return "true";
            }
            return "false";
               
        }
        
        public function put_reponse($id){
            $reponse = Input::all();
           // $v = Validator::make($reponse,  Reponse::$rules);
           // if($v->passes()){
                $reponse1 = Reponse::find($id); 
               // Patient::create($patient);
                $reponse1->update($reponse);
                
                return "true";
          //  }
            //return $v->messages();
         //   return "false";
               
        }
        
        
        public function delete_reponse($id){
            Reponse::find($id)->delete();
        }
        
        
     
}
