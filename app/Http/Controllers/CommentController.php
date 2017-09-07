<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Subscriber;     //** add this
use Validator, Input, Redirect;
use App\Comments;
use Auth;

class CommentController extends Controller
{
    //
    //This method is to process the form
    public function postSubmit(Request $request) {

      $id_user = Auth::id();

        $validation = Validator::make($request->all(), [
            //email field should be required, should be in an email format, and should be unique

              'text' => 'required|max:25'

        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }

/*See values from the request**/
/*dd($request->all());*/
    /*  $create = Comments::create(array( 'comment' => $request->text, 'Post_id' => $request->post_id, 'User_id' => $request->user_id, ));
      */

      $comment = new Comments;
      $comment->comment = $request->text;
      $comment->User_id = $id_user;
      $comment->Post_id = $request->post_id;
      $comment->save();

        return Redirect::to('/')->with('success','You have been successfully subscribe to us.');

    }

    /* Posts::where('user_id', '=', $request->user_id)->get();*/
}
