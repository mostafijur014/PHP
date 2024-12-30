<?php

// Connect Database 
 $servername = "localhost";
 $username = "root";
 $password = "rader123:RA";
 $dbname = "mydb";

 $conn = mysqli_connect($servername, $username, $password, $dbname);

 //Connection check

 if(!$conn){
    die("Connection failed: ".mysqli_connect_errno());
 };
 echo "Connected Successfully </br>";

 //Hass Password
 $hash_pass = md5('test012');
 //Insert data to Database 
$sql = "INSERT INTO users (name, email, password) 
VALUES ('testuser', 'test@gmail.com', '$hash_pass')";
 $insert_user = mysqli_query($conn, $sql);
 if($insert_user){
    echo "User Created";
 };

?>