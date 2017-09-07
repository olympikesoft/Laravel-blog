<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    //use App\Subscriber;     //** add this
    use Validator, Input, Redirect;
    use App\Subscribers;


    class SubscribersController extends Controller
    {

        //This method is to process the form
        public function postSubmit(Request $request) {

            $validation = Validator::make($request->all(), [
                //email field should be required, should be in an email format, and should be unique

              'email' => 'required|email|unique:subscribers',
            ]);

            if($validation->fails()) {
                return $validation->errors()->first();
            }

          $create = Subscribers::create(array( 'email' => $request->email, ));

            return Redirect::to('/')->with('success','You have been successfully subscribe to us.');

        }
    }
