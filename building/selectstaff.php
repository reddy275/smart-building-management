<?php 
session_start();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets/img/png-clipart-building-logo-building-building-text-thumbnail-removebg-preview.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrical Maintenance</title>
    <style>
        body {
            font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url(images/Residential-building.jpg);
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
            height: 35px;
        }

        ul {
            color:white;
            list-style: none;
            padding: 0;
        }

        ul a {
            color: black;
        }

        li {
            display: inline;
            margin-right: 80px;
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
            color: #1c0d3f;
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
        }

        table {
            width: 70%; /* Adjusted table width */
            margin: 10px auto; /* Centered the table */
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid lightblue;
            padding: 8px;
            text-align: center;
            background-color: white;
        }

        th {
            color:white;
            /* background-color: antiquewhite; */
            background: url(images/ads.jpeg);/* Centered text in table header */
        }

        .table-container {
            overflow-x: auto;
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
        <ul style="  color:white;">
            <li ><a href="manager.php" style="color:white;">Home</a></li>
            <li><a href="viewstaff.php" style="color:white;">Assigned Work</a></li>
            <li><a href="profile.php"style="color:white;">My Profile</a></li>
            <li><a href="login.php" style="color:white;">Logout</a></li>
            <li><a href="jobhistory.php " style="color:white;">Status</a></li>
        </ul>
    </nav>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                <br><br>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "building_management"); 

                if ($conn) {
                    $sql = "SELECT user_id, mobno, name FROM login WHERE role='staff'";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) 
                        {
                            $name = $row['name'];
                            $mobno = $row['mobno'];
                            $w_id = $row['user_id'];
                ?>
                <tr>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $mobno; ?></td>
                    <td>
                        <center>
                        <a href="save_issue.php?w_id=<?php echo $w_id; ?>">
                            <button class="choose-button" onclick="showPopup('Work assigned successfully for Employee ID <?php echo $w_id; ?>!')">Choose</button>
                        </a>
                        </center>
                    </td>
                </tr>
                <?php
                        }
                    } else {
                        echo "No results found for the query.";
                    }
                } else {
                    echo "Database connection failed.";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        function showPopup(message) {
            alert(message);
        }
    </script>
</body>
</html>
