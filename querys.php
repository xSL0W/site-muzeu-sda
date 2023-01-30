<?php 

function QUERY_GET_CATEGORIES_BY_LANG($db, $lang)
{
    return $db->query("SELECT * FROM `categories` WHERE `lang` = '$lang';");
}

function QUERY_GET_USER_DATA($db)
{
    return $db->query("SELECT id, email, name, role FROM users");
}
?>