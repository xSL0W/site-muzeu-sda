<?php 


function getTranslatedText($phrase)
{
    $lang_text = array(
        'ro'=> array(
            'WELCOME_HERO_TITLE'=>'Bine ai venit pe pagina web a muzeului Puskas Tivadar!',
            'WELCOME_HERO_DESC'=>'Apasa pe butonul de mai jos pentru a vedea mai multe informatii',
            'MORE'=>'Mai multe',

            'BTN_HOME'=>'Acasa',
            'BTN_EXHIBITS'=>'Exponate',
            'BTN_ABOUT_US'=>'Despre noi',
            'BTN_LOCATION'=>'Locatie',
            
            'INFO_VISIT_HOURS'=>'Program vizitare',
            'INFO_SPONSOR'=>'Sustinatorul muzeului',
            'INFO_EXHIBITS'=>'Exponate',
            'INFO_YEARS_OLD'=>'Vechime',
        ),
        'en'=> array(
            'WELCOME_HERO_TITLE'=>'Welcome to the web page of Puskas Tivadar museum!',
            'WELCOME_HERO_DESC'=>'Press on the button below for more informations',
            'MORE'=>'More',

            'BTN_HOME'=>'Home',
            'BTN_EXHIBITS'=>'Exhibits',
            'BTN_ABOUT_US'=>'About us',
            'BTN_LOCATION'=>'Location', 
            
            'INFO_VISIT_HOURS'=>'Visit Hours',
            'INFO_SPONSOR'=>'Official Sponsor',
            'INFO_EXHIBITS'=>'Exhibits',
            'INFO_YEARS_OLD'=>'Years Old',            
        ),
        'hu'=> array(
            'WELCOME_HERO_TITLE'=>'Szolgált az iparban mikor egy összeállította Puskas Tivadar!',
            'WELCOME_HERO_DESC'=>'Ez egy régóta elfogadott tény, miszerint egy olvasót zavarja az olvasható szöveg',
            'MORE'=>'értelmessé',

            'BTN_HOME'=>'Szerkesztõ',
            'BTN_EXHIBITS'=>'Szövegmodellt',
            'BTN_ABOUT_US'=>'Ellentétben',
            'BTN_LOCATION'=>'Többé',    
            
            'INFO_VISIT_HOURS'=>'Látogatási program',
            'INFO_SPONSOR'=>'Szponzorok',
            'INFO_EXHIBITS'=>'Kiállítások',
            'INFO_YEARS_OLD'=>'RÉGI',            
        )
    );

    return ($lang_text[getLanguage()][$phrase]);
}


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