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



