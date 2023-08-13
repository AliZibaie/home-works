<?php 
require_once "php-functions/asc.php";
require_once "php-functions/desc.php";
require_once "php-functions/name2.php";
require_once "php-functions/school.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>sort data</title>
</head>
<body>
    <div class="sort">
        <h1>Student Data</h1>
        <form action="" method="POST">
            <select name="sort" id="sort">
                <option value="" selected disabled>select how to show data...</option>
                <option value="desc">sort by age(desc)</option>
                <option value="asc">sort by age(asc)</option>
                <option value="name">sort by alphabetical name</option>
                <option value="school">sort by alphabetical school name</option>
            </select>
            <input type="submit" value="Sort" class="btn">
        </form>
    </div>
    <div class="header">
        <p>num</p>
        <p>Name</p>
        <p>Age</p>
        <p>School</p>
    </div>
    <div class="container">
        <?php 
        if (isset($_POST) && isset($_POST["sort"])) {
            $choice  = $_POST["sort"];
            if ($choice == "desc") {
                $arr = descSort($decodedJson);
                foreach ($arr as $key => $value) {
                    $name = $value["name"];
                    $age = $value["age"];
                    $school = $value["school"];
                    ++$key;
                    echo "
                    <div>
                    <p>$key</p>
                    <p>$name</p>
                    <p>$age</p>
                    <p>$school</p>
                    </div>";
                }
            }elseif ($choice == "school") {
                $arr = schoolSort($decodedJson);
                foreach ($arr as $key => $value) {
                    $name = $value["name"];
                    $age = $value["age"];
                    $school = $value["school"];
                    ++$key;
                    echo "
                    <div>
                    <p>$key</p>
                    <p>$name</p>
                    <p>$age</p>
                    <p>$school</p>
                    </div>";
                }
            }elseif ($choice == "name") {
                $arr = nameSort($decodedJson);
                foreach ($arr as $key => $value) {
                    $name = $value["name"];
                    $age = $value["age"];
                    $school = $value["school"];
                    ++$key;
                    echo "
                    <div>
                    <p>$key</p>
                    <p>$name</p>
                    <p>$age</p>
                    <p>$school</p>
                    </div>";
                }
            }else{
                $arr = ascSort($decodedJson);
                foreach ($arr as $key => $value) {
                    $name = $value["name"];
                    $age = $value["age"];
                    $school = $value["school"];
                    ++$key;
                    echo "
                    <div>
                    <p>$key</p>
                    <p>$name</p>
                    <p>$age</p>
                    <p>$school</p>
                    </div>";
                }
            }
        }
        ?>
    </div>
</body>
</html>