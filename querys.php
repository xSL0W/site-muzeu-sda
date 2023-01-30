<?php 

function GET_CATEGORY_ID_BY_URL($db, $categoryUrl, $lang)
{
    $query = $db->query("SELECT `id` FROM `categories` WHERE `url_name` = '$categoryUrl' AND `lang` = '$lang';");
    $result = mysqli_fetch_assoc($query);
    if(empty($result))
    {
        return 0;
    }
    return $result['id'];
}

function GET_CATEGORY_URL_BY_ID($db, $categoryId, $lang)
{
    $query = $db->query("SELECT `url_name` FROM `categories` WHERE `id` = '$categoryId' AND `lang` = '$lang';");
    $result = mysqli_fetch_assoc($query);
    if(empty($result))
    {
        return "null";
    }
    return $result['url_name'];
}


function GET_POST_ID_BY_URL($db, $postUrl, $lang)
{
    $query = $db->query("SELECT `id` FROM `posts` WHERE `url_title` = '$postUrl' AND `lang` = '$lang';");
    $result = mysqli_fetch_assoc($query);
    if(empty($result))
    {
        return 0;
    }
    return $result['id'];
}

function GET_POST_URL_BY_ID($db, $postId, $lang)
{
    $query = $db->query("SELECT `url_title` FROM `posts` WHERE `id` = '$postId' AND `lang` = '$lang';");
    $result = mysqli_fetch_assoc($query);
    if(empty($result))
    {
        return "null";
    }
    return $result['url_title'];
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
    $categoryId = GET_CATEGORY_ID_BY_URL($db, $categoryUrl, $lang);
    return $db->query("SELECT * FROM `posts` WHERE `lang` = '$lang' AND `category` = $categoryId;");
}

function QUERY_GET_POST($db, $lang, $postUrl)
{
    $postId = GET_POST_ID_BY_URL($db, $postUrl, $lang);
    return $db->query("SELECT * FROM `posts` WHERE `lang` = '$lang' AND `id` = $postId;");
}


?>