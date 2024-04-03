<?php
$conn = mysqli_connect("localhost", "root", "", "building_management");
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $block = $_POST['block'];
  $doorno = $_POST['doorno'];
  $issue_type = $_POST['issue_type'];
  $repeated = $_POST['repeated'];
  $mobno = $_POST['mobno'];
  $issue = $_POST['issue'];
  $dob = $_POST['dob'];
  $status = $_POST['status'];


  $sql = "INSERT INTO complaints (name, block, doorno, issue_type, repeated, mobno, issue, dob, status) VALUES ('$name', '$block', '$doorno', '$issue_type', '$repeated', '$mobno', '$issue', '$dob', '$status')";

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
        /* ... Your existing styles ... */
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url(images/is.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
.blur-background {
    backdrop-filter: blur(5px); /* Adjust the blur radius as needed */
}
body {
font-family: Arial, sans-serif;
margin: 0;
padding: 0;
background-color: #f5f5f5;
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

ul {
list-style: none;
padding: 0;
}

li {
display: inline;
margin-right: 20px;
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
margin-left:380px;
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
<body class="blur-background">
<header>
<h1>SmartBuilding</h1>
</header>

<nav>
<ul>
<li><a href="user.php">Home</a></li>
<li><a href="login.php">Logout</a></li>

</ul>
</nav><br><br>

<form id="add-employee-form" method="post" style="border-radius: 5px;
    background-color: rgba(0, 0, 0, 0.5);">
<label for="employee-name"> Name</label>
<input type="text" name="name" required style="width: 387px;">

<label for="employee-role">Building</label>
<select id="employee-role" name="block" style="width: 412px;">
<option value="A-Block">SSE</option>
<option value="B-Block">SCAD</option>
<option value="C-Block">AHS</option>

</select>
<label for="employee-name"> DoorNo</label>
<input type="text" doorno="employee-name" name="doorno" required style="width: 387px;">
<label for="employee-role">Issue Type</label>
<select id="employee-role" name="issue_type" style="width: 412px;">
<option value="plumbing">plumbing</option>
<option value="Electrician">Electrical</option>
<option value="Gardening">Gardening</option>
<option value="Carpenter">Carpentery</option>
<option value="painter">painting</option>
</select>
<label for="employee-role">Repeated Issue</label>
<select id="employee-role" name="repeated" style="width: 412px;">
<option value="Yes">Non-Repetive</option>
<option value="No">Repeated</option>

</select>


<label for="employee-role">Date Of Report</label>
<input type="Date" name="dob" required style="width: 387px;">
<label for="employee-role">Mobile Number</label>
<input type="text" id="employee-name" name="mobno" required style="width: 387px;">
<label for="employee-role">Status</label>
<select id="employee-role" name="status" style="width: 412px;">
<option value="pending">pending</option>
</select>
<label for="employee-name"> Issue</label>
<input type="text" name="issue" required style="width: 387px;"><br>

<button type="submit" name="submit" style="background-color: #daa953;">Add </button>

</form>

<footer>
</footer>
</body>
</html>