<?php

$server = "localhost";
$username = "root";
$password = "";

// Create a database connection
$con = mysqli_connect($server, $username, $password,"labtest" );

$name=$_POST['name'];
$date=$_POST['date'];
$n=$_POST['mem'];
$stay=$_POST['stay'];
$room=$_POST['room'];
$type=$_POST['size'];// var used to collect values sent by method post.
$time=$_POST['pre'];

$sql = "INSERT INTO `guest`(`name`, `room`,`date`,`members`,`daysofstay`,`timepref`) VALUES ('$name','$room','$date','$n','$stay','$time')";//sql query
mysqli_query($con,$sql);//performs given query on the database
echo "<br>";

//$r=mysqli_query($con,"select max(department) from patientrelation");
//  while($row=mysqli_fetch_array($r))
// {
//     echo $row['max(department)'];
// }
?>