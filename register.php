<html>
    <head>
        <title>register</title>
        <link rel="stylesheet" href="css/register.css">
    </head>
    <body>
        <div class="tesla">
        </div>
        <form method="POST">
        <p id="ins1">Sign up</p>
        <p id="ins2">Please fill the form to create an account:</p>
            <div class="tes">
                <p>
                    <input type="text" name="username" placeholder="Enter the name" class="hola" autocomplete="off" required>
                </p>
                <p>
                    <input type="email" name="mail" placeholder="Enter the email" class="hola" autocomplete="off" required>
                </p>
                <p>
                    <input type="text" name="phone" placeholder="Mobile number" class="hola" autocomplete="off" required>
                </p>
                <p>
                    <input type="password" name="password" placeholder="Enter the password" class="hola" autocomplete="off" required>
                </p>
                <p>
                    <input type="password" name="repassword" placeholder="retype password" class="hola" autocomplete="off" required>
                </p>
                <div class="ef">
                    <input type="submit" name="submit" id="click" value="register">
                </div>
                <p id="log">
                    already have an account? <a href="login.html">login</a>
                </p>
            </div>
        </form>
        <?php
            include('connection.php');
            if ($database){
                if(isset($_POST['submit'])){
                    $username = mysqli_real_escape_string($database,$_POST['username']);
                    $email = mysqli_real_escape_string($database,$_POST['mail']);
                    $number = mysqli_real_escape_string($database,$_POST['phone']);
                    $password = mysqli_real_escape_string($database,$_POST['password']);
                    $repassword = mysqli_real_escape_string($database,$_POST['repassword']);
                    if ($password === $repassword){
                        $sql_query = "INSERT INTO registration(Name,Email,phone_number,password,retype_password) VALUES('$username','$email','$number','$password','$repassword')";
                        $connect = mysqli_query($database,$sql_query);
                        header("Location:mainpage.html", true, 301);
                    }
                    else{
                        echo '<script type="text/javascript"> window.alert("password not matched.Enter the details again") </script>';
                    }
                }
            }
        ?>
    </body>
</html>
