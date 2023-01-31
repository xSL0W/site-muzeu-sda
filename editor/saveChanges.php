<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/config.php");


  $postId = $_POST['postId'];
  $title = $_POST['title'];
  $text = $_POST['text'];
  $image = $_FILES['image'];

  $imagePath = "uploaded_imgs/".time() . '-' . $image['name'];
  
  move_uploaded_file($image['tmp_name'], $imagePath);

  $imagePath = "/editor/".$imagePath;

  //echo "Post ID: $postId\nTitle: $title\nText: $text\nImage Path: $imagePath";

  $db=mysqli_start();

if ($image['name'] == null) 
{
    savePostNoImg($postId, $title, $text, $db);
} 
else 
{
    savePost($postId, $title, $text, $imagePath, $db);
}
  

  function savePost($postId, $title, $text, $imagePath , $db)
  {
      $save_stmt = mysqli_prepare($db, "UPDATE categories SET title=?, description=?, image_path=? WHERE id=?");
      mysqli_stmt_bind_param($save_stmt, 'sssi', $title, $text, $imagePath, $postId);
      mysqli_stmt_execute($save_stmt);
  }

  function savePostNoImg($postId, $title, $text, $db)
  {
      $save_stmt = mysqli_prepare($db, "UPDATE categories SET title=?, description=? WHERE id=?");
      mysqli_stmt_bind_param($save_stmt, 'ssi', $title, $text, $postId);
      mysqli_stmt_execute($save_stmt);
  }


  mysqli_stop($db);
  // Save the data to an external file or database

  // Return a success response
//   echo json_encode(["status" => "success"]);