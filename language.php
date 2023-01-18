<?php 


function initLanguage()
{
    // If lang found in url as paramater set it in cookies...
    if(isset($_GET["lang"]))
    {
        $lang = $_GET["lang"];
        if($lang==="ro")
        {
            $_SESSION['lang'] = "ro";
        }
        else if($lang === "en")
        {
            $_SESSION['lang'] = "en";
        }
        else if($lang === "hu")
        {
            $_SESSION['lang'] = "hu";
        }
        return;
    }
    
    // if lang not found in url or cookie
    if (!isset($_SESSION["lang"]))
    { 
        $_SESSION["lang"] = "ro";
        return;
    }

    // if button sends new language
    if (isset($_POST["lang"])) 
    { 
        $_SESSION["lang"] = trim($_POST["lang"]);
        return; 
    }
}

function getLanguage()
{
    return $_SESSION["lang"];
}

?>