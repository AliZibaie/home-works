<?php 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $address = $_POST["address"];
  $zipCode = $_POST["zip-code"];
  $country = $_POST["country"];
  $gender = $_POST["gender"];
  $preferences = $_POST["prefrences"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $verify_password = $_POST["verify-password"];
}



/*
echo "<h2>form validation : </h2>";
echo "name : ".$name."<br>"."<br>";f
echo "address : ".$address."<br>"."<br>";
echo "zip code : ".$zipCode."<br>";
echo "gender : ".$gender."<br>";
echo "country : ".$country."<br>";
echo "preferences : ".$preferences."<br>";
echo "phone : ".$phone."<br>";
echo "email : ".$email."<br>";
echo "password : ".$password."<br>";
echo "varify-password : ".$verify_password."<br>";
*/



// filter_var($email, FILTER_VALIDATE_EMAIL);

if (preg_match("/[a-zA-Z]{6,}/", $name) && preg_match("/\d{10}/", $zipCode) && preg_match("/(09)([0-9]{2})(( |-)?[0-9]{3})(( |-)?[0-9]{4})/", $phone) && preg_match("/^[a-zA-Z0-9-$%]+@{1}[a-z]+\.[a-z]{2,}$/", $email) && preg_match("/[a-zA-Z]{6,8}/", $password) && preg_match("/[a-zA-Z]{6,8}/", $verify_password) && $password == $verify_password) {
  require_once "home.php";
} else {
  echo("page not found");
}










?>