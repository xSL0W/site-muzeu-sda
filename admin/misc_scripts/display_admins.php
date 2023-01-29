<?php
//session_start();

$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/info.data.old.php");

if(!isLoggedIn() || !isAdmin())
{
    header("Location: /");
    die();
}

require_once($root."/config.php");
$db = mysqli_start();

$user_data_result = $db->query("SELECT id, email, name, role FROM users");

