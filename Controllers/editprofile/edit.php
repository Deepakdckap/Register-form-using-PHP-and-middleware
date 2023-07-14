<?php


// if (isset($_POST['edit'])) {
//     $edit = $_POST['edit'];

//     try {
//         $stmt=$app['db']->query("SELECT * FROM login WHERE id ='$edit' ");
//         $values=$stmt->fetchAll(PDO::FETCH_OBJ);
//     } catch (PDOException $e) {
//         die($e->getMessage());
//     }
// }

// header('Location:/edit');





require 'Views/editprofile/view.edit.php';





?>