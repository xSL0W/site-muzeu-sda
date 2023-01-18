<?php
// Initialize the session
session_start();
 
$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/config.php");
require_once($root."/language.php");

initLanguage();


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Informatii Muzeu</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="">Muzeul Puskas Tidar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
       
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/">Home</a></li>
                        <!--<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li> !-->
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Sample Post</a></li>

                        <form action="index.php" method="POST">
                        <input type="hidden" name="lang" value="ro">
                        <button href="" type="submit">ro</button>
                        </form>

                        <form action="index.php" method="POST">
                        <input type="hidden" name="lang" value="en">
                        <button href="" type="submit">en</button>
                        </form>

                        <form action="index.php" method="POST">
                        <input type="hidden" name="lang" value="hu">
                        <button href="" type="submit">hu</button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Informatii</h1>
                            <span class="subheading">Un exemplu de pagina...</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content-->
        <div class="container d-flex justify-content-center align-items-center text-center">
            <div class="row">

                <?php 

                $lang = $_SESSION["lang"];
                global $db;

                if(!isset($_GET["category"]))
                {
                    $postQuery = $db->query("SELECT * FROM `posts` WHERE `lang` = '$lang';");
                }
                else
                {
                    $category = mysqli_real_escape_string($db, $_GET["category"]);

                    $categoryIdQuery = $db->query("SELECT `id` FROM `categories` WHERE `name` = '$category';");
                    $resultCategoryId = mysqli_fetch_assoc($categoryIdQuery);
                    $categoryId = $resultCategoryId['id'];

                    $postQuery = $db->query("SELECT * FROM `posts` WHERE `lang` = '$lang' AND `category` = '$categoryId';");
                }

                while($postsData = mysqli_fetch_assoc($postQuery))
                {
                    $uid = trim($postsData['posted_by']);
                    $postAuthorQuery = $db->query("SELECT * FROM `users` WHERE `id` = $uid;");
                    $usersData = mysqli_fetch_assoc($postAuthorQuery); ?>
                    
                    <div class="col-md-4 text-truncate">
                        <a href="posts.php?post=<?php echo $postsData['title']?>"> 
                            <p> <?php echo $postsData['title'] ?> </p>
                            <img src="<?php echo $postsData['thumbnail_path'] ?>" class="img-fluid" alt="image1"> 
                            <hr class="my-4"/>
                        </a>
                    </div>
                <?php 
                } ?>
            </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2022</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
