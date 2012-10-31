<?php

Route::get('/', function()
{
	return View::make('home.index',array('msg' => ''));
});

Route::get('party', function()
{
	return View::make('party.index');
});

Route::get('user', function()
{
	return View::make('user.index',array('msg' => ''));
});

Route::get('usersupdatepassword', function()
{
	$user1 = User::find(1);
	$user1->password = Hash::make('password1');
	$user1->save();
	
	$user2 = User::find(2);
	$user2->password = Hash::make('password2');
	$user2->save();

	$user2 = User::find(3);
	$user2->password = Hash::make('password3');
	$user2->save();
		
	return 'Done !';
});


// party Resource
Route::get('parties', array('as' => 'parties', 'uses' => 'party@index'));					// OK
Route::get('party/(:any)', array('as' => 'party', 'uses' => 'party@show'));					// OK
Route::get('party/new', array('as' => 'new_party', 'uses' => 'party@new'));					// OK
Route::get('party/(:any)/edit', array('as' => 'edit_party', 'uses' => 'party@edit'));		// OK
Route::post('party', 'party@create');														// 
Route::put('party/(:any)', 'party@update');													// 
Route::delete('party/(:any)', 'party@destroy');												// 

// user Resource
Route::get('users', array('as' => 'users', 'uses' => 'user@index'));
Route::get('users/email_available', array('uses' => 'user@email_available'));				// OK
//Route::get('users/(:any)', array('as' => 'user', 'uses' => 'user@show'));
Route::post('user', array('as' => 'create_user', 'uses' =>'user@create'));					// OK
Route::put('user/(:any)', 'user@update');													// OK
Route::post('login', array('as' => 'login', 'uses' => 'user@login'));						// OK
Route::get('logout', array('as' => 'logout', 'uses' => 'user@logout'));						// OK
Route::get('confirm/(:any)', array('as' => 'confirm_user', 'uses' => 'user@confirm'));		// OK

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});