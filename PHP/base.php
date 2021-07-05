<?php 

$host = "localhost";
$db_name = "robot_arm";
$username = "root";
$password = "";
 
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
 
$query1 = "SELECT ID, value FROM servo WHERE ID = ? LIMIT 0,1";
$stmt = $con->prepare( $query1 );
 
$ID=1;
 
$stmt->bindParam(1, $ID);
 
$stmt->execute();
 
$row = $stmt->fetch(PDO::FETCH_ASSOC);
 
echo  $row['value'];

?>