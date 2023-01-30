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



header("HTTP/1.1 204 No Content");

if (isset($_POST["id"])) 
{
    $id = $_POST['id'];
    deleteUser($id, $db);
}
function deleteUser($id, $db)
{
    $del_stmt = mysqli_prepare($db, "DELETE FROM users WHERE id = ?");
    mysqli_stmt_bind_param($del_stmt, "i", $id);
    mysqli_stmt_execute($del_stmt);
}

header("Location: ".$_SERVER['HTTP_REFERER']);
exit;

