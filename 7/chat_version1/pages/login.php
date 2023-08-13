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
    <title>Login</title>
</head>
<body>
    <form action="" method="post" class="position-relative" id="form">
        <div class="container w-25 mx-auto mt-5 py-3 d-flex flex-column align-items-center flex-wrap gap-3 border-5">
            <h1 >login</h1>
            <div class="form-floating mb-3 w-100 ">
              <input type="text " class="form-control" id="username" name="username" required>
              <label for="username " class="">username</label>
              <!-- <div class="valid-tooltip position-absolute" style="left:-7rem">Good memory!</div> -->
              <!-- <div class="invalid-tooltip position-absolute" style="left:-7rem">Unique and valid username.</div> -->
              </div>
              <div class="form-floating mb-3 w-100">
                <p class="invalid-password"></p>
                <input type="password" class="form-control" id="userpassword" name="password" required>
                <label for="userpassword" class="">Password</label>
                <!-- <div class="valid-tooltip position-absolute" style="left:-7rem">Good memory!</div> -->
              <!-- <div class="invalid-tooltip position-absolute" style="left:-7rem">Invalid Password</div> -->
                <iconify-icon icon="mdi:show" class="position-absolute show-password" style="right: 10%;bottom: 28%;"></iconify-icon>
                <iconify-icon icon="mdi:hide" class="position-absolute hide-password" style="right: 10%;bottom: 28%;display:none;"></iconify-icon>
              </div>
              <div class="row w-100 d-flex  justify-content-between">
              <div id="liveAlertPlaceholder"></div>
                <a href="#" class="w-50 text-start text-decoration-none text-danger" id="liveAlertBtn">FORGOT PASSWORD?</a>
                <a href="signup.php" class="w-50 text-end text-decoration-none text-danger">Signup</a>
            </div>
              <button type="submit" class="btn btn-success align-self-start mt-2 w-50 d-flex justify-content-center align-items-baseline" id="submit">
                <span>Login</span>
              <span class="spinner-border spinner-border-sm d ms-3" role="status" aria-hidden="true" style="display:none" id="spinner"></span>
                </div>
            </button>
        </div>
    </form>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script>
          const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
const appendAlert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    appendAlert('new password is sent to your email', 'info')
  })
}
        </script>

<script src="../assets/js/login.js"></script>
</body>
</html>
<?php 

if (isset($_POST["username"]) && isset($_POST["password"])){
  $userName = $_POST["username"];
  $password = $_POST["password"];
   $_SESSION["$userName"] = "$password";
  $decoded = json_decode(file_get_contents("../data/usersInfo.json"),true) ;
  if (!empty($decoded)) {
    foreach ($decoded as $key => $user) {
      if ($userName == $user["username"] && $password == $user["password"]) {
        echo "<script>swal('welcome $userName')</script>";
        // header("Location: home.php?user=$userName" );
        // $_SESSION["userName"] ??  $userName;
        header( "refresh:3;url=home.php");
        exit();
    }elseif($userName == $user["username"] && $password != $user["password"]){
}
  }
  if ($userName != $user["username"]) {
  }
  }
}


?>