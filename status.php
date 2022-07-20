<?php
    error_reporting(0);
$getid= $_GET["id"];
$con=mysqli_connect("localhost","root","","oas");
if(!isset($con))
{
    die("Database Not Found");
}

if(isset($_REQUEST["appr"]))
{
    
    $sql  = "insert into t_status values(";
    $sql .= "'" . $getid . "',";
    $sql .= "'Approved')";
    
    
  
    
    mysqli_query($con, $sql);
    
    echo $sql;
    
    
}



?>