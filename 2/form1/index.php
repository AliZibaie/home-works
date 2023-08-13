<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form Validation 1</title>
</head>
<body>
    <form action="main.php" method="POST" autocomplete="on" target="_blank">
        <div class="container">
            <div class="name">
                <label for="name">Name<span>*</span></label>
                <input type="text" id="name"  required pattern="[a-zA-Z]{6,}" name="name" value="<?= @$_POST["name"]?>"> 
            </div>
            <div class="address">
                <label for="address">Address</label>
                <input type="text" id="address" name="address">
            </div>
            <div class="zip-code">
                <label for="zip-code">Zip Code<span>*</span></label>
                <input type="text" id="zip-code" required pattern="\d{10}" name="zip-code">
            </div>
            <div class="country">
                <label for="country">Country <span>*</span></label>
                <select name="country" id="country" required>
                    <option value="None">Please select...</option>
                    <option value="Iran">Iran</option>
                    <option value="UK">UK</option>
                    <option value="Germany">Germany</option>
                    <option value="France">France</option>
                </select>
            </div>
            <div class="gender">
                <label for="gender">Gender<span>*</span></label>
                <div class="radio">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" required id="male" value="male">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" required id="female" value="female">
                </div>
            </div>
            <div class="prefrences">
                <label for="prefrences">Prefrences<span>*</span></label>
                <div class="checkbox">
                    <label for="red">Red</label>
                    <input type="checkbox" name="prefrences" value="Red" id="red">
                    <label for="green">Green</label>
                    <input type="checkbox" name="prefrences" value="Green" id="green">
                    <label for="blue">Blue</label>
                    <input type="checkbox" name="prefrences" value="Blue" id="blue">
                </div>
            </div>
            <div class="phone">
                <label for="phone">Phone<span>*</span></label>
                <input type="text" id="phone" name="phone" required pattern="(09)([0-9]{2})(( |-)?[0-9]{3})(( |-)?[0-9]{4})">
            </div>
            <div class="email">
                <label for="email">Email<span>*</span></label>
                <input type="email" name="email" id="email" required pattern="^[a-zA-Z0-9-$%]+@{1}[a-z]+\.[a-z]{2,}$">
            </div>
            <div class="password">
                <label for="password">password (6-8 characters)<span>*</span></label>
                <input type="text" name="password" id="password" required pattern="[a-zA-Z]{6,8}">
            </div>
            <div class="verify-password">
                <label for="verify-password">Verify password<span>*</span></label>
                <input type="text" name="verify-password" id="verify-password" required pattern="[a-zA-Z]{6,8}">
            </div>
            <div class="buttons">
                <input type="submit" value="SEND">
                <input type="reset" value="CLEAR">
            </div>
        </div>
    </form>
</body>
</html>