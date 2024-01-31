<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$username= $_POST["username"];
$password= $_POST["password"];
$role=$_POST["role"];


switch($role){
    case "faculty":
      header("Location:facultysubmitform.html");
      break;
    case  "employee":
        header("Location:emp_tbl_view.php");
        break;
    default :
       echo ("INVALID ROLE");
        break;
  }
}


?>