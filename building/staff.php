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
    <title>Search and Buttons Example</title>

    <style>
        /* ... Your existing styles ... */
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url(images/istockphoto-1147231642-612x612.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 800px;
overflow-x: hidden;
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
            background-color: #307ace;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: -20px;
        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .search-bar {
            position: relative; /* Fix the search bar */
    top: 120px; /* Distance from the top of the viewport */
    left: 800px; /* Distance from the left of the viewport */
    width: 250px; /* Width of the search input */
    display: flex;
    align-items: center;
    z-index: 999
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
            margin: 0 10px;
        }

        nav a {
            text-decoration: none;
            color: white;
        }

        /* Add the following styles for the logout class */
        .logout {
            margin-left: auto;
        }

        .employee-table {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            margin-left: 200px;
            margin-top: 80px;
        }

        .highlight {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        .employee-table h3 {
            margin-top: 0;
            color: white;
            font-size:24px;
        }

        .employee-table table {
            width: 90%;
            border-collapse: collapse;
            background-color:#f2f2f2;
        }
        .employee-table th,
        .employee-table td {
            border: 1px solid lightblue;
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

        <center>

            <h1>SmartBuilding 

            </h1>
        </center>

    </header>

    <nav>
        <ul>
            <!-- ... Your existing list items ... -->
            <!-- Add the following list item for the Logout link with a class -->
            <li class="logout"><a href="login.php">Logout</a></li>
        </ul>
    </nav>

    <main>
        <div class="search-bar">
            <span class="search-icon">&#128269;</span>
            <input type="text" id="search-input" class="search-input" placeholder="Search..." oninput="searchTable()">
        </div>
    </main>

    <main>
        <div class="employee-table">
            <h3> Assigned Work Details</h3>
            <table>
            <thead>
                    <tr>
                        <th>Sl.No</th>
                        <th>Worker Name</th>
                        <th>User Name</th>
                        <th>Block</th>
                        <th>Door No</th>
                        <th>Issue</th>
                        <th>Repeated</th>
                        <th>Replacement</th>
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
                        echo "<td>" . $row['replacement'] . "</td>";
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






















