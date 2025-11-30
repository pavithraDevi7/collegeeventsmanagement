<?php
include_once 'classes/db1.php';

require_once 'utils/header.php';
 require 'utils/styles.php';


include 'classes/db1.php'; // Your database connection file

// Query to select all participants
$sql = "SELECT usn, stu_name, branch, sem, email, phone, college,event_id FROM participent";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo"<center><strong><h1>participants lists</h1></strong>";
    echo "<table border='2'class='table table-striped'>";
    echo "<tr class='table-danger'><th>USN</th><th>Name</th><th>Branch</th><th>Semester</th><th>Email</th><th>Phone</th><th>College</th><th>event_id</th></tr>";
    
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["usn"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["stu_name"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["branch"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["sem"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["phone"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["college"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["event_id"]) ."</td>";
        echo "</tr>";
    }
    
    echo "</table></center>";
} else {
    echo "No participants found.";
}

$conn->close();

?>
<br><button class="btn btn-outline-success"> <a href="page1.php"><--Back</a></button>

$usn = '1VA17CS005';
$sql = "SELECT * FROM participent WHERE usn = '$usn'";
        <?php include 'utils/footer.php'; ?> 

