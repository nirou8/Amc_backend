<?php

class UserSurveyController extends BaseController {

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
		return UserSurvey::all();
           // return User_Survey:: with( [ 'user_surveys'] )->get();
	}
        
       
        
         public function get_user_survey($id)
	{
		return UserSurvey::find($id);
	}
        
        
        public function post_user_survey(){
            $user_survey = Input::all();
           // $v = Validator::make($user_survey,  UserSurvey::$rules);
            
          //  if($v->passes()){
               
              UserSurvey::create($user_survey);
                
                return "true";
           // }
           // return "false";
               
        }
        
        public function put_user_survey($id){
            $user_survey = Input::all();
           // $v = Validator::make($user_survey,  User_Survey::$rules);
           // if($v->passes()){
                $user_survey1 = UserSurvey::find($id); 
               // Patient::create($patient);
                $user_survey1->update($user_survey);
                
                return "true";
          //  }
            //return $v->messages();
         //   return "false";
               
        }
        
        
        public function delete_user_survey($id){
            UserSurvey::find($id)->delete();
        }
        
        
     
}
