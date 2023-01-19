<?php
// Initialize the session
session_start();
 
// Include config file
$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/config.php");
require_once($root."/info.data.php");
require_once($root."/language.php");

initLanguage();

//echo getLanguage();

?>



<!--
$$\   $$\ $$$$$$$$\  $$$$$$\  $$$$$$$\  
$$ |  $$ |$$  _____|$$  __$$\ $$  __$$\ 
$$ |  $$ |$$ |      $$ /  $$ |$$ |  $$ |
$$$$$$$$ |$$$$$\    $$$$$$$$ |$$ |  $$ |
$$  __$$ |$$  __|   $$  __$$ |$$ |  $$ |
$$ |  $$ |$$ |      $$ |  $$ |$$ |  $$ |
$$ |  $$ |$$$$$$$$\ $$ |  $$ |$$$$$$$  |
\__|  \__|\________|\__|  \__|\_______/ 
                                        
 -->


<html lang="<?php echo getLanguage();?>">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Muzeul Puskas Tivadar</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/style.css" />

  </head>
  <body>


<!--
$$\   $$\                     $$$$$$$\                      
$$$\  $$ |                    $$  __$$\                     
$$$$\ $$ | $$$$$$\ $$\    $$\ $$ |  $$ | $$$$$$\   $$$$$$\  
$$ $$\$$ | \____$$\\$$\  $$  |$$$$$$$\ | \____$$\ $$  __$$\ 
$$ \$$$$ | $$$$$$$ |\$$\$$  / $$  __$$\  $$$$$$$ |$$ |  \__|
$$ |\$$$ |$$  __$$ | \$$$  /  $$ |  $$ |$$  __$$ |$$ |      
$$ | \$$ |\$$$$$$$ |  \$  /   $$$$$$$  |\$$$$$$$ |$$ |      
\__|  \__| \_______|   \_/    \_______/  \_______|\__|      
                                                            
                                                            
                                                              
-->


<!-- Navbar -->
<nav style="z-index: 1; min-height: 58.59px;" class="navbar navbar-expand-lg navbar-light bg-white">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0 " href="/main">
        <img src="../logo-sm.png" height="50"/>
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link" href="/main"><i class="fa-sharp fa-solid fa-house me-1"></i>Acasa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/categorii"><i class="fa-solid fa-list me-1"></i>Exponate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/despre-noi"><i class="fa-solid fa-address-card me-1"></i>Despre noi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#maps"><i class="fa-solid fa-location-dot me-1"></i>Locatie</a>
        </li>        
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->


        <!-- Lang -->
        <div class="dropdown">
        <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
           data-mdb-toggle="dropdown" aria-expanded="false">
           <i class="fa-solid fa-language"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">

        <li>
          <a class="dropdown-item" href="" onclick="sendLanguage('ro')">Romana</a>
        </li>

        <li>
          <a class="dropdown-item" href="" onclick="sendLanguage('en')">English</a>
        </li>

        <li>
          <a class="dropdown-item" href="" onclick="sendLanguage('hu')">Maghyar</a>
        </li>

        </ul>
      </div>

      <!-- Notifications -->
      <div class="dropdown">
        <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
           data-mdb-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-bell"></i>
          <!--<span class="badge rounded-pill badge-notification bg-danger">1</span>-->
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="#">Some news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </div>
      <!-- Avatar -->
      <div class="dropdown">
        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar"
           role="button" data-mdb-toggle="dropdown" aria-expanded="false">
          <img src="<?php echo getAvatar();?>" class="rounded-circle" height="25"
               alt="Black and White Portrait of a Man" loading="lazy" />
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
          <?php 
          if(isLoggedIn())
          { ?>
          <li>
            <a class="dropdown-item" href="/admin">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="/admin">Admin</a>
          </li>
          <li>
            <a class="dropdown-item" href="/logout.php">Logout</a>
          </li>
          
          <?php
          }
          else 
          { ?>


          <li>
            <a class="dropdown-item" href="/login.php">Login</a>
          </li>


          <?php } ?>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->








<!--
$$\   $$\                               
$$ |  $$ |                              
$$ |  $$ | $$$$$$\   $$$$$$\   $$$$$$\  
$$$$$$$$ |$$  __$$\ $$  __$$\ $$  __$$\ 
$$  __$$ |$$$$$$$$ |$$ |  \__|$$ /  $$ |
$$ |  $$ |$$   ____|$$ |      $$ |  $$ |
$$ |  $$ |\$$$$$$$\ $$ |      \$$$$$$  |
\__|  \__| \_______|\__|       \______/ 
                                        
                                        
                                        
 -->



<!-- Background image -->
<div  class="bg-image" style="height: 65vh !important; margin-top: -58.59px; background-image: url('https://wallpaperaccess.com/full/2339295.jpg'); z-index:-1; ">


  <!-- Mask -->
  <div
    class="mask main-gradient"">

    <!-- Container -->
    <div class="container d-flex justify-content-center align-items-center h-100">

      <!-- Call to action -->
      <div class="text-white text-center">
        <h1 class="mb-3">Bine aţi venit pe pagina web a muzeului Puskas-Tivadar!</h1>
        <h5 class="mb-4">Muzeul Naţional Secuiesc, care în 2015 aniversează 140 de ani de la înfiinţarea sa, este una dintre colecţiile publice şi instituţiile culturale reprezentative pentru comunitatea maghiară din România.</h5>
      </div>

    </div>

  </div>


  
