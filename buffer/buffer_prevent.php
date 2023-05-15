<?php
$name = $_GET['name'];
if(strlen(trim($name)) > 20)
{
    header("Location: buffer_overflow_UI.php?m='Length is greater than 20 '");
    exit();
}

$name = substr($name, 0, 20); // limit input to 20 characters
echo "Welcome, $name!";
?>