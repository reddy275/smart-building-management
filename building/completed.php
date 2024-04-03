<? php
  $conn = mysqli_connect("localhost", "root", "", "building_management");
  session_start();

  // Check the connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Query to fetch tasks from the database
  $sql = "SELECT * FROM rating ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $id = $row['id'];
        $status = $row['status'];

        // Determine the appropriate CSS class based on task status
        $taskClass = ($status == 'completed') ? 'task completed' : 'task';

        // Output section bar with spacing
        echo "<div class='section-separator'></div>";
        echo "<section class='$taskClass' data-status='$status'>";
        echo "<div style='background-color: #3333; color: black; padding: 10px;'>";
        echo "<h2>$name</h2>";
        echo "<p>Employee Id: $id</p>";
        echo "<p>Status: $status</p>";
        if ($status == 'pending') {
            echo "<button onclick=\"finishTask('$id')\">Finish</button>";
        }
        echo "</div>";
        echo "</section>";
    }
}
// Close the database connection
$conn->close();
?>