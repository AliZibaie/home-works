<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $last_name = $_POST["last-name"];
    $father_name = $_POST["father-name"];
    $id_number = $_POST["id-number"];
    $national_number = $_POST["national-number"];
    $education = $_POST["education"];
    $job = $_POST["job"];
    $workplace_address = $_POST["workplace-address"];
    $phone = $_POST["phone"];
    $landline_phone = $_POST["landline-phone"];
    $email = $_POST["email"];
    $security_code = $_POST["security-code"];
  }
  if ($security_code === "jeci9i") {
    echo "ورود موفقیت آمیز";
  }else{
    echo "کد امنیتی اشتباه است !";
  }






?>