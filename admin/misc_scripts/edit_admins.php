<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root."/funcs.php");

if(!isLoggedIn() || !isAdmin())
{
    header("Location: /");
    die();
}

require_once($root."/config.php");
require_once($root."/assets/lib/htmlpurifier/library/HTMLPurifier.auto.php");

// HTML Purifer (sanitizer)
$config = HTMLPurifier_Config::createDefault();
$purifier = new HTMLPurifier($config);

$db = mysqli_start();

$data = json_decode(file_get_contents("php://input"));
$id = $data->id;
$name = $data->name;
$email = $data->email;
$password = $data->password;
$role = $data->role;

$id = $purifier->purify($id);
$email = $purifier->purify($email);
$name = $purifier->purify($name);
$password = $purifier->purify($password);
$role = $purifier->purify($role);



//$fileoutput = "id: -" . $id . "- name: -" . $name . "- email: -" . $email . "- pass: -" . $password . "- role: -" . $role;
//file_put_contents("output.txt", $fileoutput);



// Add your code here to process the data and save it to the database
editUser($id, $email, $name, $role, $password, $db);

function editUser($id, $email, $name, $role, $password, $db)
{
    if($password === "*******")
    {
        $edit_stmt = mysqli_prepare($db, "UPDATE users SET email=?, name=?, role=? WHERE id=?");
        mysqli_stmt_bind_param($edit_stmt, 'sssi', $email, $name, $role, $id);
        mysqli_stmt_execute($edit_stmt);        
    }
    else
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); 
        $edit_stmt = mysqli_prepare($db, "UPDATE users SET email=?, name=?, role=?, pass=? WHERE id=?");
        mysqli_stmt_bind_param($edit_stmt, 'ssssi', $email, $name, $role, $hashed_password, $id);
        mysqli_stmt_execute($edit_stmt);
    }
}


mysqli_stop($db);
exit;


?>