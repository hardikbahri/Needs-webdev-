<?php

    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password,"test" );
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    else{
        echo"successfully connected";
    }
    $name=$_POST['name'];
    $date=$_POST['date'];
    $n=$_POST['mem'];
    $stay=$_POST['stay'];
    $room=$_POST['room'];
    $type=$_POST['size'];
    $time=$_POST['pre'];
    
    $sql = "INSERT INTO `guest`(`name`, `roomtype`) VALUES ('$name','$room')";
    mysqli_query($con,$sql);
    echo "<br>";
    
 //$r=mysqli_query($con,"select max(department) from patientrelation");
//  while($row=mysqli_fetch_array($r))
    // {
    //     echo $row['max(department)'];
    // }
    ?>