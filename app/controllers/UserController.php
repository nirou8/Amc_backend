<?php

class UserController extends BaseController {

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
		//return User::all();
            return User:: with( [ 'donations'] )->get();
	}
        
       
        
         public function get_user($id)
	{
		return User::find($id);
	}
        
        public function get_userByEmail($email)
	{
		return User::where('email',$email)->first();
	}
        
        
        public function post_user(){
            $user = Input::all();
            $v = Validator::make($user,  User::$rules);
            
            if($v->passes()){
                $user['password'] = md5($user['password']);
                if(Input::file('img')!=null){
                Input::file('img')->move('../media/imgs/user', Input::file('img')->getClientOriginalName());
                $user['img'] = 'media/imgs/user/' . Input::file('img')->getClientOriginalName(); // if you want your real path on harddrive
                }
               $u = User::create($user);
                
                return "true";
            }
            return "false";
               
        }
        
        public function put_user($id){
            $user = Input::all();
           // $v = Validator::make($user,  User::$rules);
           // if($v->passes()){
                $user1 = User::find($id); 
               // Patient::create($patient);
             /*   if(Input::file('img')!=null){
                Input::file('img')->move('../media/imgs/user', Input::file('img')->getClientOriginalName());
                $user['img'] = 'media/imgs/user/' . Input::file('img')->getClientOriginalName(); // if you want your real path on harddrive
                } */
                $user1->update($user);
                
                return "true";
          //  }
            //return $v->messages();
         //   return "false";
               
        }
        
        
        public function delete_user($id){
            User::find($id)->delete();
        }
        
        
        public function doLogin()
{
// validate the info, create rules for the inputs
$rules = array(
    'email'    => 'required|email', // make sure the email is an actual email
    'password' => 'required|alphaNum|min:6' // password can only be alphanumeric and has to be greater than 3 characters
);

// run the validation rules on the inputs from the form
$validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
if ($validator->fails()) {
    return "false";
        
} else {

    // create our user data for the authentication
    $userdata = array(
        'email'     => Input::get('email'),
        'password'  => Input::get('password')
    );

    // attempt to do the login
   // echo Input::all();
    $user = User::where('email',Input::get('email'))->where('password', md5(Input::get('password')))->first();
    if ($user) {

        // validation successful!
        // redirect them to the secure section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
     
        return $user;

    } else {        

        // validation not successful, send back to form 
        return "false";

    }

}
}
        

}
