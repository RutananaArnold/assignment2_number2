<?php 
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to the database
$mysqli = new mysqli('localhost', 'root', '', 'assignment1');
// Construct the SQL query
$query = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $mysqli->prepare($query);
// Bind the user input to the prepared statement
$stmt->bind_param('ss', $username, $password);
// Execute the query
$stmt->execute();
// Get the result set
$result = $stmt->get_result();
// Check if the login was successful
if ($result->num_rows < 1) {
    header('Location: login_ui.php?m=no');
} else {
 // User is authenticated, redirect to the dashboard 
    header('Location: dashboard.php');
}
?>