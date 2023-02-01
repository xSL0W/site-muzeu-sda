<?php
session_start();


// Include config file
$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/config.php");
require_once($root."/funcs.php");

if(!isLoggedIn() || !isAdmin())
{
    header("Location: /");
    die();
}


$db = mysqli_start();


$postId = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image'];

//echo $title." ".$description." ".$image;

//return;
$imagePath = 'img/' . time() . '-' . $image['name'];

move_uploaded_file($image['tmp_name'], $imagePath);

$imagePath = "/categories/".$imagePath; // nu incerca sa intelegi logica si sa stergi linia asta pentru ca vei regreta



if ($image['name'] != null) 
{
  savePost($postId, $title, $description, $imagePath, $db);
}
else
{
  savePostNoImg($postId, $title, $description, $db);
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
header('Location: ' . $_SERVER['HTTP_REFERER']);