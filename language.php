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

            'TITLE_HALF_1'=>'Telefoanele din 1890',
            'INFO_HALF_1'=>'Telefoanele din anul 1890 erau foarte primitive, fără ecrane sau touch-uri, fiind alcătuite dintr-un microfon şi un difuzor. Acestea erau conectate la o linie telefonică şi utilizau energie electrică pentru a transmite sunetul de la un utilizator la altul. De obicei, apelurile erau efectuate prin intermediul unui operator telefonic care făcea legătura între utilizatori.Telefoanele erau mari şi grele, nefiind uşor de transportat de la un loc la altul. Design-ul lor era simplu şi fără ornamente, majoritatea fiind făcute din materiale precum metalul sau lemnul. Acestea erau folosite în principal de către afaceri şi instituţii publice, fiind costisitoare şi accesibile doar unei minorităţi de persoane. De asemenea, serviciile telefonice erau disponibile doar în anumite zone geografice limitate. În concluzie, telefoanele din anul 1890 erau foarte diferite faţă de tehnologia modernă de astăzi.Acestea erau conectate la o linie telefonică şi utilizau energie electrică pentru a transmite sunetul de la un utilizator la altul. De obicei, apelurile erau efectuate prin intermediul unui operator telefonic care făcea legătura între utilizatori.Telefoanele erau mari şi grele, nefiind uşor de transportat de la un loc la altul. Design-ul lor era simplu şi fără ornamente, majoritatea fiind făcute din materiale precum metalul sau lemnul.',
            'TITLE_HALF_2'=>'Aparatele foto si proiectoarele video din anii 1900',
            'INFO_HALF_2'=>'Aparatele foto şi proiectoarele video pe benzi din anii 1900 erau foarte diferite faţă de tehnologia modernă. Aparatele foto erau manuale, necesitând expunerea prelungită şi dezvoltarea fotografiilor într-un laborator foto special. Acestea erau mari şi grele, fiind dificil de transportat. Proiectoarele video pe benzi erau utilizate pentru proiecţia filmelor şi erau alimentate de manivele sau electricitate. Calitatea imaginii era foarte slabă, cu imagini neclare şi o lumină slabă. Acestea erau utilizate în principal în sălile de cinema şi erau costisitoare. În concluzie, tehnologia foto şi video din acea perioadă era foarte limitată şi diferită faţă de tehnologia de astăzi. Aparatele foto erau manuale, necesitând expunerea prelungită şi dezvoltarea fotografiilor într-un laborator foto special. Acestea erau mari şi grele, fiind dificil de transportat. Proiectoarele video pe benzi erau utilizate pentru proiecţia filmelor şi erau alimentate de manivele sau electricitate. Calitatea imaginii era foarte slabă, cu imagini neclare şi o lumină slabă. Acestea erau utilizate în principal în sălile de cinema şi erau costisitoare.',

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

            'TITLE_HALF_1'=>'Telefoanele din 1890',
            'INFO_HALF_1'=>'Telephones in the year 1890 were very primitive, lacking screens or touch-screens, and were made up of a microphone and a speaker. These were connected to a telephone line and used electricity to transmit sound from one user to another. Usually, calls were made through a telephone operator who connected the users. Telephones were large and heavy, not easily portable from one place to another. Their design was simple and without decorations, most being made of materials such as metal or wood. These were primarily used by businesses and public institutions, being expensive and accessible only to a minority of people. Also, telephone services were available only in certain limited geographic areas. In conclusion, phones in the year 1890 were very different from today\'s modern technology.',
            'TITLE_HALF_2'=>'Aparatele foto si proiectoarele video din anii 1900',
            'INFO_HALF_2'=>'The photo cameras and film projectors in the 1900s were very different from today\'s technology. The photo cameras were manual, requiring a long exposure time and the development of photographs in a special photo laboratory. These were large and heavy, making it difficult to carry around. Film projectors were used for movie projection and were powered by hand cranks or electricity. The image quality was very poor, with unclear images and low light. These were mainly used in movie theaters and were expensive. In conclusion, the photo and video technology at that time was very limited and different from today\'s technology.',
            

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

            'INFO_HALF_1'=>'Az 1890-es év telefonjai nagyon primitívek voltak, nélkülöztek képernyőt vagy érintőképernyőt, és egy mikrofonból és egy hangszóróból álltak. Ezek egy telefonvonalhoz voltak csatlakoztatva, és elektromosságot használtak a hang továbbítására egy felhasználótól a másikig. Általában a hívásokat egy telefonos operátor keresztül tették, aki összekapcsolta a felhasználókat. A telefonok nagyok és nehézek voltak, nem voltak könnyen áthelyezhetők egy helyről a másikra. Tervezésük egyszerű volt és díszítések nélküli, legtöbbjük fémből vagy fából készült. Ezek főleg üzleti vállalkozások és közintézmények által használták, drágák voltak és csak egy kisebbségnek volt hozzáférhető. Emellett a telefonszolgáltatások csak bizonyos korlátozott földrajzi területen voltak elérhetők. Összefoglalva, az 1890-es év telefonjai nagyon eltérnek a mai modern technológiától.',
            'TITLE_HALF_1'=>'Telefoanele din 1890',
            'INFO_HALF_2'=>'Az 1900-as évek fényképezőgépei és film vetítői nagyon különböztek a mai technológiától. A fényképezőgépek manuálisak voltak, hosszú expozíciós időt igényeltek és a fényképek fejlesztését egy speciális fotó laboratóriumban kellett elvégezni. Ezek nagyon nagyok és nehézek voltak, nehéz őket hordozni. Film vetítők mozifilm vetítésére használták, manuális vagy elektromos meghajtásúak voltak. A képminőség nagyon rossz volt, homályos képekkel és alacsony fényerővel. Ezek főleg mozitermekben használták, és drágák voltak. Összefoglalva, a fényképezés és videó technológia abban az időben nagyon korlátozott volt és különbözött a mai technológiától.',
            'TITLE_HALF_2'=>'Telefoanele din 1890',

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