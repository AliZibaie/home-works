<?php 
session_start();
?>

<?php if (isset($_POST["submit"])) {
     session_destroy();
    header("Location: ../index.php");
}?>
<?php 
$decodedJson = json_decode(file_get_contents('../data/usersInfo.json'), true);
if (isset($_POST['remove_by_user'])) {
    
}
if (isset($_POST['remove_by_admin'])) {
   
}
if (isset($_POST['silent_by_admin'])) {
    

}







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <title>home page</title>
</head>
<body>
    <header>
        <form action="" method="post" class=" m-0 p-0 w-100 h-100">
            <div class="p-2 border d-flex justify-content-between align-items-start">
                <h1>Bolbol Chat</h1>
                <div class="d-flex">
                    <div class="profile bg-danger  rounded-5">asadsadsads</div>
                    <button type="submit" class="btn btn-success ms-3" name="submit" value="submit">Logout</button>
                </div>
            </div>
        </form>
    </header>
    <main class="p-4 d-flex">
        <div class="box w-50 border p-5 d-flex flex-column me-3" id="private-chat">
            <h3 class="text-danger">Public Chat</h1>
            <?php
        $content = file_get_contents("../data/message.json");
        $decodedJson = json_decode($content, true);
        foreach ($decodedJson as $key => $value) {
            $userName = $value['username'];
            $message = $value['message'];
            if (array_key_exists("$userName",$_SESSION)) {
                $is_read = $value["is_read"];
                echo"<div class='row d-flex flex-column'>
                <div class='left-public col-6'>
                <div class='user-message'>
                <div class='row d-flex g-0 align-items-center  flex-nowrap  w-50'>
                <h6 class='text-success '>$userName</h6>
                <iconify-icon icon='ion:person' class='col-1 pe-4 me-1 text-success ' width='26'></iconify-icon>";
                            if ($is_read) {
                                echo "<iconify-icon icon='teenyicons:eye-solid' flip='horizontal' class='col-1 pe-4 me-1 text-success '></iconify-icon>";
                            }
                            echo "<div>
                                <div class=' col-11 p-1 border d-flex justify-content-between'>
                                <div>$message</div>
                                <div class='dropdown'>
                                    <button class='btn  align-self-end w-25 p-0 ' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                    <iconify-icon icon='bi:three-dots-vertical'></iconify-icon>
                                    </button>
                                    <ul class='dropdown-menu'>
                                    <form method='post'>
                                        <li><a class='dropdown-item' href='#' name='edit_by_user'>edit</a></li>
                                        <li><a class='dropdown-item' href='#' name='remove_by_user'>remove</a></li>
                                    </form>
                                    </ul>
                                    </div>
                                </div>
                                <iconify-icon icon'ph:dots-three-outline-vertical-fill' rotate='90deg'></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div";
            }else{
                echo "<form method='post'><div class='row d-flex flex-column'>
                <div class='left-public col-6'>
                <div class='user-message'>
                <div class='row d-flex g-0 align-items-center flex-nowrap w-50'>
                            <h6 class=''>$userName</h6>
                            <iconify-icon icon='ion:person' class='col-1  pe-4 me-1' width='26'></iconify-icon>
                            <div class=' col-11 p-2  border d-flex justify-content-between ' id='$message'><div>$message</div>
                            <div>";
                            $decodedJson = json_decode(file_get_contents("../data/usersInfo.json"), true);
                            foreach ($decodedJson as $key => $value) {
                                // var_dump($value["is_admin"]);
                                if ( ($value["username"] == array_key_first($_SESSION)) && $value["is_admin"] ) {
                                    echo "<div class='dropdown'>
                                    <button class='btn  align-self-end w-25 p-0 ' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                    <iconify-icon icon='bi:three-dots-vertical'></iconify-icon>
                                    </button>
                                    <ul class='dropdown-menu'>
                                    <form method='post'>
                                        <li><a class='dropdown-item' href='#' name='silent_by_admin'>silent</a></li>
                                        <li><a class='dropdown-item' href='#' name='remove_by_admin'>remove</a></li>
                                    </form>
                                    </ul>
                                    </div>";
                                }
                            }
                            echo "</div>
                            </div>
                            </div>
                    </div>
                    </div>
                    </div> </form>";
                }
        } 
        ?>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="d-flex mt-4 align-items-center">
                    <input type="text" name="message" class="w-50 h-25 py-4" placeholder="write a message">
                        <label for="file">
                            <iconify-icon icon="mdi:file" width="46" height="46"></iconify-icon>
                        </input>
                    </label>
                    <input type="file" class="d-none" id="file" name="new-file">
                    <button type="submit" class="btn fs-1 "><iconify-icon class="text-primary" icon="carbon:send-filled" width="" height=""></iconify-icon></button>
                </div>
            </form>

        </div>
        <div class="box w-50 border p-5" id="private-chat"><h3 class="text-danger">Private Chat</h1></div>
    </main>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script  src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="../assets/js/jquery.js"></script>
</body>
</html>

<?php 
if (isset($_POST["message"]) && !empty($_POST["message"])) {
    $userMessage = $_POST["message"];
    $user = array_keys($_SESSION)[0];
    $newInfo = [
        "message"=> $userMessage,
        "username"=>"$user",
         "date"=>date("y-m-d H:i"),
         "is_read"=>false
        ];
    if (strlen($userMessage) > 100) {
        echo "more than 100 characters!";
        exit;
    }
    // move_uploaded_file(basename(''),"../data/users/$userName");
    $decodedJson = json_decode(file_get_contents("../data/message.json"),true);
    $decodedJson[] = $newInfo;
    file_put_contents("../data/message.json",json_encode($decodedJson, JSON_PRETTY_PRINT));
    // echo '<meta http-equiv="refresh" content="0">';
    unset($_POST["message"]);

}
var_dump($_FILES);
if (isset($_POST["new-file"])) {
    $fileName = $_FILES["new-file"]["name"];
    if ($_FILES["new-file"]["size"] > 1024 * 1024 * 2) {
        echo "limit size !";
         }else{
            move_uploaded_file($_FILES["new-file"]["tmp_name"], "../data/users/$userName/$fileName") ;
         }
   
}
$decodedJson = json_decode(file_get_contents("../data/message.json"),true);
for ($i=0; $i < count($decodedJson) - 1; $i++) { 
    if ($decodedJson[$i]["username"] != $decodedJson[$i+1]["username"] ) {
        $decodedJson[$i]["is_read"] = true;
    }
    elseif ($decodedJson[$i]["username"] == $decodedJson[$i+1]["username"] && !$decodedJson[$i+1]["is_read"]) {
        $decodedJson[$i]["is_read"] = false;
    }else{
        $decodedJson[$i]["is_read"] = true;
    }
}
file_put_contents("../data/message.json", json_encode($decodedJson,JSON_PRETTY_PRINT));

?>
<?php 
$decodedJson = json_decode(file_get_contents("../data/usersInfo.json"),true);
foreach ($decodedJson as $key => $value) {
    $userName = $value["username"];
    if (!is_dir("../data/users/$userName")) {
        mkdir("../data/users/$userName");
    }
}
$userName = array_key_first($_SESSION);
?>