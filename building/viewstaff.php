<?php
$conn = mysqli_connect("localhost", "root", "", "building_management");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to retrieve data from the 'login' table
$sql = "SELECT * FROM issue_details";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets/img/png-clipart-building-logo-building-building-text-thumbnail-removebg-preview.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Details</title>
    <style>
         body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url(images/emp.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 1000px;
overflow-x: hidden;
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
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-size: 15px;
            margin: 0 52px; /* Adjust margin as needed */
        }
        .search-bar {
    position: relative; /* Fix the search bar */
    top: 100px; /* Distance from the top of the viewport */
    left: 800px; /* Distance from the left of the viewport */
    width: 250px; /* Width of the search input */
    display: flex;
    align-items: center;
    z-index: 999; /* Ensure it's above other content */
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
    width: 100%; /* Make the input take up full width */
    outline: none;
}

.search-input::placeholder {
    color: #999;
}

        .employee-table {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            margin-left: 180px;
            margin-top: 80px;
        
        }

        .employee-table h3 {
            margin-top: 0;
            color:black;
            font-size:24px;
        }

        .employee-table table {
            width: 90%;
            border-collapse: collapse;
            background-color:#f2f2f2;
        }

        .employee-table th,
        .employee-table td {
            border: 1px solid antiquewhite;
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

<header>
        
        <center>
            
        <h1>SmartBuilding  
        </h1></center>
    </header>

<body>
    

    <nav>
        <a href="manager.php">Home</a>
       <a href="viewstaff.php">Assigned Work</a>
                <a href="jobhistory.php">Status</a>
                <a href="managerprofile.php">Profile</a>
                <a href="login.php">Logout</a>
    </nav>

    <main>
    <div class="search-bar">
            <span class="search-icon">&#128269;</span>
            <input type="text" id="search-input" class="search-input" placeholder="Search..." oninput="searchTable()">
        </div>
        <div class="employee-table">
            <h3>Issue Details</h3>
            <table style="    background: url(images/adef.jpg);   background-repeat: no-repeat;
    background-size: cover;
    background-position: center;">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Worker Name</th>
                        <th>User Name</th>
                        <th>Block</th>
                        <th>Door No</th>
                        <th>Issue</th>
                        <th>Repeated</th>
                      
                        <th>Mobile</th>
                        <th>Type of Issue</th>
                        <th>Reporting On</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop through the data retrieved from the database -->
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['worker_name'] . "</td>";
                        echo "<td>" . $row['user_name'] . "</td>";
                        echo "<td>" . $row['block'] . "</td>";
                        echo "<td>" . $row['door'] . "</td>";
                        echo "<td>" . $row['issue'] . "</td>";
                        echo "<td>" . $row['repeated'] . "</td>";
                    
                        echo "<td>" . $row['mob_num'] . "</td>";
                        echo "<td>" . $row['issues'] . "</td>";
                        echo "<td>" . $row['dateofreporting'] . "</td>";
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
</body>

</html>
