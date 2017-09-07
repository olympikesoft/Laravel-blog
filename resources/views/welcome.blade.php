<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OlympikeSoft Startup</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://olympikesoft.com/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://olympikesoft.com/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="https://olympikesoft.com/css/agency.min.css" rel="stylesheet">
     <link href="https://olympikesoft.com/css/signup.css"  rel="stylesheet" type="text/css"/>

      <link href="https://olympikesoft.com/css/style_min.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>


<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
</script>

</head>

<body id="page-top" class="index">
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Olympike Soft</a>
            </div>



            <!-- Collect the nav links, forms, and other content for toggling -->
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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
   <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>We are OlympikeSoft</h1>
            <h3>Get start your next awesome project</h3>
        </hgroup>

      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">
        <hgroup>
            <h1>We give you innovation</h1>

        </hgroup>

      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">
        <hgroup>
            <h1>Comming soon</h1>

        </hgroup>

      </div>
    </div>
  </div>
</div>



 <section id="portfolio">
    <div class="container">
        <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">See our awesome Portfolio</h3>

                </div>
            </div>
                <div class="row">
<div class="main_portfolio_content">
  @if (count($projects) > 0)
      {{ $projects->links() }}
                          @foreach ($projects as $project)
                               <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
                                    <img src="{{$project->image_url}}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>{{ $project->name}}</h6>
                                      <!---<p class="product_price"> ></p>--->
                                        <a href="/projects.php?id={{$project->id}}" class="btn btn-primary">+</a>
                                    </div>
                                </div>

                                @endforeach

@else
        Não tem elementos
    @endif
                            </div>
                            </div>

            </div>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" -->
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2010</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">The idea was created in the papper. </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2016</h4>
                                    <h4 class="subheading">Up time</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">The company start to create an oficial services and start recrute some ninjas code to start the new era.</div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2017</h4>
                                    <h4 class="subheading">Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">We have take the horses and start expansion in the world of GAMES and Apps.</div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

              <!-- Contact Section -->
    <section id="services">

            <div class="row">
                <div class="col-lg-12">
            <div class="col-md-3">
              <div class="newsletter">
                <h4>WHO WE ARE</h4>
                <p>Olympikesoft is one Company for the sole purpose of Start-up IT company developer for Android apps and Game Development</p>
              </div>
            </div>
            <div class="col-md-3">
              <h4>WHAT WE DO</h4>
              <ul>
                <li>Games</li>
                <li>Serious Games</li>
                <li>Gamification</li>
                <li>Interactive applications</li>
                <li>Mobile applications</li>
                <li>Art Production</li>
                <li>3D Production</li>
              </ul>
            </div>
            <div class="col-md-3">
              <h4>HOW WE WORK</h4>
              <ul>
                <li>Freelancer</li>
                <li>Co-Production</li>
              </ul>
            </div>
            <h4>
            Subscribe for
            newsletter
          </h4>


          <form action="/subscribers" method="post">
              {{ csrf_field() }}
              <input type="email" name="email" placeholder="Email Address" required>
              <input type="submit" class="btn btn-danger">Subscribe
          </form>

            </div>
             </div>
             </section>


    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Contact us for your project idea or dream.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Your SUBJECT *" id="subject" required data-validation-required-message="Please enter your SUBJECT .">
                                    <p class="help-block text-danger"></p>
</div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
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
