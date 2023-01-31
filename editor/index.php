<?php

$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/config.php");

$db = mysqli_start();
$post_data = $db->query("SELECT `id`, `title`, `description`, `image_path` FROM `categories`");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editor</title>

      <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Custom styles -->
  <!-- <link rel="stylesheet" href="css/admin.css" /> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
  <script src="ckfinder/ckfinder.js"></script>


  



  </head>
  
  <body>

<button type='button' class='btn btn-primary' data-mdb-toggle='modal' data-mdb-target='#editPostModal'>Edit post</button>

<!-- Modal -->
<div class="modal fade" id="editPostModal" tabindex="-1" aria-labelledby="editPostModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPostModalLabel">Edit post</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
            $data = $post_data->fetch_assoc();
            $img = $data['image_path'];
            //echo $img;
            echo "
            <center><label for='postImage' class='fw-bold'>Image</label></center>
            <img style='height:40vh;' class='img-thumbnail rounded mx-auto d-block img-fluid' id='postImage' src='{$img}'>
            <center><input type='file' class='form-control-file custom-file-input' name='file' accept='image/*' onchange='previewImage(event)'></center>
              <input id= 'postId' type= 'hidden' value= '{$data["id"]}'></input>
            <div class='form-group p-2'>
              <label for='title' class='fw-bold'>Title</label>
              <input type='text' class='form-control' name='title' value={$data["title"]} required>
            </div>
            
            <div class='form-group p-2'>
            <label for='text' class='fw-bold'>Text</label>
              <textarea id= 'editor' name='text'>{$data['description']}</textarea>
            </div>

            

            ";
            ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>


      <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <!-- Required js code -->
  <script type="text/javascript" src="imgPreview.js"></script>
  <script type="text/javascript" src="saveData.js"></script>

<!-- Axios -->

<script src="
https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js
"></script>

    <!-- CKEditor implementation -->
  </body>
</html>