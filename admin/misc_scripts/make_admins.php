<?php
session_start();

$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/funcs.php");
require_once($root."/assets/lib/htmlpurifier/library/HTMLPurifier.auto.php");

// HTML Purifer (sanitizer)
$config = HTMLPurifier_Config::createDefault();
$purifier = new HTMLPurifier($config);

if(!isLoggedIn() || !isAdmin())
{
    header("Location: /");
    die();
}

require_once($root."/config.php");
$db = mysqli_start();


$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$role = $_POST['role'];

$email = $purifier->purify($email);
$name = $purifier->purify($name);
$password = $purifier->purify($password);
$role = $purifier->purify($role);

$hashed_pass = password_hash($password, PASSWORD_DEFAULT); 


addUser($email, $name, $hashed_pass, $role, $db);


function AddUser($email, $name, $password, $role, $db)
{
    $add_stmt = mysqli_prepare($db, "INSERT INTO users (id, email, name, pass, role) VALUES (NULL, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($add_stmt, 'ssss', $email, $name, $password, $role);
    mysqli_stmt_execute($add_stmt);
}

mysqli_stop($db);
header("Location: ".$_SERVER['HTTP_REFERER']);

exit;