<!--
   $$$$$\                         $$\                  $$\                                   
   \__$$ |                        $$ |                 $$ |                                  
      $$ |$$\   $$\ $$$$$$\$$$$\  $$$$$$$\   $$$$$$\ $$$$$$\    $$$$$$\   $$$$$$\  $$$$$$$\  
      $$ |$$ |  $$ |$$  _$$  _$$\ $$  __$$\ $$  __$$\\_$$  _|  $$  __$$\ $$  __$$\ $$  __$$\ 
$$\   $$ |$$ |  $$ |$$ / $$ / $$ |$$ |  $$ |$$ /  $$ | $$ |    $$ |  \__|$$ /  $$ |$$ |  $$ |
$$ |  $$ |$$ |  $$ |$$ | $$ | $$ |$$ |  $$ |$$ |  $$ | $$ |$$\ $$ |      $$ |  $$ |$$ |  $$ |
\$$$$$$  |\$$$$$$  |$$ | $$ | $$ |$$$$$$$  |\$$$$$$  | \$$$$  |$$ |      \$$$$$$  |$$ |  $$ |
 \______/  \______/ \__| \__| \__|\_______/  \______/   \____/ \__|       \______/ \__|  \__|
                                                                                             
                                                                                             
                                                                                             
 -->

</div>
<!-- Jumbotron -->
<div class="p-5 text-center bg-light mb-10">
  <h1 class="mb-3">Esti curios?</h1>
  <h4 class="mb-4">... vezi mai jos!</h4>
</div>



<div class="container mb-10">
<section class="text-center">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-5 mb-md-5 mb-lg-0 position-relative">
      <i class="fas fa-cubes fa-3x text-primary mb-4"></i>
      <h5 class="text-primary fw-bold mb-3">5000+</h5>
      <h6 class="fw-normal mb-0">Components</h6>
      <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
    </div>

    <div class="col-lg-3 col-md-6 mb-5 mb-md-5 mb-lg-0 position-relative">
      <i class="fas fa-layer-group fa-3x text-primary mb-4"></i>
      <h5 class="text-primary fw-bold mb-3">490+</h5>
      <h6 class="fw-normal mb-0">Design blocks</h6>
      <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
    </div>

    <div class="col-lg-3 col-md-6 mb-5 mb-md-0 position-relative">
      <i class="fas fa-image fa-3x text-primary mb-4"></i>
      <h5 class="text-primary fw-bold mb-3">100+</h5>
      <h6 class="fw-normal mb-0">Templates</h6>
      <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
    </div>

    <div class="col-lg-3 col-md-6 mb-5 mb-md-0 position-relative">
      <i class="fas fa-plug fa-3x text-primary mb-4"></i>
      <h5 class="text-primary fw-bold mb-3">28</h5>
      <h6 class="fw-normal mb-0">Plugins</h6>
    </div>
  </div>
</section>
</div>





<!--
$$\      $$\                               
$$$\    $$$ |                              
$$$$\  $$$$ | $$$$$$\   $$$$$$\   $$$$$$$\ 
$$\$$\$$ $$ | \____$$\ $$  __$$\ $$  _____|
$$ \$$$  $$ | $$$$$$$ |$$ /  $$ |\$$$$$$\  
$$ |\$  /$$ |$$  __$$ |$$ |  $$ | \____$$\ 
$$ | \_/ $$ |\$$$$$$$ |$$$$$$$  |$$$$$$$  |
\__|     \__| \_______|$$  ____/ \_______/ 
                       $$ |                
                       $$ |                
                       \__|                
-->

<hr class="hr rounded-circle main-gradient divider-sm mb-10"></hr>

<div class="container text-center mb-10" id="maps">
<section class="page-section  text-white">
            <div class="container text-center">
            <i class="text-primary fa-2x fa-sharp fa-solid fa-location-dot"></i>
                <h3 class="mb-4 text-primary fw-bold">Piața Libertății 7, Sfântu Gheorghe, Romania</h3>

                <!--Google map-->
                <div class="container-fluid">
                <div class="map-responsive border border-2 border-primary" >
                <iframe src="https://maps.google.com/maps?q=muzeul-national-secuiesc&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                </div>
                <!--Google Maps-->

                <!--<a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>-->
            </div>
        </section>
</div>

<hr class="hr rounded-circle main-gradient divider-sm mb-6"></hr>



<!--
 $$$$$$\                       $$\                          $$\                             
