<?php
// Initialize the session
session_start();
 
// Include config file
$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/config.php");
require_once($root."/funcs.php");
require_once($root."/querys.php");
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
    <title><?php echo getTranslatedText('SITE_TITLE');?></title>
    <!-- MDB icon -->
    <link rel="icon" href="../assets/img/mdb-favicon.ico" type="image/x-icon" />
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
    <link rel="stylesheet" href="../assets/css/mdb.min.css" />
    <link rel="stylesheet" href="css/style.css" />

  </head>
  <body class="bg-darkgray">


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
<nav style="z-index: 2; min-height: 58.59px;" class="navbar-bg navbar navbar-expand-lg">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="white-text navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0 " href="/main">
        <!--<img src="../logo-sm.png" class="" height="50"/>-->
        <a class="white-text me-4"><?php echo getTranslatedText('SITE_TITLE');?></a>
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link white-text" href="/main"><i class="white-text fa-sharp fa-solid fa-house me-1"></i><?php echo getTranslatedText('BTN_HOME');?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link white-text" href="/categorii"><i class="white-text fa-solid fa-list me-1"></i><?php echo getTranslatedText('BTN_EXHIBITS');?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link white-text" href="/despre-noi"><i class="white-text fa-solid fa-address-card me-1"></i><?php echo getTranslatedText('BTN_ABOUT_US');?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link white-text" href="#maps"><i class="white-text fa-solid fa-location-dot me-1"></i><?php echo getTranslatedText('BTN_LOCATION');?></a>
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
        <a class="text-reset me-3 dropdown-toggle hidden-arrow white-text" href="#" id="navbarDropdownMenuLink" role="button"
           data-mdb-toggle="dropdown" aria-expanded="false">
           <i class="white-text fa-solid fa-language"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">

        <li>
          
          <a class="dropdown-item" href="" onclick="sendLanguage('ro')"><i class="flag flag-ro"></i>Romana</a>
        </li>

        <li>
          <a class="dropdown-item" href="" onclick="sendLanguage('en')"><i class="flag flag-us"></i>English</a>
        </li>

        <li>
          <a class="dropdown-item" href="" onclick="sendLanguage('hu')"><i class="flag flag-hu"></i>Maghyar</a>
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


<!--Main Navigation-->
<header>
    <!-- Carousel wrapper -->
    <div id="introCarousel" class="mb-8 carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">

      <!-- Inner -->
      <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item hero-size active">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.75);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h1 class="mb-3"><?php echo getTranslatedText('WELCOME_HERO_TITLE')?></h1>
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item hero-size">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.75);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h1 class="mb-3"><?php echo getTranslatedText('WELCOME_HERO_TITLE')?></h1>
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item hero-size">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.75);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h1 class="mb-3"><?php echo getTranslatedText('WELCOME_HERO_TITLE')?></h1>
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item hero-size">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.75);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h1 class="mb-3"><?php echo getTranslatedText('WELCOME_HERO_TITLE')?></h1>
              </div>
            </div>
          </div>
        </div>


      </div>
      <!-- Inner -->
    </div>
    <!-- Carousel wrapper -->
  </header>
  <!--Main Navigation-->



<!--
          $$\                                                         $$\                                             $$\                     
          $$ |                                                        $$ |                                            \__|                    
 $$$$$$$\ $$$$$$$\   $$$$$$\  $$\  $$\  $$\        $$$$$$$\ $$$$$$\ $$$$$$\    $$$$$$\   $$$$$$\   $$$$$$\   $$$$$$\  $$\  $$$$$$\   $$$$$$$\ 
$$  _____|$$  __$$\ $$  __$$\ $$ | $$ | $$ |      $$  _____|\____$$\\_$$  _|  $$  __$$\ $$  __$$\ $$  __$$\ $$  __$$\ $$ |$$  __$$\ $$  _____|
\$$$$$$\  $$ |  $$ |$$ /  $$ |$$ | $$ | $$ |      $$ /      $$$$$$$ | $$ |    $$$$$$$$ |$$ /  $$ |$$ /  $$ |$$ |  \__|$$ |$$$$$$$$ |\$$$$$$\  
 \____$$\ $$ |  $$ |$$ |  $$ |$$ | $$ | $$ |      $$ |     $$  __$$ | $$ |$$\ $$   ____|$$ |  $$ |$$ |  $$ |$$ |      $$ |$$   ____| \____$$\ 
