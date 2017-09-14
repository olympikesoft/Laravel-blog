<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Posts;
use View;
use redirect;
use Carbon\Carbon;




class PostsController extends Controller
{
  public function index(){
    // get all the bears
        $posts = Posts::all();



 return View::make('welcome', compact('posts'));
}

public function editpost(Request $request, $id)
{
  $posts = Posts::findOrFail($id);


  $timenow = Carbon::now(+1);



    /*$posts->update($req->only([
      'text',
      'title'

    ]));*/
  try{

    $posts->title = $request->title;
    $posts->text = $request->content;
    $posts->User_id = $request->username;
    $posts->id = $request->post_id;
    $posts->datetime = $timenow;
    $posts->save();



}catch (\Exception $e) {
    return $e->getMessage();
}






/* Request all from database atributes
  $posts -> update(req->all);
  */
}


public function updatePost($id){

$post = Posts::findOrFail($id);

  return View::make('posts.edit',compact('post'));

}

public function insert_post(Request $request)
{


  $timenow = Carbon::now(+1);



    /*$posts->update($req->only([
      'text',
      'title'

    ]));*/
  try{
    $posts = new Posts;
    $posts->title = $request->title;
    $posts->text = $request->content;
    $posts->User_id = $request->username;
    $posts->datetime = $timenow;
    $posts->save();



}catch (\Exception $e) {
    return $e->getMessage();
}



}

public function getAllPosts() {
        $posts = Posts::paginate(4);

        /*foreach ($posts as $post){

          /* $username = $post->user->name;
           //do something with $username

       }*/

  //    dd($posts[0]->user['name']);

       return View::make('home', compact('posts'));
       //here the $detailed_posts can be defined in the 'do something' above
   }

public function destroy($id){


/*Where Post->id = $id*/
  $records= Posts::where('id', $id);

  try{
  $records->delete();
}catch (\Exception $e) {
    return $e->getMessage();
}

  return redirect('/home');
}

public function searchValues()
{
    $search = \Request::get('search'); //<-- we use global request to get the param of URI

    /*$posts = Posts::where('title','like','%'.$search.'%')
        ->orderBy('id')
        ->paginate(5);*/

        $posts = Posts::with('user')->where('title','like','%'.$search.'%')
        ->orderBy('id')
        ->paginate(5);

      //  dd($posts[0]->title);



        /*->firstOrFail();*/

    return view('search',compact('posts'));
}

/*Pagination for Posts*/
public function paginationPosts()
{

//  $posts = Posts::paginate(3);
 $posts = Posts::with(['user', 'comments.user'])->paginate(4);



  return View::make('/blogs', compact('posts'));
}

public function showPage($id)
{
  $posts = Posts::where('id', $id)->with('user', 'comments.user')->firstOrFail();

  //dd($posts);
  return View::make('posts')->with('posts',$posts);
}

/*Where -> find is `where($model->getKeyName(), $value)->first()`*/
/*`Post::with('user')->first()` will load the first `Post` with it’s `user` relation already loaded*/

/*Conditions with values*/



/*$value = 'someName';
Project::with(['clients', 'tasks', 'status'])
       ->whereHas('status', function($q) use($value) {
       // Query the name field in status table
       $q->where('name', '=', $value); // '=' is optional
})
->where('status_id', '!=', '2')
->whereUserId(Auth::user()->id)
->get();

*****/


/*
/*Send data to welcome.blad*/
/*
      return View::make('welcome', compact('posts'));*/


    //


}
