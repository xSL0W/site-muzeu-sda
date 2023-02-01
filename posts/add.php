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
$image = $_POST['image_url']; // $_FILES SAU URL

  
addCategory($title, $description, $image, $url_title, $language , $db);

function addCategory($title, $description, $image, $url_title, $language , $db)
{
    $add_stmt = mysqli_prepare($db, "INSERT INTO categories (id, title, url_name,description, image_path, lang) VALUES (NULL, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($add_stmt, 'sssss', $title, $url_title, $description, $image, $language);
    mysqli_stmt_execute($add_stmt);
}



mysqli_stop($db);
header('Location: ' . $_SERVER['HTTP_REFERER']);