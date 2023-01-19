<?php 

// Include config file
$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/config.php");


function isLoggedIn() 
{
    return (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true);
}

function getAvatar()
{
    if(isLoggedIn())
    {
        return "https://mdbcdn.b-cdn.net/img/new/avatars/2.webp";
    }
    else
    {
        return "http://primusdatabase.com/images/archive/8/83/20201212165144%21Unknown_avatar.png";
    }
}

function getPostsCount($lang) 
{
    global $db;

    $result = $db->query("SELECT COUNT(*) FROM `posts` WHERE `lang` = '$lang';");
    $row = $result->fetch_row();
    return $row[0];
}


function getPostData($id, $lang, $category)
{
    global $db;

    if(trim(empty($category)))
    {
        $result = $db->query("SELECT * FROM `posts` WHERE `id` = $id AND `lang` = '$lang';");
    }
    else 
    {
        $category = trim($category);
        $result = $db->query("SELECT * FROM `posts` WHERE `id` = $id AND `lang` = '$lang' AND `category` = '$category';");
    }
    
    if ($result !== FALSE) 
    {
        $data = $result->fetch_assoc();
        return $data;
    }

}


function getUserDataByPostId($postId)
{
    global $db;

    $result = $db->query("SELECT users.email,users.name FROM `users` JOIN posts ON users.id = posts.posted_by WHERE posts.id = $postId;");

    if ($result !== FALSE) 
    {
        $data = $result->fetch_assoc();
        return $data;
    }
}



// broken needs fix
function getCategoryData($lang)
{
    global $db;

    $result = $db->query("SELECT * FROM `categories` WHERE `lang` = '$lang';");
    
    if ($result !== FALSE) 
    {
        return $result;
    }
}

?>



