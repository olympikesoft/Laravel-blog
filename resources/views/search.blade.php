
<div class="container-fluid">
  <div class="row content">

    <div class="row">
      @foreach ($posts as $post)
      <div class="col-sm-7">

        <hr>
        <h2>{{ $post->title}}</h2>


        <h5><span class="glyphicon glyphicon-time"></span> Post by {{$post->user['name']}}, Sep 27, 2015.</h5>

        <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
        <p>Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <br><br>


        <p><span class="badge"><!--- value---></span> Comments:</p><br>

        <div class="row">
          <!---Start rows comments --->
          <div class="col-sm-2 text-center">
            <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
          </div>
          <div class="col-sm-10">
            <h4>Anja <small>Sep 29, 2015, 9:12 PM</small></h4>
            <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <br>
          </div>
          <!--- Rows comments --->
        </div>
      </div>
       @endforeach

    
