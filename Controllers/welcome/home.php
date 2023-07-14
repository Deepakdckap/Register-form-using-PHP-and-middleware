<?php

if(!isset($_SESSION['name'])){
     header ('Location: /');
}
// elseif(isset($_SESSION['name'])){
//      header('Location:/home');
//  }


//var_dump($_SESSION);
require 'Views/welcome/view.home.php';

?>