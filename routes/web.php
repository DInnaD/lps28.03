<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
* Main page route 'middleware' => 'web'
*/
Route::group([], function (){
	//pages  + UserSender is absent
	Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);

 	
 	//WEBmenu is apsent
    Route::get('/page/{alias}',['uses'=>'PageController@execute','as'=>'page']);
	Route::get('/page2/{alias2}',['uses'=>'PageController@execute2','as'=>'page2']);
	Route::get('/page3/{alias3}',['uses'=>'PageController@execute3','as'=>'page3']);
	Route::get('/page4/{alias4}',['uses'=>'PageController@execute4','as'=>'page4']);
	Route::get('/page5/{alias5}',['uses'=>'PageController@execute5','as'=>'page5']);
	Route::get('/page6/{alias6}',['uses'=>'PageController@execute6','as'=>'page6']);
	Route::get('/page7/{alias7}',['uses'=>'PageController@execute7','as'=>'page7']);
	Route::get('/page8/{alias8}',['uses'=>'PageController@execute8','as'=>'page8']);
	Route::get('/page9/{alias9}',['uses'=>'PageController@execute9','as'=>'page9']);
	Route::get('/page10/{alias10}',['uses'=>'PageController@execute10','as'=>'page10']);
	Route::get('/page11/{alias11}',['uses'=>'PageController@execute11','as'=>'page11']);
	Route::get('/page12/{alias12}',['uses'=>'PageController@execute12','as'=>'page12']);
 	Route::get('/portfolio/{alias}',['uses'=>'PageController@executePortfolio','as'=>'portfolio']);
	Route::get('/portfolio2/{alias2}',['uses'=>'PageController@executePortfolio2','as'=>'portfolio2']);
	Route::get('/portfolio3/{alias3}',['uses'=>'PageController@executePortfolio3','as'=>'portfolio3']);
	Route::get('/portfolio4/{alias4}',['uses'=>'PageController@executePortfolio4','as'=>'portfolio4']);
	Route::get('/portfolio5/{alias5}',['uses'=>'PageController@executePortfolio5','as'=>'portfolio5']);
	Route::get('/portfolio6/{alias6}',['uses'=>'PageController@executePortfolio6','as'=>'portfolio6']);
	Route::get('/portfolio7/{alias7}',['uses'=>'PageController@executePortfolio7','as'=>'portfolio7']);
	Route::get('/portfolio8/{alias8}',['uses'=>'PageController@executePortfolio8','as'=>'portfolio8']);
	Route::get('/portfolio9/{alias9}',['uses'=>'PageController@executePortfolio9','as'=>'portfolio9']);
	Route::get('/portfolio10/{alias10}',['uses'=>'PageController@executePortfolio10','as'=>'portfolio10']);
	Route::get('/portfolio11/{alias11}',['uses'=>'PageController@executePortfolio11','as'=>'portfolio11']);
	Route::get('/portfolio12/{alias12}',['uses'=>'PageController@executePortfolio12','as'=>'portfolio12']);

 	 
   
    //filter prases is apsent
    Route::get('/wordbook/{name}',function(){
	return redirect('/');
	})->where('name','[A-Za-z]+');
	Route::resource('wordbook','PageController');
	Route::post('getData','PageController@getData');
	});
	//confirmmail is apsent, further... 
/**
* AdminPanel page route
*/

//Auth::routes();

//Route::get('/logout', 'Auth\LoginController@logout');
Route::group(['middleware'	=>	'auth'], function(){
	Route::post('logout', 'Auth\LoginController@logout')->name('logout');
	});
Route::group(['middleware'	=>	'guest'], function(){
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login');
	});



Route::get('/admin', 'HomeController@index')->name('admin');
         //on the laravel
// Route::get('api/{somevar}', 'ApiController@index')->name('admin');
// public function index(Somevar $somevar)
//     {
//		$result = '';
//         switch ($somevar)
//         {

//         	case 'someFunction':

//         	$result = $this->someFunction($_GET['name']);
//         	break;

//         }
//         echo json_encode(([$responce => $somevar]));
        
//     } 

			// on the angular
// privat function someFunction($FirstName)
//     {
//         return "I'm $FirstName";
        
//     }     
/**
* Admin page route
*/

Route::group(['prefix' => 'admin','middleware' => 'auth'], function (){


/**
* WITH RESOURCE
*/


Route::resource('logos', 'LogosController');
Route::resource('socials', 'SocialysController');
Route::resource('portfolios', 'PortfoliosController');
Route::resource('services', 'ServicesController');
Route::resource('peoples', 'PeoplesController');
Route::prefix('peoples/{people}')->group(function () {
	Route::resource('socialPeoples', 'SocialPeoplesController');	    
	 
});

//Route::get('portfolioRestore', 'PortfoliosController@restore')->name('restore');
Route::prefix('portfolios/{portfolio}')->group(function () {
	Route::get('topic', 'PagesController@topic')->name('topic');
	Route::resource('pages', 'PagesController');

	Route::prefix('pages/{page}')->group(function () {
		Route::resource('socialAlls', 'SocialAllsController');
		Route::resource('portfolioAlls', 'PortfolioAllsController');
		Route::resource('peopleAlls', 'PeopleAllsController');

		//Route::prefix('peopleAlls/{peopleAll}')->group(function () {
			//Route::resource('socialPeopleAlls', 'SocialPeopleAllsController');	    
	 
		//});
	});	
});

});	
