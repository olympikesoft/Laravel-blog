<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OlympikeSoft Startup</title>

    <link href="https://olympikesoft.com/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://olympikesoft.com/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <link href="https://olympikesoft.com/css/agency.min.css" rel="stylesheet">
     <link href="https://olympikesoft.com/css/signup.css"  rel="stylesheet" type="text/css"/>

      <link href="https://olympikesoft.com/css/style_min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>


<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
</script>

</head>

<body id="page-top" class="index">
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Olympike Soft</a>
            </div>



            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                     <li>
                        <a href="/blogs">Blog</a>
                    </li>

                    <li>


                        <a class="page-scroll" href="#about">About</a>
                    </li>
                  <!--  <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>!-->
                    <li>
                        <a href="#services">Services</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    @if (Route::has('login'))

                            @if (Auth::check())
                              <li>
                                  <a class="page-scroll" href="{{ url('/home') }}">Home</a>
                              </li>
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <li>
                                <a href="{{ url('/login') }}">Login</a>
                              </li>
                              <li>
                                <a href="{{ url('/register') }}">Register</a>
                              </li>
                            @endif
                        </div>
                    @endif


                </ul>
            </div>
        </div>
    </nav>





 <section id="portfolio">
   <div class="container">
       <div class="row">
               <div class="col-lg-12 text-center">
                   <h2 class="section-heading">Blog Posts</h2>

                     {{ $posts->links() }}
               </div>
           </div>
               <div class="row">
<div class="main_portfolio_content">
                         @foreach ($posts as $post)
                              <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
                                   <img src="{{$post->image}}" alt="" />
                                       <h6>{{ $post->title}}</h6>

                                     <!---<p class="product_price"> ></p>--->
                                     <span class="pull-right"
                                       {{$post->datetime}}
                                     </span>
                                       <a href="/posts/{{$post->id}}" class="btn btn-primary">+</a>

                                   </div>



                               @endforeach
                                </div>

                           </div>
                           </div>
           </div>
</section>







<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; OlympikeSoft.com 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/olympikesoftPortugal/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/company-beta/11211172/"><i class="fa fa-linkedin"></i></a>
                        </li>

                    </ul>
                </div>


             <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                          <li><a href="mailto:admin@olympikesoft.com">Contact</a>
                        </li>

                    </ul>
                </div>




                </div>







            </div>
        </div>
    </footer>









    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
    <script src="js/insert_newsletter.js"></script>
     <script src="js/getposts.js"></script>

</body>
