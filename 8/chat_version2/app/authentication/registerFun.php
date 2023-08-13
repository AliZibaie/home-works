<?php 
session_start();
if (isset($_GET["username2"]) && isset($_GET["password2"]) && isset($_GET["email"]) && isset($_GET["name2"])) {
    $name = $_GET["name2"];
    $email = $_GET["email"];
    $userName = $_GET["username2"];
    $password = $_GET["password2"];
    $nameValidation = preg_match("/[a-z\s]{3,32}/", "$name");
    $emailValidation = preg_match("/[a-zA-Z0-9]+@{1}[a-z]+\.[a-z]{2,}/", "$email");
    $userNameValidation = preg_match("/[a-zA-Z0-9_]{3,32}/", "$userName");
    $passwordValidation = preg_match("/[a-zA-Z0-9\~\!\@\#\%\^\&\*\(\)\[\]\{\}\/\+\-\_\?\<\>$]+/", "$password");

    if (empty($name)) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>please enter your name</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');
    }elseif (!$nameValidation) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>invalid name</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');
    }elseif (empty($email)) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>please enter your email</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');
    }    
    elseif (!$emailValidation) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>invalid email</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');
        
    }elseif (empty($userName)) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>please enter your username</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');
        
    }elseif (!$userNameValidation) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>invalid username</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');
        
    }elseif (empty($password)) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>please enter your password</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');
        
    }elseif (!$passwordValidation) {
        echo "<html>
        <body style='background-color:black;'>
            <h1 style='color:red;margin:auto;margin-top:300px;width:500px;text-align:center'>invalid password</h1>
        </body>
        </html>";
        header('Refresh:3,url=../../index.php');
    }
    else {
        $decoded = json_decode(file_get_contents("../../data/usersInfo.json"),true) ;
        $deletedUser = json_decode(file_get_contents("../../data/deletedUsers.json"),true) ;
        $newUser = ["id"=>count($decoded) + 1,"name"=>$name,"username"=> $userName,"password"=> $password,"email"=> $email];
        $newUser2 = ["name"=>$name,"username"=> $userName,"password"=> $password,"email"=> $email];
        
        if (!empty($decoded) && in_array($newUser, $decoded)) {
            echo "you have already signed up!";
            header('Refresh:3,url=../../index.php');
            exit;
        }elseif (!empty($deletedUser) && in_array($newUser2, $deletedUser)) {
           echo "you are banned from this chat get lost!";
           header('Refresh:3,url=../../index.php');
           exit;
        }
            $decoded [] = $newUser;
        
        file_put_contents("../../data/usersInfo.json", json_encode($decoded, JSON_PRETTY_PRINT));
        $_SESSION["userName"] = "$userName";
        echo "welcome!";
        header('Refresh:3,url=../../pages/home.php');;
        exit;
    }
}





































?>
