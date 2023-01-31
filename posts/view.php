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
           $$\                                                               $$\                       
           \__|                                                              $$ |                      
$$\    $$\ $$\  $$$$$$\  $$\  $$\  $$\        $$$$$$\   $$$$$$\   $$$$$$$\ $$$$$$\                     
\$$\  $$  |$$ |$$  __$$\ $$ | $$ | $$ |      $$  __$$\ $$  __$$\ $$  _____|\_$$  _|                    
 \$$\$$  / $$ |$$$$$$$$ |$$ | $$ | $$ |      $$ /  $$ |$$ /  $$ |\$$$$$$\    $$ |                      
  \$$$  /  $$ |$$   ____|$$ | $$ | $$ |      $$ |  $$ |$$ |  $$ | \____$$\   $$ |$$\                   
   \$  /   $$ |\$$$$$$$\ \$$$$$\$$$$  |      $$$$$$$  |\$$$$$$  |$$$$$$$  |  \$$$$  |                  
    \_/    \__| \_______| \_____\____/       $$  ____/  \______/ \_______/    \____/                   
                                             $$ |                                                      
                                             $$ |                                                      
                                             \__|                                                                                         
-->


  <?php
  $lang = getLanguage();
  $db = mysqli_start();

  
  require_once($root."/assets/lib/htmlpurifier/library/HTMLPurifier.auto.php");

  // HTML Purifer (sanitizer)
  $config = HTMLPurifier_Config::createDefault();
  $purifier = new HTMLPurifier($config);


  if(isset($_GET['category']))
  {
    $categoryUrl = $_GET['category'];
    $categoryUrl = $purifier->purify($categoryUrl);
  }

  if(isset($_GET['post']))
  {
    $postUrl= $_GET['post'];
    $postUrl = $purifier->purify($postUrl);
  }



  if(!empty($categoryUrl) && !empty($postUrl) && (GET_CATEGORY_ID_BY_URL($db, $categoryUrl, $lang) > 0) && (GET_POST_ID_BY_URL($db, $postUrl, $lang) > 0))
  {
  
    $query = QUERY_GET_POST($db, $lang, $postUrl);
    $post = mysqli_fetch_assoc($query); ?>

<div class="container mb-6">
    <a href="/posts?category=<?php echo $categoryUrl;?>" class="btn btn-info btn-md">Go Back</a>
</div>

    <!--Main layout-->
    <main class="mt-4 mb-5">
       <div class="container">
         <!--Grid row-->
         <div class="row">
           <!--Grid column-->
           <div class=" mb-4">
           <h2 class="mb-6 white-text fw-bold text-decoration-underline"><?php echo $post['title'];?></h2>
             <!--Section: Post data-mdb-->
             <section class="border-bottom mb-4">
               <img src="<?php echo $post['image_path'];?>" class="img-fluid shadow-2-strong rounded-5 mb-4" alt="" />
   
               <div class="row align-items-center mb-4">
                 <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0"></div>
   
                 <div class="col-lg-6 text-center text-lg-end">
                   <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #3b5998;">
                     <i class="fab fa-facebook-f"></i>
                   </button>
                   <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #55acee;">
                     <i class="fab fa-twitter"></i>
                   </button>
                   <button type="button" class="btn btn-primary px-3 me-1" style="background-color: green;">
                     <i class="fab fa-whatsapp"></i>
                   </button>
                   <button type="button" class="btn btn-primary px-3 me-1" style="background-color: purple;">
                     <i class="fab fa-instagram"></i>
                   </button>
                 </div>
               </div>
             </section>
             <!--Section: Post data-mdb-->
                <?php echo $post['content']; ?>
             <!--Section: Text-->
           </div>
         </div>
       </div>
    </main>
<?php
 
    mysqli_stop($db); // pls dont forget this again?> 

<?php
} else echo "<h1 class='text-center text-danger fw-bold'>ERROR: Category/post is invalid.</h1>"; ?>

<div class="container mb-6">
    <a href="/posts?category=<?php echo $categoryUrl;?>" class="btn btn-info btn-md">Go Back</a>
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