<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'muzeu');
define('SITE_URL', 'http://127.0.0.1');


function mysqli_start()
{
    /* Attempt to connect to MySQL database */
    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check connection
    if($db === false)
    {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    return $db;
}

function mysqli_stop($db)
{
    mysqli_close($db);
}




?>