$$  __$$\                      $$ |                         $$ |                            
$$ /  \__| $$$$$$\  $$$$$$$\ $$$$$$\    $$$$$$\  $$$$$$$\ $$$$$$\                           
$$ |      $$  __$$\ $$  __$$\\_$$  _|  $$  __$$\ $$  __$$\\_$$  _|                          
$$ |      $$ /  $$ |$$ |  $$ | $$ |    $$$$$$$$ |$$ |  $$ | $$ |                            
$$ |  $$\ $$ |  $$ |$$ |  $$ | $$ |$$\ $$   ____|$$ |  $$ | $$ |$$\                         
\$$$$$$  |\$$$$$$  |$$ |  $$ | \$$$$  |\$$$$$$$\ $$ |  $$ | \$$$$  |                        
 \______/  \______/ \__|  \__|  \____/  \_______|\__|  \__|  \____/                         
                                                                                            
                                                                                            
                                                                                                                                                                                                                            
 -->


<!--Main layout-->
<main>
  <div class="container mx-auto d-flex">

    <!-- Section: Details -->
    <section class="mb-10">

      <div class="row">


      <div class="container text-center">
            <i class="text-primary fa-2x fa-sharp fa-solid fa-image"></i>
                <h3 class="mb-4 text-primary fw-bold">Mini-Galerie</h3>
      </div>

          <!-- Carousel wrapper -->
          <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
              <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
                      aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
                      aria-label="Slide 2"></button>
              <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
                      aria-label="Slide 3"></button>
            </div>

            <!-- Inner -->
            <div class="rounded-6 carousel-inner">
              <!-- Single item -->
              <div class="carousel-item active">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp" class="d-block w-100"
                     alt="Sunset Over the City" />
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>

              <!-- Single item -->
              <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100"
                     alt="Canyon at Nigh" />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>

              <!-- Single item -->
              <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100"
                     alt="Cliff Above a Stormy Sea" />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <!-- Inner -->

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
                    data-mdb-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
                    data-mdb-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- Carousel wrapper -->

        </div>

        <div class="col-lg-5">

        </div>

      </div>

    </section>
    <!-- Section: Details -->

  </div>
</main>
<!--Main layout-->






<hr class="hr rounded-circle main-gradient divider-sm mb-6"></hr>


<div class="container text-center mb-10">
  <div class="row">

    <!-- First column -->
    <div class="col-md">

      <!-- Card -->
      <div class="card mb-5">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#!" class="btn btn-primary">Button</a>
        </div>
      </div>
      <!-- Card -->

    </div>
    <!-- First column -->

    <!-- Second column -->
    <div class="col-md">

      <!-- Card -->
      <div class="card mb-5">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/112.webp" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#!" class="btn btn-primary">Button</a>
        </div>
      </div>
      <!-- Card -->

    </div>
    <!-- Second column -->

    <!-- Third column -->
    <div class="col-md">

      <!-- Card -->
      <div class="card mb-5">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/113.webp" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#!" class="btn btn-primary">Button</a>
        </div>
      </div>
      <!-- Card -->

    </div>
    <!-- Third column -->
  </div>


  <div class="row">

    <!-- First column -->
    <div class="col-md">

      <!-- Card -->
      <div class="card mb-5">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#!" class="btn btn-primary">Button</a>
        </div>
      </div>
      <!-- Card -->

    </div>
    <!-- First column -->

    <!-- Second column -->
    <div class="col-md">

      <!-- Card -->
      <div class="card mb-5">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/112.webp" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#!" class="btn btn-primary">Button</a>
        </div>
      </div>
      <!-- Card -->

    </div>
    <!-- Second column -->

    <!-- Third column -->
    <div class="col-md">

      <!-- Card -->
      <div class="card mb-5">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/113.webp" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#!" class="btn btn-primary">Button</a>
        </div>
      </div>
      <!-- Card -->

    </div>
    <!-- Third column -->
  </div>  
  
</div>






<!--
$$$$$$$$\                   $$\                         
$$  _____|                  $$ |                        
$$ |    $$$$$$\   $$$$$$\ $$$$$$\    $$$$$$\   $$$$$$\  
$$$$$\ $$  __$$\ $$  __$$\\_$$  _|  $$  __$$\ $$  __$$\ 
$$  __|$$ /  $$ |$$ /  $$ | $$ |    $$$$$$$$ |$$ |  \__|
$$ |   $$ |  $$ |$$ |  $$ | $$ |$$\ $$   ____|$$ |      
$$ |   \$$$$$$  |\$$$$$$  | \$$$$  |\$$$$$$$\ $$ |      
\__|    \______/  \______/   \____/  \_______|\__|      
                                                        
                                                        
                                                        
 -->






<!-- Footer -->
<footer class="bg-primary text-center text-lg-start text-muted">

  <div class="container">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 pb-1">
      <!-- Left -->
      <div class="text-white me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>

      
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="text-white fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="text-white fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="text-white fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="text-white fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="text-white fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="text-white fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

  </div>

  <hr class="hr">

  <div class="container">
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-white  text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p class="text-white">
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-white text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-white">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-white">React</a>
            </p>
            <p>
              <a href="#!" class="text-white">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-white">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-white text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-white">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-white">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-white">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-white">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-white text-uppercase fw-bold mb-4">Contact</h6>
            <p class="text-white"><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p class="text-white">
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p class="text-white"><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p class="text-white"><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  </div>



  <!-- Copyright -->
  <div class="text-white text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-white fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->















    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/scripts.js"></script>
  </body>
</html>


<!-- Footer -->