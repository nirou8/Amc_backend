<?php

class CompanyController extends BaseController {

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
		return Company::all();
           // return Company:: with( [ 'donations'] )->get();
	}
        
       
        
         public function get_company($id)
	{
		return Company::find($id);
	}
        
        
        public function post_company(){
            $company = Input::all();
            $v = Validator::make($company,  Company::$rules);
            
            if($v->passes()){
               
              Company::create($company);
                
                return "true";
            }
            return "false";
               
        }
        
        public function put_company($id){
            $company = Input::all();
           // $v = Validator::make($company,  Company::$rules);
           // if($v->passes()){
                $company1 = Company::find($id); 
               // Patient::create($patient);
                $company1->update($company);
                
                return "true";
          //  }
            //return $v->messages();
         //   return "false";
               
        }
        
        
        public function delete_company($id){
            Company::find($id)->delete();
        }
        
        
     
}
