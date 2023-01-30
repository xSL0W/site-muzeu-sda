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
$db = mysqli_start();


$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$role = $_POST['role'];

$email = $purifier->purify($email);
$name = $purifier->purify($name);
$password = $purifier->purify($password);
$role = $purifier->purify($role);


addUser($email, $name, $password, $role, $db);


function AddUser($email, $name, $password, $role, $db)
{
    $add_stmt = mysqli_prepare($db, "INSERT INTO users (id, email, name, pass, role) VALUES (NULL, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($add_stmt, 'ssss', $email, $name, $password, $role);
    mysqli_stmt_execute($add_stmt);
}

header("Location: ".$_SERVER['HTTP_REFERER']);

exit;
