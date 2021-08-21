<html>
    <head>
        <title>add_vehicle</title>
        <link rel="stylesheet" href="css/add_vehicle.css">
    </head>
    <body>
        <h1 id="title">Pre-Registration</h1>
        <form method="POST">
            <div class="cover">
                <div class="vehicle_type">
                    <p>Vehicle type:<br>
                    <input type="radio" name="vehicle" value="Bike" autocomplete="off">Bike <br>
                    <input type="radio" name="vehicle" value="Car" autocomplete="off">Car <br>
                    <input type="radio" name="vehicle" value="Truck" autocomplete="off">Truck <br>
                    <input type="radio" name="vehicle" value="Bus" autocomplete="off">Bus <br>
                    <input type="radio" name="vehicle" value="bicycle" autocomplete="off">Bicycle <br>
                    <input type="radio" name="vehicle" value="other" autocomplete="off">Other <br>
                    </p>
                </div>
                <div class="name">
                    <p>Owner name:
                        <input type="text" name="ownername" class="hola" placeholder="enter owner name" autocomplete="off" required>
                    </p>
                </div>
                <div class="regno">
                    <p>Registration number:
                        <input type="text" name="regnum" class="hola" placeholder="enter vehicle number" autocomplete="off" required>
                    </p>
                </div>
                <div class="company">
                    <p>Company:
                        <input type="text" name="company" class="hola" placeholder="company name" autocomplete="off" required>
                    </p>
                </div>
                <div class="date">
                    <p>Date:
                        <input type="date" name="date" class="hola" autocomplete="off" required>
                    </p>
                </div>
                <p><label id="note">Note:</label> You need to pay the parking money after you reached live location.</p>
                <input type="submit" class="click" name="register" value="register">
                <p>if you registered, click the 'Token' button to see your token Number <a href="data.php" target="_blank" id="token"> Token</a></p>
            </div>
        </form>

        <?php
            include('connection.php');
            if (isset($_POST['register'])){
                $ownername = mysqli_real_escape_string($database,$_POST['ownername']);
                $vehicle_type = mysqli_real_escape_string($database,$_POST['vehicle']);
                $regno = mysqli_real_escape_string($database,$_POST['regnum']);
                $company = mysqli_real_escape_string($database,$_POST['company']);
                $date = mysqli_real_escape_string($database,$_POST['date']);
                $sql_query = "INSERT INTO addvehicle(Owner_name,Vehicle_type,register_number,company,parking_date) VALUES('$ownername','$vehicle_type','$regno','$company','$date')";
                $sql_connect = mysqli_query($database,$sql_query);
            }
        ?>
    </body>
</html>
