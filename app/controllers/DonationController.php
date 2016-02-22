<?php

class DonationController extends BaseController {

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
		return Donation::all();
           // return Donation:: with( [ 'donations'] )->get();
	}
        
       
        
         public function get_donation($id)
	{
		return Donation::find($id);
	}
        
        
        public function post_donation(){
            $donation = Input::all();
            $v = Validator::make($donation,  Donation::$rules);
            
            if($v->passes()){
               
              Donation::create($donation);
                
                return "true";
            }
            return "false";
               
        }
        
        public function put_donation($id){
            $donation = Input::all();
           // $v = Validator::make($donation,  Donation::$rules);
           // if($v->passes()){
                $donation1 = Donation::find($id); 
               // Patient::create($patient);
                $donation1->update($donation);
                
                return "true";
          //  }
            //return $v->messages();
         //   return "false";
               
        }
        
        
        public function delete_donation($id){
            Donation::find($id)->delete();
        }
        
        
     
}
