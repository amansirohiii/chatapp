<?php
  $hostname = "localhost";
  $username = "id18329180_chatappp";
  $password = "Amansirohi@123";
  $dbname = "id18329180_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
