<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: #55B4B0;
        }
        form .container{
            width: 100%;
            margin: auto;
            margin-top: 200px;
            text-align: center;
        }
        form .container input{
            font-size: 30px;
            width: 300px;
            height: 50px;
            border-radius: 25px;
            padding: 15px;
            text-align: center;
        }
        form .container input[type="submit"]{
            background-color: #34568B;
            color: #fff;
            width: 100px;
            height: 50px;
            border-radius: 25px;
            padding: 10px;
            display: block;
            margin: auto;
            margin-top: 30px;
        }
    </style>
    <title>واج آرایی</title>
</head>
<body>
    <form action="" method="POST">
        <div class="container">
            <input type="text" name="text" required placeholder="Enter your text">
            <input type="submit" value="ثبت">
        </div>
    </form>
</body>
</html>
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
}
// $text = strtoupper($text);
$text = strtolower($text);
echo $text."<br>";
preg_match_all("/\w{1}/", $text,$textArray);
foreach($textArray[0] as $letter) {
    foreach ($textArray[0] as $letter2) {
        if ($letter == $letter2) {
            array_shift($textArray[0]);

        }
        echo "<pre>";
        var_dump($textArray);
        echo "</pre>";
    }
}



?>