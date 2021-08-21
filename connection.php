<?php      
        $database = new mysqli("localhost","root","", "web technology");
        if(mysqli_connect_errno()) {
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }
?>