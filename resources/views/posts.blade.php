<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Company</h1>
  <p>We specialize in blablabla</p>
  <form action="/subscribers" method="post">
      {{ csrf_field() }}
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="submit" class="btn btn-danger">Subscribe
  </form>
</div>

  <div class="flex-center position-ref full-height">


      <div class="content">
          <div class="title m-b-md">

          </div>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <div class="input-group">
        <form action="/search" method="get" class="sidebar-form">
        <input type="text" class="form-control" name="search" placeholder="Search Blog..">
        <span class="input-group-btn">
          <input type="submit" class="btn btn-danger">
            <span class="glyphicon glyphicon-search"></span>

        </span>
      </div>
    </form>
    </div>

    <div class="row">


      <div class="col-sm-7">

        <hr>
        <h2>{{ $posts->title}}</h2>
        <h5><span class="glyphicon glyphicon-time"></span> Post by {{$posts->user['name']}}, Sep 27, 2015.</h5>

        <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
        <p>Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <br><br>



  @if (Route::has('login'))
      @if (Auth::check())
        <h4>Leave a Comment:</h4>
        <form action="/insert_comment" method="post">
            {{ csrf_field() }}
          <div class="form-group">
            <textarea class="form-control" rows="3" name="text" required></textarea>
          </div>
           <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id);?>">
           <input type="hidden" name="post_id" value="{{$posts->id}}">
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
        <br><br>

      @endif
  @endif
        <p><span class="badge"><!--- value---></span> Comments:</p><br>

        <div class="row">
          <!---Start rows comments --->


          	@foreach ($posts->comments as $comment)
          <div class="col-sm-2 text-center">
            <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
          </div>
          <div class="col-sm-10">

            <h4>{{ $comment->user->name }} <small>Sep 29, 2015, 9:12 PM</small></h4>
            <p>{{ $comment->comment }}</p>
            <br>
          </div>

          <!--- Rows comments --->
          @endforeach
        </div>
      </div>
    </div>
    </div>
  </div>

</div>

</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
