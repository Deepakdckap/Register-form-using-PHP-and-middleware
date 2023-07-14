<?php

// int_set('display_errors', 1);
// int_set('display_startup_errors', 1);
// error_reporting(E_ALL); 

$app = [];
require 'con.php';
require 'Core/router.php';
session_start();

$app['db'] = (new Database())->db;



// var_dump($_SERVER);
    // $current_host = 'localhost';
    // // $current_host = $_SERVER['HTTP_HOST'];
    // $new_host = 'deepak';
    // if ($current_host !== $new_host) {
    // // header('Location: http://' . $new_host . $_SERVER['REQUEST_URI']);
    // header('Location: http://' . $new_host);

    // }

$router = new Core\Router();

    $router->get('/','Controllers/Registration/registration.php')->only('guest');
    $router->post('/register','Controllers/Registration/register.php')->only('guest');
    $router->get('/login','Controllers/Login/login.php')->only('guest');
    $router->post('/login_logics','Controllers/Login/login_logics.php')->only('guest');
    $router->get('/home','Controllers/welcome/home.php')->only('auth');
    $router->post('/logout','Controllers/Logout/logout.php')->only('auth');
    $router->get('/about','Controllers/About/about.php')->only('auth');
    $router->delete('/delete','Controllers/Delete/del.php')->only('auth');
    $router->get('/edit','Controllers/editprofile/edit.php')->only('auth');
    $router->patch('/update','Controllers/updateprofile/update.php')->only('auth');


require $router->route();




























// this the old method without router.php;


// $routes = [
//     '/'=>'Controllers/Registration/registration.php',
//     '/register'=>'Controllers/Registration/register.php',
//     '/login'=>'Controllers/Login/login.php',
//     '/login_logics'=>'Controllers/Login/login_logics.php',
//     '/home'=>'Controllers/welcome/home.php',
//     '/edit'=>'Controllers/editprofile/edit.php',
//     // '/editlogic'=>'Controllers/editprofile/editlogic.php',
//     '/update'=>'Controllers/updateprofile/update.php',
//     '/logout'=>'Controllers/Logout/logout.php',
//     '/about'=>'Controllers/About/about.php',
//     '/delete'=>'Controllers/Delete/del.php',
//     // '/del_logic'=>'Controllers/Delete/del.logic.php'
// ];

// // var_dump($_SERVER);

// if (array_key_exists($_SERVER['REQUEST_URI'],$routes)) {
//     require $routes[$_SERVER['REQUEST_URI']];
// }else{
//     http_response_code(404);
// }

?>