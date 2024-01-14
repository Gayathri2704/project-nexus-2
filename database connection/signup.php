<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/6dbd08ced9.js" crossorigin="anonymous"></script>
    <style>
        body{
            background-image: url(image/retaurant2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login forms">
            <header>SIGNUP</header>
            <form action="#" method="POST">

                <!--name-->
                <div class="field text-field">
                    <div class="input-field">
                        <input type="text" placeholder="Name" name="uname" class="username">
                    </div>
                    <span class="error name-error">
                         <i class="fa-solid fa-circle-exclamation error-icon"></i>
                         <p class="error-text">please enter a valid name</p>
                    </span>
                </div>

                <!--email-->
                <div class="field email-field">
                    <div class="input-field">
                        <input type="email" placeholder="Email" name="email" class="mail">
                    </div>
                    <span class="error email-error">
                         <i class="fa-solid fa-circle-exclamation error-icon"></i>
                         <p class="error-text">please enter a valid email</p>
                    </span>
                </div>
                
                <!--password-->
                <div class="field create-password">
                    <div class="input-field">
                        <input type="password" placeholder="Password" name="pwd" class="pass">
                        <i class="fa-regular fa-eye fa-icon fa-eye-slash" id="show-password"></i>
                    </div>
                    <span class="error password-error">
                         <i class="fa-solid fa-circle-exclamation error-icon"></i>
                         <p class="error-text">please enter a valid password</p>
                    </span>
                </div>


                <!--confirm password-->
                <div class="field confirm-password">
                    <div class="input-field">
                        <input type="password" placeholder="Confirm Password" name="cpwd" class="cpass">
                        <i class="fa-regular fa-eye fa-icon fa-eye-slash" id="show-password"></i>
                    </div>
                    <span class="error password-error">
                         <i class="fa-solid fa-circle-exclamation error-icon"></i>
                         <p class="error-text">password does not match</p>
                    </span>
                </div>

                <!--  terms and conditions  -->
                    <div class="content">
                        <input type="checkbox" id="logCheck">
                        <label for="logCheck" class="text item">Agree to terms & conditions</label>
                    </div>

                <!--button field-->
                <div class="input-field button">
                    <input type="submit" value="SIGN UP" name="sign" class="form-submit">
                </div>
            </form>
              
            <!--already have an account-->
            <div class="form-link">
                <p>Already have an account? <a href="login.html" class="link login-link">Sign in</a></p> 
             </div>
        </div>
    </div>
    <script src="script/signup.js"></script>
</body>
</html>

<?php 
   if($_POST['sign'])
   {
       $uname      = $_POST['uname'];
       $email      = $_POST['email'];
       $pwd        = $_POST['pwd'];
       $cpwd       = $_POST['cpwd'];

      $query = "INSERT INTO signup VALUES('$uname','$email','$pwd','$cpwd')";
      $data = mysqli_query($conn,$query);

      if($data)
      {
        echo "data inserted into database";
      }
      else
      {
        echo "connection failed";
      }
   }
?>