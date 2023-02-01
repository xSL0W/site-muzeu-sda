<?php
// Initialize the session
session_start();
 
// Include config file
$root = $_SERVER['DOCUMENT_ROOT'];

require_once($root."/funcs.php");

if(!isLoggedIn() || !isAdmin())
{
    header("Location: /");
    die();
}

require_once($root."/config.php");
require_once($root."/language.php");
require_once($root."/querys.php");

initLanguage();

$db = mysqli_start();

$posts_result = $db->query("SELECT id, title, image_path, lang FROM categories");
$posts_result2 = $db->query("SELECT id, title, description, image_path, lang FROM categories");

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/admin.css" />
  <!-- Editor styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.26.0/ui/trumbowyg.min.css" integrity="sha512-Zi7Hb6P4D2nWzFhzFeyk4hzWxBu/dttyPIw/ZqvtIkxpe/oCAYXs7+tjVhIDASEJiU3lwSkAZ9szA3ss3W0Vug==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

  <?php
  while ($entry = mysqli_fetch_assoc($posts_result2)) 
  {
    echo 
    "
    <div class='entryContent' id= 'modalData_{$entry['id']}' style='display:none'>
    <div class='title'>{$entry['title']}</div>
    <div class='description'>{$entry['description']}</div>
    <div class='img_path'>{$entry['image_path']}</div>
    <div class='language'>{$entry['lang']}</div>
    </div>
    ";
  }
  ?>
  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="index.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Admin dashboard</span>
          </a>
          <a href="posts_dash.php" class="list-group-item list-group-item-action py-2 ripple active">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>Post Dashboard </span>
          </a>
        </div>
      </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="25" alt="" loading="lazy" />
        </a>
        <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto">
          <input autocomplete="off" type="search" class="form-control rounded"
            placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px" />
          <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
        </form>

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <!-- Notification dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
              role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-bell"></i>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Some news</a></li>
              <li><a class="dropdown-item" href="#">Another news</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else</a>
              </li>
            </ul>
          </li>

          <!-- Icon -->
          <li class="nav-item">
            <a class="nav-link me-3 me-lg-0" href="#">
              <i class="fas fa-fill-drip"></i>
            </a>
          </li>
          <!-- Icon -->
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#">
              <i class="fab fa-github"></i>
            </a>
          </li>

          <!-- Icon dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown" role="button"
              data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="united kingdom flag m-0"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English
                  <i class="fa fa-check text-success ms-2"></i></a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="poland flag"></i>Polski</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="china flag"></i>中文</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="japan flag"></i>日本語</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="germany flag"></i>Deutsch</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="france flag"></i>Français</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="spain flag"></i>Español</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="russia flag"></i>Русский</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="portugal flag"></i>Português</a>
              </li>
            </ul>
          </li>

          <!-- Avatar -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
              id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22"
                alt="" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">My profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">


      <!--Section: Sales Performance KPIs-->
      <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Post manager</strong>
            </h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
            
            <button type='button' id= 'all-lang' class='btn btn-success'>All Languages</button>
            <button type='button' id= 'ro-lang' class='btn btn-danger'>RO</button>
            <button type='button' id= 'en-lang' class='btn btn-warning'>EN</button>
            <button type='button' id= 'hu-lang' class='btn btn-info'>HU</button>

            <!-- Table section -->
            <table class="table table-hover text-nowrap ">
              <thead>
                <tr>
                  <th scope="col" class="text-center">ID</th>
                  <th scope="col" class="text-center">Title</th>
                  <th scope="col" class="text-center">Image_path</th>
                  <th scope="col" class="text-center">Lang</th>
                  <th scope="col" class="text-center">Edit post</th>
                  <th scope="col" class="text-center">Delete post</th>
                </tr>
              </thead>
              <tbody>
              <?php
                while($row = mysqli_fetch_assoc($posts_result)) { 
                  echo "
                    <tr id= '{$row["lang"]}'>
                        <th scope='row' class='text-center'>{$row["id"]}</td>
                        <td class='text-center'>{$row["title"]}</td>
                        <td class='text-center'>{$row["image_path"]}</td>
                        <td class='text-center'>{$row["lang"]}</td>
                        
                        <td class='text-center'>
                            <button type='button' class='btn btn-success edit-btn' data-mdb-toggle='modal' data-mdb-target='#editPostModal'>Edit</button>
                        </td>

                        <td class= 'text-center'>
                            <button class='btn btn-danger delete-btn'>Delete</button>
                        </td>
                    </tr>
                    ";
                }
                  ?>
              </tbody>
            </table>
              <button type='button' class='btn btn-primary' data-mdb-toggle='modal' data-mdb-target='#addPostsModal'>Add post</button>

              <!-- Edit Post Modal -->
              
              <div class="modal fade" id="editPostModal" aria-labelledby="editPostModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editPostModalLabel">Edit post</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <label for='postImage' class='fw-bold'>Image</label>
                    <img style="height:40vh" class='img-thumbnail rounded mx-auto d-block img-fluid' id='postImage' src=''>
                    <input type='file' class='form-control-file custom-file-input' name='file' accept='image/*' onchange='previewImage(event)'>
                      <input id= 'postId' type= 'hidden' value= ''></input>
                    <div class='form-group p-2'>
                      <label for='title' class='fw-bold'>Title</label>
                      <input id= 'postTitle'type='text' class='form-control' name='title' value="" required>
                    </div>
                    
                    <div class='form-group p-2'>
                    <label for='text' class='fw-bold'>Text</label>
                      <textarea id= 'editor' name='text'></textarea>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success btn-saveData">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

              <!-- Add Post Modal -->

                <div class="modal fade" id="addPostsModal" aria-labelledby="addPostsModaLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-fullscreen" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addPostsModaLabel">Add Post</h5>
                      <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    <label for='addPostImage' class='fw-bold'>Image</label>
                    <img class='img-thumbnail rounded mx-auto d-block img-fluid' id='addPostImage' src=''>
                    <input id='addImageInput' type='file' class='form-control-file custom-file-input' name='file' accept='image/*' onchange='previewAddImage(event)'>
                      <input id= 'addPostId' type= 'hidden' value= ''></input>
                    
                      <div class='form-group p-2'>
                      <label for='title' class='fw-bold'>Title</label>
                      <input id= 'addPostTitle'type='text' class='form-control' name='title' value="" required>
                    </div>

                    <div class='form-group p-2'>
                    <label for='text' class='fw-bold'>Text</label>
                      <textarea id= 'editor2' name='text'></textarea>
                    </div>

                    <div class='form-group p-2'>
                      <label for='category' class='fw-bold'>Category</label>
                      <input id= 'addCategory'type='text' class='form-control' name='category' value="" required>
                    </div>

                    <div class='form-group p-2'>
                      <label for='addLanguage' class='fw-bold'>Language</label>
                        <select class="form-control" id="addLanguage" name="addLanguage" required>
                              <option>ro</option>
                              <option>en</option>
                              <option>hu</option>
                        </select>
                    </div>

                    </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success submit-btn" value="Submit">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              
              <!-- <div class="modal fade" id="addPostsModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-fullscreen" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
                      <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="misc_scripts/process.php" method="post">
                      <div class="modal-body">
                        
                        <div class="form-group p-2">
                          <label for="text" class="fw-bold">Title</label>
                          <input type="text" class="form-control" name="title" placeholder="Enter title" required>
                        </div>

                        <div class="form-group p-2">
                          <label for="email" class="fw-bold">Main Image</label>
                          <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                        </div>

                        <div class="form-group p-2">
                          <label for="category" class="fw-bold">Category</label>
                          <input type="category" class="form-control" name="category" placeholder="Enter category" required>
                        </div>

                        <div class="form-group p-2">
                          <label for="language" class="fw-bold">Language</label>
                          <select class="form-control" id="language" name="language" required>
                            <option>Editor</option>
                            <option>Admin</option>
                          </select>
                        </div>

                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" value="Submit">
                      </div>
                    </form>
                  </div>
                </div>
              </div> -->

              
            </div>
          </div>
        </div>
        
        
      </section>

  <!-- Jquery -->



  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="js/admin.js"></script>
  <!-- Language buttons -->
  <script type="text/javascript" src="sorting_btns_f.js"></script>
  <!-- Edit posts -->
  <script type="text/javascript" src="edit_posts.js"></script>
  <!-- Add posts -->
  <script type="text/javascript" src="add_posts.js"></script>
  <!-- Preview image -->
  <script type="text/javascript" src="imgPreview.js"></script>
  <!-- Axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
  <!-- JQUERY -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>

  <!-- New editor -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.26.0/trumbowyg.min.js" integrity="sha512-ZfWLe+ZoWpbVvORQllwYHfi9jNHUMvXR4QhjL1I6IRPXkab2Rquag6R0Sc1SWUYTj20yPEVqmvCVkxLsDC3CRQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>

</html>