<?php

class SurveyController extends BaseController {

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
		//return Survey::all();
           return Survey:: with( [ 'questions', 'company'] )->get();
	}
        
       
        
         public function get_survey($id)
	{
		return Survey::find($id);
	}
        
         public function get_dispo_survey($user_id)
	{
            
		//return Survey::whereNotIn('UserSurvey',function ($query) use ($user_id) {
  //  $query->where('user_id', '<>', $user_id);

//})->get();
             
           /*  Survey::where('UserSurvey', function($query) use ($user_id){
                 $query->where('user_id','<>',$user_id);
             })->get(); */
             
             $ids = DB::table('user_survey')->where('user_id','=',$user_id)->lists('survey_id');
             return Survey::with( [ 'questions', 'company'] )->whereNotIn('id',$ids)->get();
	}
        
       
        
        
        public function post_survey(){
            $survey = Input::all();
            $v = Validator::make($survey,  Survey::$rules);
            
            if($v->passes()){
               
              Survey::create($survey);
                
                return "true";
            }
            return "false";
               
        }
        
        public function put_survey($id){
            $survey = Input::all();
           // $v = Validator::make($survey,  Survey::$rules);
           // if($v->passes()){
                $survey1 = Survey::find($id); 
               // Patient::create($patient);
                $survey1->update($survey);
                
                return "true";
          //  }
            //return $v->messages();
         //   return "false";
               
        }
        
        
        public function delete_survey($id){
            Survey::find($id)->delete();
        }
        
        
     
}
