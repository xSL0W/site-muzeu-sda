<?php 

// Include config file
require_once "../config.php";



function getPostsCount() 
{
    global $db;

    $result = $db->query("SELECT COUNT(*) FROM `posts`;");
    $row = $result->fetch_row();
    return $row[0];
}



# TEMPLATE

#   <!-- Post preview-->
#   <div class="post-preview">
#       <a href="post.html">
#           <h2 class="post-title">
#               Titlu
#           </h2>
#           <h3 class="post-subtitle">
#               ShortContent
#           </h3>
#       </a>
#       <img src="../assets/img/portfolio/fullsize/1.jpg" alt="" class="img-thumbnail">
#   
#       <p class="post-meta">
#           Posted by
#           <a href="#!">
#               Author                            
#           </a>
#           on date 22/02/2022
#       </p>
#   </div>

function sendAllPosts() 
{
    global $db;
    
    for($i = 1; $i <= getPostsCount(); $i++)
    {
        echo 
        "<div class=\"post-preview\">
            <a href=\"post.html\">
                <h2 class=\"post-title\">";

                $result = $db->query("SELECT `title` FROM `posts` WHERE `id` = $i;");
                if ($result !== FALSE) 
                {
                    $row = $result->fetch_row();
                    echo $row[0];
                }

                echo
                "</h2>

                <h3 class=\"post-subtitle\">";
                $result = $db->query("SELECT `short_content` FROM `posts` WHERE `id` = $i;");
                if ($result !== FALSE) 
                {
                    $row = $result->fetch_row();
                    echo $row[0];
                }

                echo
                "</h3>  
                </a>";            

                $result = $db->query("SELECT `thumbnail_path` FROM `posts` WHERE `id` = $i;");
                if ($result !== FALSE) 
                {
                    $row = $result->fetch_row();
                }  

            echo 
            "</a>

            <img src=\"$row[0]\" alt=\"\" class=\"img-thumbnail\">
        
            <p class=\"post-meta\"> Posted by
                <a href=\"#\">";
            
                $result = $db->query("SELECT users.email FROM `users`
                JOIN posts ON users.id = posts.created_by
                WHERE posts.id = $i;");
                if ($result !== FALSE) 
                {
                    $row = $result->fetch_row();
                    echo $row[0];
                }  

                $result = $db->query("SELECT `created_at` FROM `posts` WHERE `id` = $i;");
                if ($result !== FALSE) 
                {
                    $row = $result->fetch_row();
                }  

                echo 
                "</a>
                 - on date
                $row[0]
            </p>
        </div>";
        
        echo "<hr class=\"my-4\"/>";
    }


}







?>