<?php
$conn = mysqli_connect("localhost", "root", "", "building_management");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $allotment = $_POST['allotment'];
    $mobno = $_POST['mobno'];

    $sql = "INSERT INTO parking (name, allotment, mobno) VALUES ('$name', '$allotment', '$mobno')";
    $data = mysqli_query($conn, $sql);

    if ($data) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
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
    background: url(images/park.jpeg);
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
height: 40px;
}
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

ul {
list-style: none;
padding: 0;
}

li {
display: inline;
margin-right: 83px;
}


nav li {
            margin: 0px 64px;
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
margin-left:350px;
}

label {
display: block;
margin-bottom: 10px;
}

input, select {
width: 80%;
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
      </header><br><br><br>
      <!-- <nav>
         
      </nav> -->
      </header>


<form id="add-employee-form" method="post" style="border-radius: 5px;
    background-color: rgba(0, 0, 0, 0.5);">

<label for="employee-role">Name</label>
<input type="text" id="name" name="name" required>
<label for="employee-role">Parking Allotment</label>
<input type="text" id="name" name="allotment" required>
<label for="employee-role">Mobile Number</label>
<input type="text" id="name" name="mobno" required><br>
<button type="submit" name="submit">Add </button>
</form>


</body>
</html>