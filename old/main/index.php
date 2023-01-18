<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Muzeul secuiesc - Sfantu Gheorghe</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
    </head>
    <body id="page-top">
        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">
                <?php echo "Hello, " .  htmlspecialchars(empty($_SESSION["email"]) ? "guest" : $_SESSION["email"]); ?>
                <?php
                ?>
                </a>
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">Despre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Informatii Generale</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Galerie</a></li>
                        <li class="nav-item"><a class="nav-link" href="#maps">Locatie</a></li> 
                        <li class="nav-item"><a class="nav-link" href="/categorii/index.php">Exponate</a></li>     
                        <?php 
                            echo empty($_SESSION["email"]) ? "<li class=\"nav-item\"><a class=\"nav-link\" href=\"login.php\">Login</a></li>" : "<li class=\"nav-item\"><a class=\"nav-link\" href=\"logout.php\">Logout</a></li>"; 
                            echo empty($_SESSION["email"]) ? "" : "<li class=\"nav-item\"><a class=\"nav-link\" href=\"/admin/index.php\">Admin Panel</a></li>";
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Masthead-->
        <header class="masthead">
        
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Bine aţi venit pe pagina web a Muzeului Naţional Secuiesc!</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">
                        Muzeul Naţional Secuiesc, care în 2015 aniversează 140 de ani de la înfiinţarea sa, este una dintre colecţiile publice şi instituţiile culturale reprezentative pentru comunitatea maghiară din România.                         
                        </p>
                        <a class="btn btn-primary btn-xl" href="#about">Afla mai multe</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Scurta prezentare</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">
                        Istoria zbuciumată a instituţiei este marcată de mutări succesive ale sediului, schimbări de regimuri, naţionalizare, evacuări cu consecinţe catastrofale, dar şi de o permanentă îmbogăţire a colecţiilor, participări la evenimente culturale, de rezonanţă şi de anvergură internaţională. Site-ul nostru oferă publicului un rezumat al istoriei şi al colecţiilor Muzeului Naţional Secuiesc, cu sediul în clădirea proiectată de Károly Kós, în speranţa că informaţiile cuprinse în paginile lui vor completa experienţa vizitării expoziţiilor şi vor ajuta la conturarea unei corecte şi complete viziuni asupra instituţiei noastre, în toată complexitatea sa. <br><br>
                        Site-ul nostru oferă publicului un rezumat al istoriei şi al colecţiilor Muzeului Naţional Secuiesc, cu sediul în clădirea proiectată de Károly Kós, în speranţa că informaţiile cuprinse în paginile lui vor completa experienţa vizitării expoziţiilor şi vor ajuta la conturarea unei corecte şi complete viziuni asupra instituţiei noastre, în toată complexitatea sa.
                        <br><br>
Prezentarea nu se limitează doar la colecţiile de bază, aflate în sediul central al instituţiei, ci cuprinde şi secţiile externe, deoarece acestea – Galeriile de Artă „Gyárfás Jenő”, Centrul Artistic Transilvănean, Centrul de Artă Contemporană MAGMA, Muzeul „Haszmann Pál” de la Cernat, Muzeul de Istorie a Breslelor „Incze László” din Târgu Secuiesc, Muzeul Etnografic Ceangăiesc de la Zăbala şi Muzeul Depresiunii Baraolt de la Baraolt – contribuie, la rândul lor, la activităţile de salvare şi valorificare a bunurilor de patrimoniu, la un nivel profesional demn de instituţii muzeale de sine stătătoare.

Sper ca bogata noastră ofertă de expoziţii şi programe vor consolida decizia dumneavoastră: Muzeul Naţional Secuiesc trebuie vizitat!

<br><br>
Dintre toate muzeele provinciale din întinsul ţării româneşti, pe lângă cele din Cluj, cel din Sf. Gheorghe este, fără îndoială, cel mai interesant şi cel mai plin de surprize ... clădirea adăposteşte obiecte distante cu mii de ani de frământările vremuurilor de azi. Celor cari ştiu să desprindă limbagiul mut, dar atâta de elocvent al obiectelor făurite de mâna omenească, splendide vase, cu ale lor spirale divers zugrăvite, le vorbesc de vremuri îndepărtate, în care preocuparea de frumos pare să fi învins meschinele patimi ce ne despart azi. ... Colegilor din Secuime trimit aceste urări cu cuget curat ...
(Alexandru Tzigara-Samurcaş, inspector general al Muzeelor, 1929)

                        </p>
                        <!--<a class="btn btn-light btn-xl" href="#services">Get Started!</a>-->
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Informatii generale</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Program vizitare</h3>
                            <p class="text-muted mb-0">L-V: 8:00-22:00</p>
                            <p class="text-muted mb-0">S-D: 8:00-12:00</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Locatie</h3>
                            <p class="text-muted mb-0">Strada Lujerului nr. 69, Sfantu Gheorghe</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Sustinatorul muzeului</h3>
                            <p class="text-muted mb-0">Consiliul Judetean Covasna</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Iubim ungurii</h3>
                            <p class="text-muted mb-0">Da, ai auzit bine, siteul este facut cu dragoste, iubim kurtos kolacs!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Artilerie</div>
                                <div class="project-name">Tun</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Artilerie</div>
                                <div class="project-name">Generale</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Biblioteca</div>
                                <div class="project-name">Manuscrise</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Biblioteca</div>
                                <div class="project-name">Manuscrise</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Arta</div>
                                <div class="project-name">Papusi</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Echitatie</div>
                                <div class="project-name">Calutzu</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <div class="mb-2"><i class="bi-globe fs-1 text-primary" id="maps"></i></div>
                <h3 class="mb-4">Piața Libertății 7, Sfântu Gheorghe, Romania</h3>

                <!--Google map-->
                <div class="container-fluid">
                <div class="map-responsive">
                <iframe src="https://maps.google.com/maps?q=muzeul-national-secuiesc&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                </div>
                <!--Google Maps-->

                <!--<a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>-->
            </div>
        </section>

        <!-- Footer-->
        <footer class="bg-light py-5" id="footer">
                <div class="container px-4 px-lg-5">
                    <div class="small text-center text-muted">
                        <?php       
                        ?>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        

    </body>
</html>
