<?php
    include("connection.php");
    if($database){
        if(isset($_POST["submit"])){
            $mail = mysqli_real_escape_string($database, $_POST['mailid']);
            $fb1 = mysqli_real_escape_string($database, $_POST['fb1']);
            $fb2 = mysqli_real_escape_string($database, $_POST['fb2']);
            $fb3 = mysqli_real_escape_string($database, $_POST['fb3']);
            $comment = mysqli_real_escape_string($database, $_POST['comment']);
            $sql = "SELECT Email from registration where Email = '$mail'";
            $result = mysqli_query($database, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);
            if($count == 1){  
                $sql_query = "INSERT INTO feedback(email, appearance, accessibility, user_experience, comment) VALUES('$mail','$fb1','$fb2','$fb3','$comment')";
                $connect = mysqli_query($database,$sql_query);
                echo "<script>alert('Your feedback has been successfully submitted')</script>"; 

            }
            else{  
                echo "<script>alert('Invalid mail')</script>";
            }
            
        }
    }
?>
<html>
    <head>
        <title>feedback and reviews</title>
        <link rel="stylesheet" href="css/feedback.css">
    </head>
    <body>
        <h1 id="title"><b>Feedback and review</b></h1>
        <img src="img/pic4.png" id="img1">
        <form method="POST" id="feedform">
            <div class="details">
                <div class="mail">
                    <b>login mailID:</b> <input id="mail" type="email" name="mailid" placeholder="enter MailId" autocomplete="off" required>
                </div>
                <div class="feedbacks">
                    <div class="performance">
                        <p><b>Performance:</b>
                            <input type="radio" class="fb1" name = "fb1" value="poor" autocomplete="off">poor
                            <input type="radio" class="fb1" name = "fb1" value="average" autocomplete="off">average
                            <input type="radio" class="fb1" name = "fb1" value="good" autocomplete="off">good
                            <input type="radio" class="fb1" name = "fb1" value="excellent" autocomplete="off">excellent
                        </p>
                    </div>
                    <p><b>Accessibility:</b>
                        <input type="radio" name = "fb2" value="poor" autocomplete="off">poor
                        <input type="radio" name = "fb2" value="average" autocomplete="off">average
                        <input type="radio" name = "fb2" value="good" autocomplete="off">good
                        <input type="radio" name = "fb2" value="excellent" autocomplete="off">excellent
                    </p>
                    <p><b>User-experience:</b>
                        <input type="radio" name = "fb3" value="poor" autocomplete="off">poor
                        <input type="radio" name = "fb3" value="average" autocomplete="off">average
                        <input type="radio" name = "fb3" value="good" autocomplete="off">good
                        <input type="radio" name = "fb3" value="excellent" autocomplete="off">excellent
                    </p>
                </div>
                <div class="review">
                    <p><b>Comment:<b></p>
                    <textarea rows="4" cols="70" id="cmt" name="comment" form="feedform" autocomplete="off"></textarea>
                </div>
                <br>
                <input class="btn" type="submit" name="submit" value="submit">
            </div>
        </form>
        
    </body>
</html>