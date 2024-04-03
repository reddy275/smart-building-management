<?php
$conn = mysqli_connect("localhost", "root","","building_management");
if(isset($_POST['submit'])){
  
  $username=$_POST['username'];
  $password=$_POST['password'];
  $role=$_POST['role'];
  $name=$_POST['name'];
  $dob=$_POST['dob'];
  $mobno=$_POST['mobno'];

  $sql="INSERT INTO login(username, password, name, mobno,role,dob) VALUES ('$username','$password','$name','$mobno','$role','$dob')";
  $data = mysqli_query($conn,$sql);

  if($data)
  {
    echo "Data inserted sucessfully";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="assets/img/png-clipart-building-logo-building-building-text-thumbnail-removebg-preview.png" type="image/png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<style>
 body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url(images/adde.jpg) no-repeat center center fixed;
    background-repeat: no-repeat;
    background-size: cover;
  

}

header {
background-color: #307ace;
color: white;
padding: 10px;
text-align: center;
}

nav {
background-color: #3333;
color: white;
padding: 10px;
text-align: center;
height: 35px;
}

ul {
list-style: none;
padding: 0;
}

li {
display: inline;
margin-right: 83px;
}

a {
text-decoration: none;
color: white;
}

main {
padding: 20px;
}

section {
margin-bottom: 30px;
padding: 20px;
border: 1px solid #ddd;
background-color: white;
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
section h2{
text-align: center;
}
h2 {
margin-top: 0;
}
form {
color:white;
padding: 20px;
width: 33%;
margin-left: 397px;;
}

label {
display: block;
margin-bottom: 10px;
}

input, select {
width: 100%;
padding: 10px;
margin-bottom: 15px;
border: 1px solid #ccc;
border-radius: 5px;
}

button {
background-color: #daa953;
color: #fff;
padding: 10px 20px;
border: none;
border-radius: 5px;
cursor: pointer;

}

button:hover {
background-color: #555;
}
 /* Additional styling for the dropdown */
 .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            /* Remove background color and border */
            background-color: transparent;
            border: none;
            color: white;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            z-index: 1;
        }

        .dropdown-content a {
            padding: 10px 16px;
            display: block;
            text-decoration: none;
            color: #333;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            color: #333;
        }
    </style>
</head>
<body>
    <header>

        <ul>
        <li>
                <a href="dashboard.php">Home</a>
            </li>
            
            <li>
                <!-- Dropdown for "Add" -->
                <div class="dropdown">
                    <button class="dropbtn">Add</button>
                    <div class="dropdown-content">
                    <a href="addemployee.php"> Employee</a>
                        <a href="addevent.php">Event</a>
                        <a href="addann.php">Announcement</a>
                        <a href="addcontact.php">Emergency Contacts</a>
                        <a href="addparking.php">Parking</a>
                        <a href="addblock.php">Buildings</a>
                    </div>
                </div>
            </li>
          
            <li>
                <a href="emp.php">Employee Details</a>
            </li>
            <li>
                <a href="profile.php">My Profile</a>
            </li>
            <li>
                <a href="login.php">Logout</a>
            </li>
        </ul>
    </header>

    <!-- <nav>

    </nav> -->



    <br> <br> <br> <br>
<form id="add-employee-form" method="post" style="    border-radius: 5px;
    background-color: rgba(0, 0, 0, 0.5);
    /* padding: 36px 24px;
    width: 351px;
    height: 197px;
    margin-top: -175px;
    margin-left: 160px; */
}">

<label for="employee-name" style="margin-left: 82px;"> Name:</label>
<input type="text" id="employee-name" name="name" required style="width: 235px;margin-left: 80px;">
<label for="dob" style="margin-left: 82px;">Date of Joining:</label>
<input type="Date" name="dob" required style="width: 235px;margin-left: 80px;">  
<label for="mobno" style="margin-left: 82px;">Mobile no:</label>
<input type="big int" name="mobno" required style="width: 235px;margin-left: 80px;">
<label for="employee-role" style="margin-left: 82px;">Designation:</label>
<select id="employee-role" name="role" style="width: 256px;margin-left: 80px;">
<option value="supervisor">staff-Electrian</option>
<option value="supervisor">staff-plumber</option>
<option value="supervisor">staff-Gardener</option>
<option value="manager">Manager</option>
<option value="worker">User</option>
</select>
<label for="employee-role" style="margin-left: 82px;">Assign Block</label>
<select id="employee-role" name="role" style="width: 256px;margin-left: 80px;">
<option value="supervisor">A-Block</option>
<option value="supervisor">B-Block</option>
<option value="supervisor">C-Block</option>
<option value="manager">D-Block</option>
<option value="worker">E-Block</option>
</select>
<label for="employee-name" style="margin-left: 82px;"> Username:</label>
<input type="text" id="employee-name" name="username" required style="width: 235px;margin-left: 80px;">
<label for="employee-name" style="margin-left: 82px;"> Password</label>
<input type="text" id="employee-name" name="password" required style="width: 235px;margin-left: 80px;"><br>
<button type="submit" name="submit" style="margin-left: 178px;">Add </button>
</form>

<footer>
<!-- <p>&copy; 2023 Your Dashboard. All rights reserved.</p> -->
<!-- <a href="login.php">Logout</a> -->

</footer>
</body>
</html>