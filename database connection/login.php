<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/6dbd08ced9.js" crossorigin="anonymous"></script>
    <style>
        body{
            background-image: url(image/retaurant1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login forms">
            <header>LOGIN</header>
            <form action="#" method="POST">
                <!--email-->
                <div class="field email-field">
                    <div class="input-field">
                        <input type="email" placeholder="Email" name="email" class="email">
                    </div>
                    <span class="error email-error">
                         <i class="fa-solid fa-circle-exclamation error-icon"></i>
                         <p class="error-text">please enter a valid email</p>
                    </span>
                </div>
                
                <!--password-->
                <div class="field create-password">
                    <div class="input-field">
                        <input type="password" placeholder="Password" name="pass" class="password">
                        <i class="fa-regular fa-eye fa-icon fa-eye-slash" id="show-password"></i>
                    </div>
                    <span class="error password-error">
                         <i class="fa-solid fa-circle-exclamation error-icon"></i>
                         <p class="error-text">please enter a valid password</p>
                    </span>
                </div>

                <!--remember me  &   forget password-->
                <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="logCheck">
                        <label for="logCheck" class="text">Remember me</label>
                    </div>

                    <a href="#" class="text">Forgot password</a>
                </div>

                <!--button field-->
                <div class="input-field button">
                    <input type="submit" value="LOGIN" name="log">
                </div>
            </form>
              
            <!--do not have account-->
            <div class="form-link">
                <p>Don't have an account? <a href="signup.html" class="link login-link">Sign Up</a></p> 
             </div>
        </div>
    </div>
    <script src="script/login.js"></script>
</body>
</html>

<?php 
   if($_POST['log'])
   {
       $email    = $_POST['email'];
       $password = $_POST['pass'];

      $query = "INSERT INTO login VALUES('$email','$pass')";
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