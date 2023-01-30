<?php 

function GET_CATEGORY_ID_BY_URLNAME($db, $categoryUrl)
{
    $query = $db->query("SELECT `id` FROM `categories` WHERE `url_name` = '$categoryUrl';");
    $result = mysqli_fetch_assoc($query);
    if(empty($result))
    {
        return 0;
    }
    return $result['id'];
}

function GET_CATEGORY_URLNAME_BY_ID($db, $categoryId)
{
    $query = $db->query("SELECT `url_name` FROM `categories` WHERE `id` = '$categoryId';");
    $result = mysqli_fetch_assoc($query);
    if(empty($result))
    {
        return "null";
    }
    return $result['url_name'];
}

function QUERY_GET_CATEGORIES_BY_LANG($db, $lang)
{
    return $db->query("SELECT * FROM `categories` WHERE `lang` = '$lang';");
}

function QUERY_GET_USER_DATA($db)
{
    return $db->query("SELECT id, email, name, role FROM users");
}

function QUERY_GET_POSTS($db, $lang, $categoryUrl)
{
    $categoryId = GET_CATEGORY_ID_BY_URLNAME($db, $categoryUrl);
    return $db->query("SELECT * FROM `posts` WHERE `lang` = '$lang' AND `category` = $categoryId;");
}
?>