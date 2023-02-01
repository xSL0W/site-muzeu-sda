<?php
require_once("../config.php");


  $postId = $_POST['postId'];
  $title = $_POST['title'];
  $text = $_POST['text'];
  $image = $_FILES['image'];
  $category = $_POST['category'];
  $language = $_POST['language'];

  $imagePath = './uploaded_imgs/' . time() . ' ' . $image['name'];
  
  move_uploaded_file($image['tmp_name'], $imagePath);

if ($image['name'] == null) 
{
    addPostNoImg($title, $text, $db);
} 
else 
{
    addPost($title, $text, $imagePath, $category, $language , $db);
}
  




  function addPost($title, $text, $imagePath, $category, $language , $db)
  {
      $add_stmt = mysqli_prepare($db, "INSERT INTO categories (id, name, text, image_path, category, lang) VALUES (NULL, ?, ?, ?, ?, ?)");
      mysqli_stmt_bind_param($add_stmt, 'sssss', $title, $text, $imagePath, $category, $language);
      mysqli_stmt_execute($add_stmt);
  }

  function addPostNoImg($title, $text, $db)
  {
    $add_stmt = mysqli_prepare($db, "INSERT INTO categories (id, name, text, category, lang) VALUES (NULL, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($add_stmt, 'ssss', $title, $text, $category, $language);
    mysqli_stmt_execute($add_stmt);
  }

  // Save the data to an external file or database

  // Return a success response
//   echo json_encode(["status" => "success"]);