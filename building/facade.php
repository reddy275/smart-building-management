
<?php
$conn = mysqli_connect("localhost", "root", "", "building_management");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to retrieve data from the 'login' table
$sql = "SELECT * FROM add_block" ;
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets/img/png-clipart-building-logo-building-building-text-thumbnail-removebg-preview.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search and Buttons Example</title>
    
    <style>
        /* ... Your existing styles ... */
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url(images/b9.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 800px;
overflow-x: hidden;
}
.blur-background {
    backdrop-filter: blur(10px); /* Adjust the blur radius as needed */
}
        header {
            background-color: #307ace;
             color: white;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #3333;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
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

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }
        
        .search-bar {
            margin-left: 820px;
            margin-top: 20px;
            width: 100%;
            position: fixed;
            display: flex;
            align-items: center;
        }

        .search-icon {
            font-size: 20px;
            margin-right: 10px;
            color: #333;
        }

        .search-input {
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            width: 200px;
            outline: none;
        }

        .search-input::placeholder {
            color: #999;
        }
        nav li {
            margin: 0px 64px;
        }

        nav a {
            text-decoration: none;
            color: white;
        }
          
        .employee-table {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            margin-left: 220px;
            margin-top: 55px;
        }
        .highlight {
            background-color: #f0f0f0 ;
            font-weight: bold;
        }
        .employee-table h3 {
            margin-top: 0;
            font-size: 24px;
            color:white;
        }

        .employee-table table {
            width: 80%;
    border-collapse: collapse;
    background-color: #f2f2f2;
        }

        .employee-table th, .employee-table td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            
        }

        .employee-table th {
            color:white;
            /* background-color: antiquewhite; */
            background: url(images/ads.jpeg);
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
    </nav>
    </header>

    <main>
    <div class="search-bar">
            <span class="search-icon">&#128269;</span>
            <input type="text" id="search-input" class="search-input" placeholder="Search..." oninput="searchTable()">
        </div>
        
    </header>

    <main>
        <div class="employee-table">
            <h3>Building Details</h3>
            <table>
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Block Name</th>
                        <th>No.of Floors</th>
                        <th>No.of Rooms</th>
                        <th>Parking Availability</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop through the data retrieved from the database -->
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['blockname'] . "</td>";
                        echo "<td>" . $row['floor'] . "</td>";
                        echo "<td>" . $row['rooms'] . "</td>";
                        echo "<td>" . $row['parking'] . "</td>";
                       
                       
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <!-- Your footer content goes here -->
    </footer>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        function showPopup(message) {
            alert(message);
        }
    </script>
   <script>
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search-input");
            filter = input.value.toUpperCase();
            table = document.querySelector(".employee-table table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Adjust the index to the column you want to search
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

</body>
</html>



















