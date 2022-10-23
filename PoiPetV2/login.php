<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoiPet - SignUp</title>
        <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="loginstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>

    <body>
        <div  class="main">
            <input type="checkbox" id="chk" aria-hidden="true">
            <a href="index.php"><h1 style="text-align: center; margin-bottom: -40px; cursor: pointer;"><img src="images/logo.png" style="height: 30px; width: 60px;"></h1></a>

            <div class="signup">
                <form method="POST" action="insert_signup.php">
                    <label for="chk" aria-hidden="true">Sign up</label>
                    <input type="text" name="fname" placeholder="First Name" required="">
                    <input type="text" name="lname" placeholder="Last Name" required="">
                    <input placeholder="Birth Date" name="bdate" class="textbox-n" type="text" onfocus="(this.type='date')" id="date">
                    <input type="text" name="address" placeholder="Address" required="">
                    <input type="text" name="tel" placeholder="Phone Number" required="">
                    <input type="email" name="suemail" placeholder="Email" required="">
                    <input type="Password" name="supswd" placeholder="Password" required="">
                    <button name="signup" value="signup">Sign up</button>
                </form>
            </div>

            <div class="login">
                <form>
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="Password" name="pswd" placeholder="Password" required="">
                    <button>Login</button>
                </form>
            </div>
        </div>
    </body>
    
</body>
</html>