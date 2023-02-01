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


//$postId = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$language = $_POST['language'];
$url_title = $_POST['url_title'];
$image = $_FILES['image'];

$imagePath = 'img/' . time() . '-' . $image['name'];

move_uploaded_file($image['tmp_name'], $imagePath);

$imagePath = "/categories/".$imagePath; // nu incerca sa intelegi logica si sa stergi linia asta pentru ca vei regreta


if ($image['name'] != null) 
{
   addCategory($title, $description, $imagePath, $url_title, $language , $db);
}
else
{
    addCategoryNoImg($title, $description, $url_title, $language , $db);
}

  


function addCategory($title, $description, $image, $url_title, $language , $db)
{
    $add_stmt = mysqli_prepare($db, "INSERT INTO categories (id, title, url_name,description, image_path, lang) VALUES (NULL, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($add_stmt, 'sssss', $title, $url_title, $description, $image, $language);
    mysqli_stmt_execute($add_stmt);
}


function addCategoryNoImg($title, $description, $url_title, $language , $db)
{
    $add_stmt = mysqli_prepare($db, "INSERT INTO categories (id, title, url_name,description, lang) VALUES (NULL, ?, ?, ?,?)");
    mysqli_stmt_bind_param($add_stmt, 'ssss', $title, $url_title, $description, $language);
    mysqli_stmt_execute($add_stmt);
}



mysqli_stop($db);
header('Location: ' . $_SERVER['HTTP_REFERER']);