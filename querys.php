<?php 

function categoryQuery($db, $lang)
{
    return $db->query("SELECT * FROM `categories` WHERE `lang` = '$lang';");
}


?>