<?php


// $id = $_POST['del'];

if (isset($_POST['del'])) {
   $id=$_POST['del'];

   try {
    $stmt=$app['db']->query("DELETE FROM login WHERE id='$id'");
    session_destroy();

   } catch (Exception $e) {
    die($e->getMessage());
   }
}
header('Location: /');   










?>