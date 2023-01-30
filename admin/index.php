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
require_once("misc_scripts/display_admins.php");


initLanguage();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Admin Panel</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/admin.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
    crossorigin="anonymous"></script>
</head>

<body>
  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="#" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Admin dashboard</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple">
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
        <a class="navbar-brand" href="#"> Muzeul Puskas Tivadar
          <!--<img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="25" alt="" loading="lazy" />-->
        </a>

      <!-- Avatar -->
      <div class="dropdown">
        <a class="dropdown-toggle d-flex align-items-center hidden-arrow white-text" href="#" id="navbarDropdownMenuAvatar"
           role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <?php if(isset($_SESSION['name'])) echo "".$_SESSION['name'];?>
           <img src="<?php echo getAvatar();?>" class="rounded-circle me-2" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
          <?php 
          if(isLoggedIn())
          { ?>
          <li>
            <a class="dropdown-item" href="/admin">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="/main">Home</a>
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
              <strong>Admin manager</strong>
            </h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
            
            <!-- Table section -->
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th scope="col" class="text-center">ID</th>
                  <th scope="col" class="text-center">Name</th>
                  <th scope="col" class="text-center">Email</th>
                  <th scope="col" class="text-center">Role</th>
                  <th scope="col" class="text-center">Edit user</th>
                  <th scope="col" class="text-center">Remove user</th>
                </tr>
              </thead>
              <tbody>
              <?php
                while($row = $user_data_result->fetch_assoc()) {
                    echo "
                    <tr>
                        <th scope='row' class='text-center'>{$row["id"]}</td>
                        <td class='text-center'>{$row["name"]}</td>
                        <td class='text-center'>{$row["email"]}</td>
                        <td class='text-center'>{$row["role"]}</td>
                        
                        <td class='text-center'>
                            <button type='button' class='btn btn-success edit-btn'>Edit</button>
                            <button type='button' class='btn btn-success save-btn' style='display: none;'>Save</button>
                        </td>
                        <td class='text-center'>
                            <form action='misc_scripts/delete_admins.php' method='post'>
                                <input type='hidden' name='id' value='{$row["id"]}'>
                                <button class='btn btn-danger' type='submit id=reload-btn'>Delete</button>
                            </form>
                        </td>
                    </tr>
                    ";
                }
                  ?>
              </tbody>
            </table>

              <button type='button' class='btn btn-primary' data-mdb-toggle='modal' data-mdb-target='#editAdminModal'>Add admins</button>

              <!-- Modal -->
              <div class="modal fade" id="editAdminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Admins</h5>
                      <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="misc_scripts/make_admins.php" method="post">
                      <div class="modal-body">
                        
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Enter username" required>
                        </div>

                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                        </div>

                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                        </div>

                        <div class="form-group">
                          <label for="role">Role</label>
                          <select class="form-control" id="role" name="role" required>
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
              </div>
            </div>
          </div>
        </div>
        
        
      </section>

  <!-- Jquery -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="js/admin.js"></script>
  <!-- Admin edit button script -->
  <script type="text/javascript" src="misc_scripts/edit_admin.js"></script>

</body>

</html>