<?php
spl_autoload_register("li");

function li($n){
    require_once "Cars/$n.php";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Game</title>
  <style>
      h1 {
          text-align: center;
      }

      #moves {
          text-align: center;
          margin: 20px;
      }

      button {
          padding: 10px 20px;
          margin: 5px;
      }
  </style>
</head>

<body>
  <h1>Car Game</h1>

  <div id="moves">
    <button id="up">Up</button>
    <button id="down">Down</button>
    <button id="left">Left</button>
    <button id="right">Right</button>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>$(document).ready(function() {
          // تابعی برای ارسال درخواست به سمت سرور و پردازش پاسخ
          function moveCar(moves) {
              $.ajax({
                  url: 'index.php',
                  method: 'POST',
                  data: {
                      carType: 'HighAltitude', // نوع اتومبیل (HighAltitude یا LowAltitude)
                      fuel: 100, // سوخت اتومبیل
                      moves: moves // آرایه‌ای از حرکت‌ها (up, down, left, right)
                  },
                  success: function(response) {
                      console.log(response); // نمایش پاسخ در کنسول
                      // ادامه کدهای دیگر پس از دریافت پاسخ
                  },
                  error: function() {
                      console.log('خطا در برقراری ارتباط با سرور.');
                  }
              });
          }

          // مثالی از فراخوانی تابع moveCar با حرکت‌های مختلف
          var moves1 = ['up', 'up', 'left', 'right'];
          var moves2 = ['down', 'right', 'up', 'left'];

          moveCar(moves1);
          moveCar(moves2);
      });
  </script>
</body>

</html>


<?php
// ایجاد اتومبیل
//$carType = $_POST['carType']; // نوع اتومبیل (HighAltitude یا LowAltitude)
//$fuel = $_POST['fuel']; // سوخت اتومبیل
$currentLocation = [0, 0]; // مکان کنونی
$destination = [10, 10]; // مقصد

//if ($carType == 'HighAltitude') {
//    $car = new HighAltitudeCar($fuel, $currentLocation, $destination);
//} else {
//    $car = new LowAltitudeCar($fuel, $currentLocation, $destination);
//}

// انجام حرکت‌ها توسط کاربر
//$moves = $_POST['moves']; // آرایه‌ای از حرکت‌ها (up, down, left, right)

//foreach ($moves as $move) {
//    if ($move == 'up') {
//        $car->moveUp();
//    } elseif ($move == 'down') {
//        $car->moveDown();
//    } elseif ($move == 'left') {
//        $car->moveLeft();
//    } elseif ($move == 'right') {
//        $car->moveRight();
//    }
//}
