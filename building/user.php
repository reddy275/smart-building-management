<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="assets/img/png-clipart-building-logo-building-building-text-thumbnail-removebg-preview.png" type="image/png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<style>
 body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url(images/istockphoto-1147231642-612x612.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

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
    position: absolute;
    top: 0;
    right: 0;
}

ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

li {
    display: inline;
    margin-right: 20px;
}

a {
    text-decoration: none;
    color: black;
}


main {
padding: 20px;
}

section {
  margin: 30px auto; /* Set top and bottom margin to 30px and left and right margin to auto */
  width: 70%;
  padding: 20px;
  border: 1px solid #ddd;
  background: url(images/istockphoto-1147231642-612x612.jpg);
  background-repeat: no-repeat;
    background-size: cover;
    background-position: center;

  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

section h2{
text-align: center;
}
h2 {
margin-top: 0;
}
</style>
</head>
<body>
<header>
<h1>SmartBuilding</h1>
<ul>


<li><a href="login.php">Logout</a></li>
</ul>
</header>



<main>
<section id="Events">
<h2><li><a href="userevent.php">Events</a></li></h2>

</section>

<section id="Announcements">
<h2><li><a href="announcements.php">Announcements</a></li></h2>

</section>

<section id="Emergency Contacts">
<h2><li><a href="contacts.php">Emergency Contacts</a></li></h2>

</section>
<section id="Feedback">
<h2><li><a href="final_issue.php">Raised Issue</a></li></h2>
</section>

<section id="Complaints">
<h2><li><a href="complaint.php">Issues</a></li></h2>

</section>




</main>
<footer>


</footer>
</body>
</html>