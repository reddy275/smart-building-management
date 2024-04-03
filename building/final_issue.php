<?php
session_start();
$user_name = isset($_SESSION['name']) ? $_SESSION['name'] : null;
$conn = mysqli_connect("localhost", "root", "", "building_management");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



// Query to retrieve data from the 'login' table
$sql = "SELECT * FROM issue_details where user_name = '$user_name' AND status='pending'";
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
        /* CSS styles for the employee table */
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url(images/issue.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 800px;
overflow-x: hidden;
}
.employee-table {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            margin-left: 200px;
            margin-top: 140px;
}

        .employee-table h3 {
            margin-top: 0;
            color:white;
            font-size:24px
        }

        .employee-table table {
         
            width: 90%;
            border-collapse: collapse;
            background-color:#f2f2f2;
        }

        .employee-table th, .employee-table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }

        .employee-table th {
            color:white;
            /* background-color: antiquewhite; */
            background: url(images/ads.jpeg);
        }

        /* CSS styles for the menu bar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #307ace;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .hamburger {
            font-size: 20px;
            cursor: pointer;
        }

        .show-menu {
            display: block !important;
        }

        .add-button,
        .remove-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 16px;
            margin-left: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .remove-button {
            background-color: #f44336;
        }

        /* CSS styles for the sidenav */
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #307ace;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #333;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav { padding-top: 15px; }
            .sidenav a { font-size: 18px; }
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const hamburger = document.querySelector(".hamburger");
            const menuItems = document.querySelector(".menu-items");

            hamburger.addEventListener("click", function() {
                menuItems.classList.toggle("show-menu");
            });
        });
    </script>
</head>
<body>
    <!-- Sidenav -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="user.php">Home</a> 
       
        <a href="login.php">Logout</a>
    </div>

    <header>
        <div class="menu-bar">
            <span class="hamburger" onclick="openNav()">&#8801;</span>
        </div>
        
    </header>

    <main>
        <div class="employee-table">
            <h3>Issue Details</h3>
            <table>
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Worker Name</th>
                        <th>User Name</th>
                        <th>Block</th>
                        <th>Door No</th>
                        <th>Issue</th>
                        <th>Repeated</th>
                        
                        <th>Type of Issue</th>
                        <th>Reporting On</th>
                        <th>Action</th>
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

                        echo "<td>" . $row['issues'] . "</td>";
                        echo "<td>" . $row['dateofreporting'] . "</td>";
                        
                        echo "<td><a href='issue_complete.php?id=".$row['id']."&user_id=".$row['user_id']."'>Completed </a></td>";
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
</body>
</html>
