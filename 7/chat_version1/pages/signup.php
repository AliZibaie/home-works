<?php 
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../assets/css/signunStyle.css"> -->
    <title>signup</title>
</head>
<body>
    <form action="" method="post" class="position-relative">
        <div class="container w-25 mx-auto mt-5 py-3 d-flex flex-column align-items-center flex-wrap gap-3 border-5">
            <h1 >Sign Up</h1>
            <!-- name -->
            <div class="form-floating mb-3 w-100 ">
                <input type="text" class="form-control sz" id="name" name="name"  >
                <label for="name">Name</label>
                <!-- <p class="">Name must be and contain 3 - 32 characters in lowercase</p> -->
              </div>
              <!-- email -->
            <div class="form-floating mb-3 w-100 ">
                <input type="text" class="form-control" id="email" name="email"  >
                <label for="email">Email</label>
                <!-- <p>Email must be a valid address, e.g. me@mydomain.com</p> -->
              </div>
              <!-- username -->
            <div class="form-floating mb-3 w-100 ">
                <input type="text" class="form-control is" id="username" name="username"  >
                <label for="username">Username</label>
                <!-- <p>username must be and contain 3 - 32 characters or numbers</p> -->
              </div>
              <!-- password -->
              <div class="form-floating w-100">
                <input type="password" class="form-control" id="userpassword" name="password" >
                <label for="userpassword">Password</label>
                <iconify-icon icon="mdi:show" class="position-absolute show-password" style="right: 9%;bottom: 40%;"></iconify-icon>
                <iconify-icon icon="mdi:hide" class="position-absolute hide-password" style="right: 9%;bottom: 40%;display:none;"></iconify-icon>
              </div>
              <!-- repeat username -->
              <div class="row w-100 d-flex  justify-content-between align-items-center">
                  <button type="submit" class="btn btn-success align-self-start mt-2 w-50">Signup</button>
                  <a href="login.php" class="w-50 text-end text-decoration-none text-danger">Login</a>
              </div>
        </div>
    </form>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="../assets/js/signupValidation.js"></script>
</body>
</html>

<?php
/*
function validationPattern($name, $email, $userName, $password ){
    $pattern = [
        "name"=>"[a-z\s]{3,32}",
        "email" => "[a-zA-Z0-9]+@{1}[a-z]+\.[a-z]{2,}",
        "username" => "[a-zA-Z0-9_]{3,32}",
        "password"=>"[a-zA-Z0-9\~\!\@\#\%\^\&\*\(\)\[\]\{\}\/\+\-\_\?\<\>$]+",
    ];
    $isNameValid = preg_match($pattern["name"] , $name);
    $isEmailValid = ($pattern["email"] == $email);
    $isUserNameValid = ($pattern["username"] == $userName);
    $isPasswordValid = ($pattern["password"] == $password);
    if ($isNameValid && !$isEmailValid) {
        echo "invalid email";
    }elseif($isEmailValid && $isEmailValid && !$isUserNameValid){
        echo "invalid username";
    }elseif($isEmailValid && $isEmailValid && $isUserNameValid && !$isPasswordValid){
        echo "invalid password";
    }else{
        echo "valid inputs";
    }
    
}
*/
if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["name"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $userName = $_POST["username"];
    $password = $_POST["password"];

    $nameValidation = preg_match("/[a-z\s]{3,32}/", "$name");
    $emailValidation = preg_match("/[a-zA-Z0-9]+@{1}[a-z]+\.[a-z]{2,}/", "$email");
    $userNameValidation = preg_match("/[a-zA-Z0-9_]{3,32}/", "$userName");
    $passwordValidation = preg_match("/[a-zA-Z0-9\~\!\@\#\%\^\&\*\(\)\[\]\{\}\/\+\-\_\?\<\>$]+/", "$password");

    if (empty($name)) {
        echo "please enter your name";
    }elseif (!$nameValidation) {
        echo "invalid name";
    }elseif (empty($email)) {
        echo "please enter your email";
    }    
    elseif (!$emailValidation) {
        echo "invalid email";
    }elseif (empty($userName)) {
        echo "please enter your username";
    }elseif (!$userNameValidation) {
        echo "invalid username";
    }elseif (empty($password)) {
        echo "please enter your password";
    }elseif (!$passwordValidation) {
        echo "invalid password";
    }
    else {
        $newUser = ["name"=>$name,"username"=> $userName,"password"=> $password,"email"=> $email];
        $decoded = json_decode(file_get_contents("../data/usersInfo.json"),true) ;
        if (!empty($decoded) && in_array($newUser, $decoded)) {
            echo "you have already signup!";
            header("Location: login.php");
            exit;
        }else{
            $decoded [] = $newUser;
        }
        file_put_contents("../data/usersInfo.json", json_encode($decoded, JSON_PRETTY_PRINT));
        $_SESSION["$userName"] = "$password";
        $numberOfUser = count(json_decode(file_get_contents('../data/usersInfo.json'),true));
        echo "<script>swal('welcome $userName you are the $numberOfUser th user have ever 	registered')</script>";
        header( "refresh:3;url=home.php");
        exit;
    }

}
?>
