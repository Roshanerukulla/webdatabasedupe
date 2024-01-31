<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    include "dbconnection.php";
#getting data from faculty submission form

$jobtitle= $_POST["jobtitle"];
$jobdes= $_POST["jobdes"];
$jobreq=$_POST["jobreq"];
$jobpay=$_POST["jobpay"];
$jobskills=$_POST["jobskills"];
$info=$_POST["info"]


}

?>