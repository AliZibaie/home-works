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
    <title>Virus DNA</title>
</head>
<body>
    <form action="" method="POST" target="_blank">
        <div class="container">
            <input type="text" name="dna" required pattern="\s*\w{2,}\s+\w{2,}\s*" placeholder="your-dna virus-dna">
            <input type="submit" value="Send">
        </div>
    </form>
</body>
</html>
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dna = $_POST["dna"];
  }
$dna = strtolower($dna);
// $dna = strtoupper($dna);
$dna = trim($dna);
echo $dna."<br>";
preg_match_all("/\w{2,}/", $dna, $dnaArr);
echo "<pre>";
var_dump($dnaArr);
echo "</pre>";
echo "<br>";
if (str_contains($dnaArr[0][0],strrev($dnaArr[0][1])) && str_contains($dnaArr[0][0],$dnaArr[0][1])) {
    echo "Shoma Bimar Nistid";
}
elseif(str_contains($dnaArr[0][0],strrev($dnaArr[0][1]))) {
    echo "Shoma Bimar Nemishavid";
}elseif(str_contains($dnaArr[0][0],$dnaArr[0][1])) {
    echo "Shoma Salem Hastid";
}else{
    echo "Shoma Bimar Nistid";
}




?>