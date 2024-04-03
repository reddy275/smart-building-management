<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="assets/img/png-clipart-building-logo-building-building-text-thumbnail-removebg-preview.png" type="image/png">

    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url(images/istockphoto-1147231642-612x612.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    /* opacity: 0.5px; */
}
.blur-background {
    backdrop-filter: blur(5px); /* Adjust the blur radius as needed */
}
        header {
            background-color: #307ace;
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #4444;
            color: white;
            padding: 1px;
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
          
            display: inline;
            margin-right: 140px;
        }

        a {
            text-decoration: none;
            color: white;
        }

        main {
            padding: 10px;
        }

        section {
  margin: 30px auto; /* Set top and bottom margin to 30px and left and right margin to auto */
  width: 20%;
  padding: 20px;
  border: 1px solid #ddd;
  background: url(images/adef.jpg);
  background-color: antiquewhite;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}


        section h2 {
            text-align: center;
        }

        h2 {
            margin-top: 0;
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
            cursor: pointer;
            /* margin-left:-500px; */

        }
        #build{


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
            color: black;
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
        main {
    display: flex; /* Use flexbox layout */
    justify-content: space-around; /* Distribute space around items */
    flex-wrap: wrap; /* Allow items to wrap onto multiple lines */
}

section {
    flex: 0 1 20%;
    padding: 11px;
    border: 1px solid #ddd;
    background-color: antiquewhite;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
    border-radius:5px;
}

section h2 {
    margin: 0;
}

section img {
    display: block; /* Ensure the image takes full width of its container */
    margin: 0 auto; /* Center the image horizontally */
}

    </style>
</head>
<body class="blur-background">
    <header>
        <h1>SmartBuilding 
        </h1>
    </header>

    <nav>
        <ul>
            
            <li>
                <!-- Dropdown for "Add" -->
                <div class="dropdown">
                    <button class="dropbtn" > Add</button>
                    <div class="dropdown-content" >
                    <a href="addemployee.php"> Employee</a>
                        <a href="addevent.php">Event</a>
                        <a href="addann.php">Announcement</a>
                        <a href="addcontact.php">Emergency Contacts</a>
                        <a href="addparking.php">Parking</a>
                        <a href="addblock.php">Buildings</a>
                    </div>
                </div>
            </li>
          
            <li id="build" >
                <a href="emp.php">Employee Details</a>
            </li>
            <li>
                <a href="profile.php"  >My Profile</a>
            </li>
            <li>
                <a href="login.php">Logout</a>
            </li>
        </ul>
    </nav>

    <main>
        <section id="facade">
            <img src="images/b9.jpeg" style="width:250px;height:200px"></img>
            <h2><a href="facade.php">Buildings</a></h2>
        </section>
        <section id="residents">
        <img src="images/res.jpg" style="width:250px;height:200px"></img>

            <h2 id="build"><a href="resident.php">Residents</a></h2>
        </section>

        <section id="parking">
        <img src="images/par.jpg" style="width:250px;height:200px"></img>

            <h2><a href="parking.php">Parking Area</a></h2>
        </section>
        <section id="Complaints">
        <img src="images/com.jpg" style="width:250px;height:200px"></img>

            <h2><a href="admincomplaints.php">Complaints</a></h2>
        </section>

        <section id="security">
        <img src="images/cam.jpg" style="width:250px;height:200px"></img>

            <h2><a href="security.php">Security Features</a></h2>
        </section>

       
       
        
    </main>
</body>
</html>
