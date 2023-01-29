<?php
session_start();

$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/info.data.old.php");


if(!isLoggedIn() || !isAdmin())
{
    header("Location: /");
    die();
}

require_once($root."/config.php");
$db = mysqli_start();


$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$role = $_POST['role'];


addUser($email, $name, $password, $role, $db);

function addUser($email, $name, $password, $role, $db)
{
    $add_stmt = mysqli_prepare($db, "INSERT INTO users (id, email, name, pass, role) VALUES (NULL, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($add_stmt, 'ssss', $email, $name, $password, $role);
    mysqli_stmt_execute($add_stmt);
}

// echo "Username: " . $username . "<br>";
// echo "Password: " . $password . "<br>";
// echo "Email: " . $email . "<br>";
// echo "Role: " . $role;

header("Location: ".$_SERVER['HTTP_REFERER']);
exit;
?>