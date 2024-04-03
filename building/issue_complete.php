<?php 
if(isset($_GET['id']) && isset($_GET['user_id'])) {
    $id = $_GET['id'];
    $user_id = $_GET['user_id'];
    
    // $_SESSION['id'] = $id;
    
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'building_management';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE issue_details SET status='completed' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {

        // header("Location: final_issue.php");
    } else {
        echo 'Error updating user details: ' . $conn->error;
    }
   

    // Update user details in the database
    $sql = "UPDATE complaints SET status='completed' WHERE c_id=$user_id";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('Status Updated Successfully');window.location.href='final_issue.php';</script>";

        // header("Location: final_issue.php");
    } else {
        echo 'Error updating user details: ' . $conn->error;
    }
}


?>

