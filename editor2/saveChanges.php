<?php
session_start();


// Include config file
$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/config.php");
require_once($root."/funcs.php");
$db = mysqli_start();


$postId = $_POST['postId'];
$title = $_POST['title'];
$description = $_POST['text'];
$image = $_FILES['image'];

$imagePath = 'uploaded_imgs/' . time() . '-' . $image['name'];

move_uploaded_file($image['tmp_name'], $imagePath);

$imagePath = "/editor2/".$imagePath; // nu incerca sa intelegi logica si sa stergi linia asta pentru ca vei regreta



//echo "Post ID: $postId\nTitle: $title\nText: $description\nImage Path: $imagePath";


if ($image['name'] == null) 
{
  savePostNoImg($postId, $title, $description, $db);
} 
else 
{
  savePost($postId, $title, $description, $imagePath, $db);
}
  

function savePost($postId, $title, $description, $imagePath , $db)
{
  $save_stmt = mysqli_prepare($db, "UPDATE `categories` SET `title`=?, `description`=?, `image_path`=? WHERE `id`=?");
  mysqli_stmt_bind_param($save_stmt, 'sssi', $title, $description, $imagePath, $postId);
  mysqli_stmt_execute($save_stmt);
}

function savePostNoImg($postId, $title, $description, $db)
{
  $save_stmt = mysqli_prepare($db, "UPDATE `categories` SET `title`=?, `description`=? WHERE `id`=?");
  mysqli_stmt_bind_param($save_stmt, 'ssi', $title, $description, $postId);
  mysqli_stmt_execute($save_stmt);
}

mysqli_stop($db);