<?php
$conn = mysqli_connect("localhost", "root", "", "building_management");
session_start();
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
            background-color: #f5f5f5;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
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
            margin-right: 10px;
            color: white;
        }

        a {
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        /* ... your existing styles ... */

section {
    margin-bottom: 30px;
    padding: 20px;
    border: 1px solid #ddd;
    background-color: white;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: center; /* Add this line to center-align text */
}

section h2 {
    text-align: center; /* Center-align h2 within the section */
}

.details {
    flex-grow: 10;
    text-align: center; /* Adjust text alignment as needed */
}

/* ... your existing styles ... */



        .choose-button {
            background-color: #1c0d3f;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .details {
            flex-grow: 10;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="dashboard.php">Home</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>

    <?php
    if ($conn) {
        $sql = "SELECT name, doorno ,dob,issue_type FROM complaints WHERE issue_type='gardening'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
                $doorno = $row['doorno'];
                $dob = $row['dob'];
                $issue = $row['issue_type'];
    ?>
    <section id="complaint" class="ab">
        <div class="details">
            <tr><td>Name:</td> <td><?php echo $name; ?></td></tr><br></br>
            <tr><td>DoorNo:</td> <td><?php echo $doorno; ?></td></tr><br></br>
            <tr><td>Date:</td> <td><?php echo $dob; ?></td></tr><br></br>
            <tr><td>Issue Type:</td> <td><?php echo $issue; ?></td></tr><br></br>
        </div>
    </section>
    <?php
            }
        } else {
            echo "Error in the SQL query: " . mysqli_error($conn);
        }
    } else {
        echo "Database connection failed.";
    }
    mysqli_close($conn);
    ?>
    
    <script>
        function showPopup(message) {
            alert(message);
        }

        function goToStatusPage() {
            window.location.href = "jobhistory.php";
        }
    </script>
</body>
</html>