$$$$$$$  |$$ |  $$ |\$$$$$$  |\$$$$$\$$$$  |      \$$$$$$$\\$$$$$$$ | \$$$$  |\$$$$$$$\ \$$$$$$$ |\$$$$$$  |$$ |      $$ |\$$$$$$$\ $$$$$$$  |
\_______/ \__|  \__| \______/  \_____\____/        \_______|\_______|  \____/  \_______| \____$$ | \______/ \__|      \__| \_______|\_______/ 
                                                                                        $$\   $$ |                                            
                                                                                        \$$$$$$  |                                            
                                                                                         \______/                                             
-->


<div class="container text-center mb-4">
  <h2 class="mb-1 white-text fw-bold">Cateva din exponatele noastre...</h2>
  <h4 class="mb-6 primary-text fw-bold">Te asteptam in locatie pentru a le vedea pe toate!</h3>
  <?php
  $lang = getLanguage();
  $db = mysqli_start();
  $result = categoryQuery($db, $lang);
  $count = 0;

  while ($categories = mysqli_fetch_assoc($result)) 
  { 
    if($count == 0 || $count % 3 == 0) {  ?> 
      <div class="row"> 
    <?php 
    } // open row div at start/every 3 items?> 
      <div class="col-md-4 mb-4 d-flex align-items-stretch">

        <!-- Card -->
        <div class="card mb-6" >
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="<?php echo $categories['image_path']?>" class="img-fluid"/>
            <a href="<?php echo "/posts/index.php?name=".$categories['name']?>"> <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div></a>
          </div>
          <div class="card-body">
            <a href="<?php echo "/posts/index.php?name=".$categories['name']?>"><h5 class="card-title fw-underline"><?php echo $categories['name']?></h5></a>
            <hr class="hr hr-blurry mb-3" />
            <p class="card-text text-muted"><?php echo $categories['text'] ?></p>
            <!--<a href="#!" class="btn btn-info btn-rounded">Button</a>-->
          </div>
        </div>
        <!-- Card -->
      </div>
      <?php 
      $count++; 

    if($count % 3 == 0) {?> 
      </div> <?php 
    } // close the row div every 3 items
  } // closing while loop

  if($count % 3 != 0) {?> 
  </div> 
  <?php } // make sure you close the div 

  mysqli_stop($db); // pls dont forget this again?> 

  </div>
</div>


<hr class="hr hr-blurry mb-6" />


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
<footer class="footer-bg text-center text-lg-start text-muted">

  <div class="container">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 pb-1">
      <!-- Left -->
      <div class="text-white me-5 d-none d-lg-block">
        <span><?php echo getTranslatedText('FOOTER_FOLLOW_US');?></span>
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
            <h6 class="text-white text-uppercase fw-bold mb-4">
              <i class="fas fa-heart me-3"></i><?php echo getTranslatedText('SITE_TITLE');?>
            </h6>
            <p class="text-white">
              <?php echo getTranslatedText('FOOTER_DESCRIPTION');?>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-white text-uppercase fw-bold mb-4">
              Links 1
            </h6>
            <p>
              <a href="#!" class="text-white">Link 1</a>
            </p>
            <p>
              <a href="#!" class="text-white">Link 2</a>
            </p>
            <p>
              <a href="#!" class="text-white">Link 3</a>
            </p>
            <p>
              <a href="#!" class="text-white">Link 4</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-white text-uppercase fw-bold mb-4">
              Links 2
            </h6>
            <p>
              <a href="#!" class="text-white">Link 5</a>
            </p>
            <p>
              <a href="#!" class="text-white">Link 6</a>
            </p>
            <p>
              <a href="#!" class="text-white">Link 7</a>
            </p>
            <p>
              <a href="#!" class="text-white">Link 8</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-white text-uppercase fw-bold mb-4">Contact</h6>
            <p class="text-white"><i class="fas fa-home me-3"></i> Str. Pescarilor, Sf. Gheorghe, Covasna</p>
            <p class="text-white">
              <i class="fas fa-envelope me-3"></i>
              contact@puskastivadar.ro
            </p>
            <p class="text-white"><i class="fas fa-phone me-3"></i> +40752516254</p>
            <p class="text-white"><i class="fas fa-print me-3"></i> +40727612542</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  </div>

  <hr class="hr">

  <!-- Copyright -->
  <div class="text-white text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright - 
    <a class="text-white fw-bold" href=""><?php echo getTranslatedText('SITE_TITLE');?></a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

    <!-- MDB -->
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/scripts.js"></script>
  </body>
</html>


<!-- Footer -->