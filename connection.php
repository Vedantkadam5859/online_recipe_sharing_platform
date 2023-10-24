<?php

  $host = "localhost";
  $username = "root";
  $password = "root123";
  $database = "food";

 
  $conn = mysqli_connect($host, $username, $password, $database);

  
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


  $query = "SELECT * FROM recipes";
  $result = mysqli_query($conn, $query);
?>
