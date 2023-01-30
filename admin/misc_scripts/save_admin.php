<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/funcs.php");

if(!isLoggedIn() || !isAdmin())
{
    header("Location: /");
    die();
}

require_once($root."/config.php");
require_once($root."/assets/lib/htmlpurifier/library/HTMLPurifier.auto.php");

// HTML Purifer (sanitizer)
$config = HTMLPurifier_Config::createDefault();
$purifier = new HTMLPurifier($config);

$db = mysqli_start();


$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$role = $_POST["role"];

$email = $purifier->purify($email);
$name = $purifier->purify($name);
$password = $purifier->purify($password);
$role = $purifier->purify($role);


// Add your code here to process the data and save it to the database
editUser($id, $email, $name, $role, $db);


function editUser($id, $email, $name, $role, $db)
{
    $edit_stmt = mysqli_prepare($db, "UPDATE users SET email=?, name=?, role=? WHERE id=?");
    mysqli_stmt_bind_param($edit_stmt, 'sssi', $email, $name, $role, $id);
    mysqli_stmt_execute($edit_stmt);
}


mysqli_stop($db);
exit;


?>