<?php

$upname = $_POST['update_user'];
$upemail = $_POST['upemail'];
$uppass = $_POST['uppassword'];

if (isset($_POST['upuser'])) {
    //taking the name from edit page and stroing in the var;
$id = $_POST['upuser'];

    try {
        $stmt = $app['db']->query("UPDATE login SET username = '$upname', email = '$upemail' WHERE id ='$id'");
    } catch (Exception $e) {
        die($e->getMessage());
    }
    $_SESSION['name']=[
        'username'=>$upname
    ];
    header('Location: /home');
}







?>