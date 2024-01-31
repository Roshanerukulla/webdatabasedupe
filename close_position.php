<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnection.php';
    // Get form data
    $id = $_POST["id"];

    // Update the status to 'closed'
    $sql = "UPDATE jobs SET position = 'close' WHERE id = $id";
    $conn->query($sql);

    // Redirect to the view_positions page or another page
    echo "succesfully closed position";
    header("Location: faculty_tbl_view.php");
    exit();
}

// Close the database connection
$conn->close();
?>
