<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form Validation 2</title>
</head>
<body>
    <form action="main.php" method="POST" autocomplete="on" target="_blank">
        <div class="container">
            <section>
                <div class="name">
                    <label for="name">نام<span>*</span></label>
                    <input type="text" id="name" name="name" required pattern="^[آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ]{2,}$" value="<?= @$_POST["name"] ?>">
                </div>
                <div class="last-name" >
                    <label for="name">نام خانوادگی<span>*</span></label>
                    <input type="text" name="last-name" id="last-name" required pattern="^[آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ]{2,}$">
                </div>
                <div class="father-name">
                    <label for="father-name">نام پدر<span>*</span></label>
                    <input type="text" name="father-name" id="father-name" required pattern="^[آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ]{2,}$">
                </div>
            </section>
            <section class="section2">
                <div class="id-number">
                    <label for="id-number">شماره شناسنامه<span>*</span></label>
                    <input type="text" id="id-number" name="id-number" required pattern="[1-9]{4}|(^0\d{9})|[1-9]{8}|(^(\+98)\d{10})">
                </div>
                <div class="national-number">
                    <label for="national-number">شماره ملی<span>*</span></label>
                    <input type="text" name="national-number" id="national-number" required pattern="[1-9]{4}|(^0\d{9})|[1-9]{8}|(^(\+98)\d{10})">
                </div>
            </section>
            <section class="section3">
                <div class="column">
                    <label >وضعیت تحصیلی<span>*</span><p>دانشجو یا دانش آموخته دوره</p></label>
                    <div>
                        <label for="1">دانشجو کارشناسی</label>
                        <input type="radio" id="1" required name="education">
                    </div>
                    <div>
                        <label for="2">دانش آموخته کارشناسی</label>
                        <input type="radio" id="2" required name="education">
                    </div>
                    <div>
                        <label for="3">دانشجو کارشناسی ارشد</label>
                        <input type="radio" id="3" required name="education">
                    </div>
                    <div>
                        <label for="4">دانش آموخته کارشناسی ارشد</label>
                        <input type="radio" id="4" required name="education">
                    </div>
                    <div>
                        <label for="5">دانشجو دکترا</label>
                        <input type="radio" id="5" required name="education">
                    </div>
                    <div>
                        <label for="6">دانش آموخته دکترا</label>
                        <input type="radio" id="6" required name="education">
                    </div>
                </div>
                <div class="column">
                    <label >شغل<span>*</span></label>
                    <div>
                        <label for="1">دانشجو </label>
                        <input type="radio" id="1" required name="job">
                    </div>
                    <div>
                        <label for="2">دبیر</label>
                        <input type="radio" id="2" required name="job">
                    </div>
                    <div>
                        <label for="3">استاد</label>
                        <input type="radio" id="3" required name="job">
                    </div>
                    <div>
                        <label for="4">شاغل بخش دولتی </label>
                        <input type="radio" id="4" required name="job">
                    </div>
                    <div>
                        <label for="5">شاغل بخش خصوصی</label>
                        <input type="radio" id="5" required name="job">
                    </div>
                    <div>
                        <label for="6">باز نشسته</label>
                        <input type="radio" id="6" required name="job">
                    </div>
                </div>
            </section>
            <section class="section4">
                <div class="residence-address">
                    <label for="residence-address">نشانی محل سکونت<span>*</span></label>
                    <input type="text" id="residence-address" required pattern="^[آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ]{2,}$">
                </div>
                <div class="workplace-address">
                    <label for="workplace-address">نشانی محل کار</label>
                    <input type="text" name="workplace-address" id="workplace-address">
                </div>
            </section>
            <section class="section5">
                <div class="phone">
                    <label for="phone">تلفن همراه<span>*</span></label>
                    <input type="text" name="phone" id="phone" required pattern="^[(\+98)(09)]+[- ]?\d{2,3}[- ]?\d{3}[- ]?\d{4}$">
                </div>
                <div class="landline-phone">
                    <label for="landline-phone">تلفن ثابت</label>
                    <input type="text" name="landline-phone" id="landline-phone" required pattern="\d{11}">
                </div>
            </section>
            <section class="section6">
                <div class="email">
                    <label for="email">نشانی پست الکترونیکی<span>*</span></label>
                    <input type="text" name="email" id="email" required pattern="[a-zA-Z0-9]+@{1}[a-z]+\.+[a-z]{2,}">
                </div>
            </section>
            <section class="section7">
                <div class="security-code">
                    <label for="security-code">کد امنیتی <span class="code">jeci9i</span></label>
                    <input type="text" name="security-code" id="security-code" >
                </div>
            </section>
            <input type="submit" value="ثبت فرم">
        </div>
    </form>
    <div style="margin-top: 100px;">

    </div>
</body>
</html>