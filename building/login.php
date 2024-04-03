<?php
$conn = mysqli_connect("localhost", "root", "", "building_management");
session_start();
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "select * from login where username='$username' and password='$password' ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $data = $conn->query($query);
    $user = $data->fetch_assoc();
    $_SESSION['id'] = $user['id']; // Corrected variable name
    $_SESSION['name'] = $user['name'];
    
    if ($row['role'] == "admin") { 
        header('location: dashboard.php');
    }
    elseif ($row['role'] == "manager") {
        header('location: manager.php');
    }
    elseif ($row['role'] == "user") {
        header('location: user.php');
    }
    elseif ($row['role'] == "staff") {
        header('location: staff.php');
    }
    else {
        // Invalid username or password
        header("location: login.php");
        echo "Wrong password and username";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="assets/img/png-clipart-building-logo-building-building-text-thumbnail-removebg-preview.png" type="image/png">

    <title>SmartBuilding</title>
    <style>
        #submit {
            border: 5px solid;
            height: 50%;
            width: 18%;
            font-size: 20px;
            background-color: rgba(60, 80, 150, 1);
            color: white;
        }

        #ground {
            padding-bottom: 100px;
        }
    </style>
</head>
<body style="background:url(images/blue-sky-sunshine-building.jpg); bacKground-repeat: norepeat; background-size: cover;">
    <p id="ground">
        <center style="margin-top: 200px;">
        
            <!-- <img src="sec.png"  width="500" height="250"> -->
            <form action="" method="post" style="      border-radius: 5px;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 36px 24px;
    width: 351px;
    height: 197px;
    margin-top: -175px;
    margin-left: 160px;">
                <h2 style="color:white;margin-top: -12px;">LOGIN</h2>
                <div id="page" style="color:white;    margin-top: 43px;">
                    Username: <input type="text" name="username"><br><br>
                    Password: <input type="password" name="password" style="    margin-left: 4px;"><br><br>
                    <input type="submit" name="submit" value="Submit" style="      height: 24px;
    width: 63px;
    margin-top: 15px;
    margin-left: 56px;
    background: url(images/pexels-francesco-ungaro-281260.jpg);
    color: white;">
                </div>
            </form>
        </center>
    </p>
</body>
</html>
