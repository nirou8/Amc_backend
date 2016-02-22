<?php

class QuestionController extends BaseController {

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
		return Question::all();
           // return Question:: with( [ 'questions'] )->get();
	}
        
       
        
         public function get_question($id)
	{
		return Question::find($id);
	}
        
        
        public function post_question(){
            $question = Input::all();
            $v = Validator::make($question,  Question::$rules);
            
            if($v->passes()){
               
              Question::create($question);
                
                return "true";
            }
            return "false";
               
        }
        
        public function put_question($id){
            $question = Input::all();
           // $v = Validator::make($question,  Question::$rules);
           // if($v->passes()){
                $question1 = Question::find($id); 
               // Patient::create($patient);
                $question1->update($question);
                
                return "true";
          //  }
            //return $v->messages();
         //   return "false";
               
        }
        
        
        public function delete_question($id){
            Question::find($id)->delete();
        }
        
        
     
}
