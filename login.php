<?php
        include('connection.php');
        $mail = $_POST['mail'];
        $password = $_POST['password'];

            //to prevent from mysqli injection  
            $mail = stripcslashes($mail); 
            $password = stripcslashes($password);
            $mail = mysqli_real_escape_string($database, $mail);  
            $password = mysqli_real_escape_string($database, $password);
            $sql = "select * from registration where Email = '$mail' and password = '$password'";  
            $result = mysqli_query($database, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result); 
              
            if($count == 1){
                $sql_query = "INSERT INTO login(email,password) VALUES('$mail','$password')";
                $connect = mysqli_query($database,$sql_query);
                header("Location:mainpage.html", true, 301);
            }  
            else{  
                echo "<h1> Login failed. Invalid mail or password.</h1>";  
            }     
    ?>
    

