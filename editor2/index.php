<?php
session_start();
// Include config file
$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/config.php");
require_once($root."/funcs.php");

$db = mysqli_start();
$post_data = $db->query("SELECT `id`, `description`, `title`, `image_path` FROM `categories`");
//mysqli_stop($db);
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

  <!-- Editor styles -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.21.0/ui/trumbowyg.min.css" />



  </head>
  
  <body>

<button type='button' class='btn btn-primary' data-mdb-toggle='modal' data-mdb-target='#editPostModal'>Edit post</button>

<!-- Modal -->
<div class="modal fade" id="editPostModal" aria-labelledby="editPostModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPostModalLabel">Edit post</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
            $data = $post_data->fetch_assoc(); ?>
            
            <label for='postImage' class='mx-auto fw-bold'>Image</label>
            <img style="height:40vh;" class='img-thumbnail rounded mx-auto d-block img-fluid' id='postImage' src='<?php echo $data['image_path']; ?>'>
            <input type='file' class='form-control-file custom-file-input' name='file' accept='image/*' onchange='previewImage(event)'>
              <input id= 'postId' type= 'hidden' value= '<?php echo $data["id"];?>'></input>
            <div class='form-group p-2'>
              <label for='title' class='fw-bold'>Title</label>
              <input type='text' class='form-control' name='title' value=<?php echo $data["title"];?> required>
            </div>
            
            <div class='form-group p-2'>
            <label for='text' class='fw-bold'>Text</label>
              <textarea id= 'editor' name='text'><?php echo $data['description'] ?></textarea>
            </div>
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


<!-- Axios -->

<script src="
https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js
"></script>

    <!-- CKEditor implementation -->

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.21.0/trumbowyg.min.js"></script>

    <script src="trumbowyg/plugins/upload/trumbowyg.upload.min.js"></script>

    <script type="text/javascript" src="saveData.js"></script>


  </body>
</html>