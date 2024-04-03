<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets/img/png-clipart-building-logo-building-building-text-thumbnail-removebg-preview.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building Management</title>
    <style>
         body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url(images/iss.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 800px;
overflow-x: hidden;
}
.blur-background {
    backdrop-filter: blur(10px); /* Adjust the blur radius as needed */
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
            color: black;
            padding: 10px;
            text-align: center;
            height: 35px;
        }
         .search-bar {
            margin-left: 800px;
            margin-top: 120px;
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

        ul {
            list-style: none;
            padding: 0;
        }
        ul a {
            color: white;
        }

        li {
            display: inline;
            margin-right: 20px;
            color: white;
        }

        a {
            text-decoration: none;
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
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        section h2 {
            text-align: center;
        }

        h2 {
            margin-top: 0;
            color: white;
            font-size:24px;
        }

        .choose-button {
            background-color: #1c0d3f;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .details {
            flex-grow: 1;
        }

        .right-corner {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-top: 10px;
        }

        .assign-button {
            background-color: #1c0d3f;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top:3px;
        }

        th, td {
            border: 1px solid lightblue;
            padding: 8px;
            text-align: left;
        }

        th {
            color:white;
            /* background-color: antiquewhite; */
            background: url(images/ads.jpeg);
        }

        .table-container {
            overflow-x: auto;
        }

        nav li {
            margin: 0 64px;
        }
    </style>
</head>

<header>
        
        <center>
            
        <h1>SmartBuilding  
        </h1></center>
    </header>
<body class="blur-background">
    <nav>
        <ul>
            <li><a href="manager.php">Home</a></li>
            <li><a href="viewstaff.php">Assigned Work</a></li>
            <li><a href="profile.php">My Profile</a></li>
            <li><a href="login.php">Logout</a></li>
            <li><a href="jobhistory.php">Status</a></li>
        </ul>
    </nav>
    <div class="search-bar">
            <span class="search-icon">&#128269;</span>
            <input type="text" id="search-input" class="search-input" placeholder="Search..." oninput="searchTable()">
        </div>

    <div class="table-container"style="margin-left: 200px;
    margin-top: 150px;">
        <table>
            <thead>
                <tr>
                    <br>
                    <th>Name</th>
                    <th>Block</th>
                    <th>Door Number</th>
                    <th>Issue Type</th>
                    <th>Repeated Issue</th>
                    
                    <th>Mobile Number</th>
                    <th>Issue</th>
                    <th>Date of Report</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody style="    background-color:#f2f2f2;">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "building_management");
               

                if ($conn) {
                    $sql = "SELECT c_id, name, block, doorno, issue_type, repeated,  mobno, issue, dob, status FROM complaints where status='pending'";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $cid = $row['c_id'];
                            echo '<tr>';
                            echo '<td>' . $row["name"] . '</td>';
                            echo '<td>' . $row["block"] . '</td>';
                            echo '<td>' . $row["doorno"] . '</td>';
                            echo '<td>' . $row["issue_type"] . '</td>';
                            echo '<td>' . $row["repeated"] . '</td>';
                          
                            echo '<td>' . $row["mobno"] . '</td>';
                            echo '<td>' . $row["issue"] . '</td>';
                            echo '<td>' . $row["dob"] . '</td>';
                            echo '<td>' . $row["status"] . '</td>';
                            echo '<td><a href="selectstaff.php?id='.$row['c_id'].'"><button class="assign-button">Assign</button></a></td>';
                            echo '</tr>';
                        }
                    } else {
                        echo "Error in the SQL query: " . mysqli_error($conn);
                    }

                    mysqli_close($conn);
                } else {
                    echo "Database connection failed.";
                }
                ?>
            </tbody>
        </table>
    </div>

  
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
