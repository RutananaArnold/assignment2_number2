<?php
include('./utilities/dbAcess.php');
include('./utilities/connection.php');
DbAccess::createTables($conn);
?>
<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('assets/login.jpg');
      background-size: cover;
      background-position: center;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 300px;
      margin: 100px auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 3px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      border: none;
      color: #fff;
      cursor: pointer;
      border-radius: 3px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .card {
      width: 500px;
      margin-top: 50px;
      margin-left: 400px;
    }
  </style>
</head>

<body>
  <?php 

    if(isset($_GET['m']))
    {
      if($_GET['m'] == 'no')
      {
        echo '<div class="card">
        <div class="card-body">
          Incorrect password or username.
        </div>
      </div>';
      }
    }
    
  ?>
  <div class="container">
    <h2>Login</h2>
    <!-- <form method="post" action="login_logic.php"> -->
    <form method="post" action="prepared_stmt.php">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Login">
    </form>
  </div>

</body>