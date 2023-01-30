<?php 

$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/assets/lib/htmlpurifier/library/HTMLPurifier.auto.php");


function getTranslatedText($phrase)
{
    $lang_text = array(
        'ro'=> array(
            'SITE_TITLE'=>'Muzeul Puskas Tivadar',

            'WELCOME_HERO_TITLE'=>'Bine ai venit pe pagina web a muzeului Puskas Tivadar!',
            'WELCOME_HERO_DESC'=>'Apasa pe butonul de mai jos pentru a vedea mai multe informatii',
            'SEE_MORE'=>'Mai multe',

            'BTN_HOME'=>'Acasa',
            'BTN_EXHIBITS'=>'Exponate',
            'BTN_ABOUT_US'=>'Despre noi',
            'BTN_LOCATION'=>'Locatie',

            'MAPS_WHERE_ARE_WE'=>'Unde ne aflam?',
            
            'INFO_VISIT_HOURS'=>'Program vizitare',
            'INFO_SPONSOR'=>'Sustinatorul muzeului',
            'INFO_EXHIBITS'=>'Exponate',
            'INFO_YEARS_OLD'=>'Vechime',

            'FOOTER_FOLLOW_US'=>'Urmareste-ne pe social media: ',
            'FOOTER_DESCRIPTION'=>'Va asteptam cu drag sa vizitati muzeul nostru cu exponate care dateaza inca din anul 1900 pana in prezent. ',
        ),
        'en'=> array(
            'SITE_TITLE'=>'Puskas Tivadar Museum',

            'WELCOME_HERO_TITLE'=>'Welcome to the web page of Puskas Tivadar museum!',
            'WELCOME_HERO_DESC'=>'Press on the button below for more informations',
            'SEE_MORE'=>'See more',

            'BTN_HOME'=>'Home',
            'BTN_EXHIBITS'=>'Exhibits',
            'BTN_ABOUT_US'=>'About us',
            'BTN_LOCATION'=>'Location', 

            'MAPS_WHERE_ARE_WE'=>'Where are we?',
            
            'INFO_VISIT_HOURS'=>'Visit Hours',
            'INFO_SPONSOR'=>'Official Sponsor',
            'INFO_EXHIBITS'=>'Exhibits',
            'INFO_YEARS_OLD'=>'Years Old',  
            
            'FOOTER_FOLLOW_US'=>'Follow us on social media: ',
            'FOOTER_DESCRIPTION'=>'We are waiting for you to visit our lovely museum that contains exhibits from 90s to present. ',            
        ),
        'hu'=> array(
            'SITE_TITLE'=>'Puskás Tivadar Múzeum',

            'WELCOME_HERO_TITLE'=>'Szolgált az iparban mikor egy összeállította Puskas Tivadar!',
            'WELCOME_HERO_DESC'=>'Ez egy régóta elfogadott tény, miszerint egy olvasót zavarja az olvasható szöveg',
            'SEE_MORE'=>'se értelmessé',

            'BTN_HOME'=>'Szerkesztõ',
            'BTN_EXHIBITS'=>'Szövegmodellt',
            'BTN_ABOUT_US'=>'Ellentétben',
            'BTN_LOCATION'=>'Többé',    

            'MAPS_WHERE_ARE_WE'=>'Hol vagyunk?',
            
            'INFO_VISIT_HOURS'=>'Látogatási program',
            'INFO_SPONSOR'=>'Szponzorok',
            'INFO_EXHIBITS'=>'Kiállítások',
            'INFO_YEARS_OLD'=>'RÉGI',            

            'FOOTER_FOLLOW_US'=>'Kövessen minket a közösségi médiában: ',
            'FOOTER_DESCRIPTION'=>'Az 1900-as évektől napjainkig visszanyúló kiállításokkal várjuk múzeumunkba. ',
        )
    );

    return ($lang_text[getLanguage()][$phrase]);
}


function initLanguage()
{
    // HTML Purifer (sanitizer)
    $config = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);


    // If lang found in url as paramater set it in cookies...
    if(isset($_GET["lang"]))
    {
        $lang = $_GET["lang"];
        $lang = $purifier->purify($lang);

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
        else
        {
            $_SESSION['lang'] = "ro";
        }
        return;
    }

    // if button sends new language
    if (isset($_POST["lang"])) 
    { 
        $lang = trim($_POST["lang"]);
        $lang = $purifier->purify($lang);

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
        else
        {
            $_SESSION['lang'] = "ro";
        }
        
        return; 
    }

    // if lang not found in url or cookie
    if (!isset($_SESSION["lang"]))
    { 
        $_SESSION["lang"] = "ro";
        return;
    }
}

function getLanguage()
{
    return $_SESSION["lang"];
}


?>