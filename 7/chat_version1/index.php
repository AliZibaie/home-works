<?php
// session_start();
// require_once "pages/login.php";
// if (isset($_SESSION[$username]) && $_SESSION[$username] == $password) {
//     header("Location: pages/home.php");
// }

$visited = isset($_COOKIE['visitCount']) ? $_COOKIE['visitCount'] + 1 : 1;
setcookie('visitCount', $visited, time() + 60 * 60 * 24 );

// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";
if (!isset($_SESSION["userName"])) {
    if ($visited === 1) {
    header("Location: pages/signup.php");
    exit();
}else{
    header("Location: pages/login.php");
}

}else{
    header("Location: pages/home.php");
}
define("BASE_PATH",realpath(''));





?>

