<?php

// if (!isset($_SESSION['name'])) {
//     header('Location:/');
// }


session_destroy();

header('Location:/login');






?>