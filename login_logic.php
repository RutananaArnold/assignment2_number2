<?php
// Get the user input
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to the database
$mysqli = new mysqli('localhost', 'root', '', 'assignment1');

// Construct the SQL query
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

// Execute the query
$result = $mysqli->query($query);

// Check if the login was successful
if ($result->num_rows <= 1) {
    // User is authenticated, redirect to the dashboard
    echo '<script type="text/javascript">';
    echo ' alert("Succesful log in")';  //not showing an alert box.
    echo '</script>';
    header('Location: dashboard.php');
} else{
     // Login failed, show error message
    echo("Invalid username or password.");
}
?>