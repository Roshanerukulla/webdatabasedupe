<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    include "dbconnection.php";
#getting data from faculty submission form

$jobtitle= $_POST["jobtitle"];
$jobdes= $_POST["jobdes"];
$jobreq=$_POST["jobreq"];
$jobpay=$_POST["jobpay"];
$jobskills=$_POST["jobskills"];
$info=$_POST["info"];
$position=$_POST["position"];

 // Insert data into the database
 $sql = "INSERT INTO jobs (jobtitle, jobdes, jobreq, jobpay, jobskills, info, position) VALUES ('$jobtitle, $jobdes, $jobreq, $jobpay, $jobskills, $info, $position)";

 if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 
 mysqli_close($conn);
}



?>