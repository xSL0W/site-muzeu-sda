<?php 

// Include config file
require_once "../config.php";



function getPostsCount($lang) 
{
    global $db;

    $result = $db->query("SELECT COUNT(*) FROM `posts` WHERE `lang` = '$lang';");
    $row = $result->fetch_row();
    return $row[0];
}

?>



