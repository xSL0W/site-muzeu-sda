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


if (isset($_POST["id"])) 
{
    $id = $_POST['id'];
    $id = $purifier->purify($id);

    deleteUser($id, $db);
}



function deleteUser($id, $db)
{
    $del_stmt = mysqli_prepare($db, "DELETE FROM users WHERE id = ?");
    mysqli_stmt_bind_param($del_stmt, "i", $id);
    mysqli_stmt_execute($del_stmt);
}

mysqli_stop($db);
header("Location: ".$_SERVER['HTTP_REFERER']);
exit;

