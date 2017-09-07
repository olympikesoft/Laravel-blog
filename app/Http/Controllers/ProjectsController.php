<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Projects;
use View;




class ProjectsController extends Controller
{
  public function index(){
    // get all the bears
        $posts = Posts::all();


 return View::make('welcome', compact('posts'));
}

  public function paginationProjects(){


     $projects = Projects::with(['user'])->paginate(3);
    //  dd($posts);

      return View::make('welcome', compact('projects'));
  }

}
