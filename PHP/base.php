<?php 

$host = "localhost";
$db_name = "robot_arm";
$username = "root";
$password = "";
 
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
 
$query1 = "SELECT servo, value FROM servo WHERE servo = ? LIMIT 0,1";
$stmt = $con->prepare( $query1 );
 
$servo=1;
 
$stmt->bindParam(1, $servo);
 
$stmt->execute();
 
$row = $stmt->fetch(PDO::FETCH_ASSOC);
 
echo  $row['value'];

?>