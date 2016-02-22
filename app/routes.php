<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
//Route::get('/admins', 'Admins_Controller@index');

Route::group(array('prefix'=>'users'),function(){
    Route::get('/',array('uses'=>'UserController@get_all'));
    Route::group(array('prefix'=>'/find'),function(){
         Route::get('/{id}',array('uses'=>'UserController@get_user'));        
         Route::get('/byEmail/{email}',array('uses'=>'UserController@get_userByEmail'));       
    });
    Route::post('/create', array('uses'=>'UserController@post_user'));
    Route::put('/edit/{id}', array('uses'=>'UserController@put_user'));
    Route::delete('/delete/{id}', array('uses'=>'UserController@delete_user')); 
    Route::post('/login', array('uses' => 'UserController@doLogin'));

});

Route::group(array('prefix'=>'companies'),function(){
    Route::get('/',array('uses'=>'CompanyController@get_all'));
    Route::group(array('prefix'=>'/find'),function(){
         Route::get('/{id}',array('uses'=>'CompanyController@get_company'));              
    });
    Route::post('/create', array('uses'=>'CompanyController@post_company'));
    Route::put('/edit/{id}', array('uses'=>'CompanyController@put_company'));
    Route::delete('/delete/{id}', array('uses'=>'CompanyController@delete_company')); 

});

Route::group(array('prefix'=>'associations'),function(){
    Route::get('/',array('uses'=>'AssociationController@get_all'));
    Route::group(array('prefix'=>'/find'),function(){
         Route::get('/{id}',array('uses'=>'AssociationController@get_association'));              
    });
    Route::post('/create', array('uses'=>'AssociationController@post_association'));
    Route::put('/edit/{id}', array('uses'=>'AssociationController@put_association'));
    Route::delete('/delete/{id}', array('uses'=>'AssociationController@delete_association')); 

});

Route::group(array('prefix'=>'donations'),function(){
    Route::get('/',array('uses'=>'DonationController@get_all'));
    Route::group(array('prefix'=>'/find'),function(){
         Route::get('/{id}',array('uses'=>'DonationController@get_donation'));              
    });
    Route::post('/create', array('uses'=>'DonationController@post_donation'));
   // Route::put('/edit/{id}', array('uses'=>'DonationController@put_donation'));
    Route::delete('/delete/{id}', array('uses'=>'DonationController@delete_donation')); 

});

Route::group(array('prefix'=>'surveys'),function(){
    Route::get('/',array('uses'=>'SurveyController@get_all'));
    Route::get('/dispo/{user_id}',array('uses'=>'SurveyController@get_dispo_survey'));
    Route::group(array('prefix'=>'/find'),function(){
         Route::get('/{id}',array('uses'=>'SurveyController@get_survey'));              
    });
    Route::post('/create', array('uses'=>'SurveyController@post_survey'));
    Route::put('/edit/{id}', array('uses'=>'SurveyController@put_survey'));
    Route::delete('/delete/{id}', array('uses'=>'SurveyController@delete_survey')); 

});

Route::group(array('prefix'=>'questions'),function(){
    Route::get('/',array('uses'=>'QuestionController@get_all'));
    Route::group(array('prefix'=>'/find'),function(){
         Route::get('/{id}',array('uses'=>'QuestionController@get_question'));              
    });
    Route::post('/create', array('uses'=>'QuestionController@post_question'));
    Route::put('/edit/{id}', array('uses'=>'QuestionController@put_question'));
    Route::delete('/delete/{id}', array('uses'=>'QuestionController@delete_question')); 

});

Route::group(array('prefix'=>'reponses'),function(){
    Route::get('/',array('uses'=>'ReponseController@get_all'));
    Route::group(array('prefix'=>'/find'),function(){
         Route::get('/{id}',array('uses'=>'ReponseController@get_reponse'));              
    });
    Route::post('/create', array('uses'=>'ReponseController@post_reponse'));
    Route::put('/edit/{id}', array('uses'=>'ReponseController@put_reponse'));
    Route::delete('/delete/{id}', array('uses'=>'ReponseController@delete_reponse')); 

});


Route::group(array('prefix'=>'user_survey'),function(){
    Route::get('/',array('uses'=>'UserSurveyController@get_all'));
    Route::group(array('prefix'=>'/find'),function(){
         Route::get('/{id}',array('uses'=>'UserSurveyController@get_user_survey'));              
    });
    Route::post('/create', array('uses'=>'UserSurveyController@post_user_survey'));
  //  Route::put('/edit/{id}', array('uses'=>'UserSurveyController@put_user_survey'));
   // Route::delete('/delete/{id}', array('uses'=>'UserSurveyController@delete_user_survey')); 

});

