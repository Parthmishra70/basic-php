

<?php
          include '_conn.php' ; 

          session_start();

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST["username"];
                $password = $_POST["password"];
            
                // Check if the username already exists
                $sql = "SELECT * FROM user WHERE username='$username'";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
            
                if ($num == 1) {
                    echo "You are already signed in here";
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    header("Location: index.php");
                    exit();
                } else {
                    echo "You haven't account yet";
                    header("Location: signup.php");
                }
            } 
                    
                    ?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="signupdiv">
        <img src="image/signuplogo.svg" alt="">
        <div class="wrp">
            <h1>Log in to Spotify</h1>
        </div>
    </div>

    <div class="signupform">
      
                <div class="other">
                    <button>Sign up with Google</button>
                    <button>Sign up with Facebook</button>
                    <button>Sign up with Apple</button>
                    <button>Continue with Phone number</button>

                </div>
                <form action="login.php" method="post">
                    <label for="email">Email address</label>
                    <input type="text" id="username" name="username">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    <a href="">Use phone number instead.</a>
                Remeber me
                    <input type="radio" id="radio">
                    <button type="submit">Next</button>
                </form>
        
                    <span class="line">or</span>
        
            </div>


            <footer>
                <a href=""> Already have an account? Log in here.</a>
                <span>This site is protected by reCAPTCHA and the Google
                    Privacy Policy and Terms of Service apply.</span>

            </footer>
</body>

</html>