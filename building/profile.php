<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets/img/png-clipart-building-logo-building-building-text-thumbnail-removebg-preview.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrical Maintanence</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url(images/emp.jpg);
            background-repeat: no-repeat;
    background-size: cover;
    height: 800px;
        }
        
        header {
            background-color: #307ace;
            color: white;
            padding: 0.5px;
            text-align: center;
        }
        
        nav {
            background-color: #3333;
            color: white;
            padding: 0.5px;
            text-align: center;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            /* Remove background color and border */
            background-color: transparent;
            border: none;
            color: black;
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
            margin-right: 114px;
        }
        
        a {
            text-decoration: none;
            color: black;
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
  border: 1px solid #ccc;
  padding: 20px;
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
  background-color: #333;
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
        <h1>SmartBuilding 
        </h1>
        </header>
    <nav>
        <ul>
        <li>
                <a href="dashboard.php"
            style="position: relative;
    margin-left: -292px;">Home</a>
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
            <li style="    margin-right: -317px;">
                <a href="login.php">Logout</a>
            </li>
        </ul>
    </nav>
    </header><br><br>

    <center style="    margin-left: 406px;
    width: 30%;
    border-radius: 5px;
    background-color: rgba(0, 0, 0, 0.5);
    box-shadow: 3px 3px 5px 5px lightblue;
    background: url(images/emp.jpg);
            background-repeat: no-repeat;
    background-size: cover;"><br></br>
    <img src="ava.jpg" width="100" height="100">
    
    <?php
$conn = mysqli_connect("localhost", "root", "", "building_management");

$sql = "SELECT role, name, dob, mobno FROM login WHERE user_id=1";
$result = mysqli_query($conn, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
     $role = $row['role'];
     $name = $row['name'];
     $dob = $row['dob'];
     $mobno = $row['mobno'];
     //echo $name;
    echo '<h1>My Profile</h1><br></br>';
    echo '<tr><td>Name:</td> <td>'.$name.'</td></tr><br></br>';
    echo '<tr><td>Role:</td> <td>'.$role.'</td></tr><br></br>';
    echo '<tr><td>DOB:</td> <td>'.$dob.'</td></tr><br></br>';
    echo '<tr><td>Mobile No:</td> <td>'.$mobno.'</td></tr><br></br>';


}

    
    ?>
    </center>


  
    
<!--<form id="add-employee-form" >
    
    <label for="employee-name"> Name:</label>
    <input type="text" id="employee-name" name="employee-name" required>
    <label for="dob">Date of Birth:</label>
    <input type="Date" name="dob" required>
    <label for="mob_no">Mobile no:</label>
    <input type="big int" name="mob_no" required>
    <label for="email">Email</label>
    <input type="varchar" name="Email" required> 
    <label for="employee-role">Designation:</label>
    <select id="employee-role" name="employee-role">
      <option value="supervisor">supervisor</option>
      <option value="manager">Manager</option>
      <option value="worker">worker</option>
    </select>
  </form>-->
  
</body>
</html>