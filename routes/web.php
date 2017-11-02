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

Route::post('/insert_comment','CommentController@postSubmit');


Route::post('/edit/{id}','PostsController@editpost');


Route::get('/blogs','PostsController@paginationPosts');

Route::get('/posts/{id}','PostsController@showPage');
Route::get('/posts/remove/{id}','PostsController@destroy');
Route::get('/posts/edit/{id}','PostsController@updatePost');


Route::post('/create/post', 'PostsController@insert_post');

/*Remove post*/

Route::get('/post/create', function()
{
  return View::make('posts.create');
});


/*Route::get('/search/{search}', function($search){

/* Passing parameter $search */
  /*return View::make('search')->with('search', $search);

});*/

Route::get('/search','PostsController@searchValues');

Route::get('/', 'ProjectsController@paginationProjects');




/*
Route::post('/search',function(){
    $q = Input::get ( 'search' ); /* Get value search from form*/
    /*$user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('welcome')->withDetails($user)->withQuery ( $q );
    else return view ('welcome')->withMessage('No Details found. Try to search again !');
});*/

/* Send all */

Route::post('/subscribers', 'SubscribersController@postSubmit');

/*Send with Username
Route::get('/','PostsController@getAllPosts');*/

Route::post("/insert_comment", 'CommentController@postSubmit');

/*
Route::get('/', 'PostsController@index');*/


Auth::routes();

Route::get('/home','PostsController@getAllPosts');

/*Route::get('/home', 'HomeController@index')->name('home');*/

/*Routes for Paypal*/
Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'AddMoneyController@payWithPaypal',));
Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'payment.status','uses' => 'AddMoneyController@getPaymentStatus',));
