<?php 
session_start();
if(isset($_GET['w_id'])){
    $w_id = $_GET['w_id'];
    $_SESSION['w_id'] = $w_id;
}

$user = $_SESSION['id']; 
echo $user;

echo $w_id;




// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'building_management';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



    // Query to fetch user details by ID
    $sql = "SELECT * FROM complaints WHERE c_id = $user";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $username = $row['name'];
        $block = $row['block'];
        $doorno = $row['doorno'];
        $issue_type = $row['issue_type'];
        $repeated = $row['repeated'];
        $replacement = $row['replacement'];
        $mobno = $row['mobno'];
        $issue = $row['issue'];
        $dor = $row['dob'];
        $user_id = $row['c_id'];
        

       
    } else {
        echo 'User not found.';
    }





    // Query to fetch user details by ID
    $tsql = "SELECT * FROM login WHERE user_id = $w_id";
    $tresult = $conn->query($tsql);

    if ($tresult->num_rows == 1) {
        $trow = $tresult->fetch_assoc();
        $workername = $trow['name'];
        $worker_id = $row['user_id'];
        
        echo $workername;

       
    } else {
        echo 'User not found.';
    }



     $insertsql = "INSERT INTO issue_details (worker_name, user_name,block, door, issue, repeated, replacement, mob_num, issues, dateofreporting, worker_id,user_id) VALUES('$workername','$username','$block','$doorno','$issue_type','$repeated','$replacement','$mobno','$issue','$dor','$w_id','$user_id')";
	 

if ($conn->query($insertsql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('Issue Added');window.location.href='issuedetails.php';</script>";
  
} else {
  echo "Error: " . $insertsql . "<br>" . $conn->error;
}

$conn->close();
?>