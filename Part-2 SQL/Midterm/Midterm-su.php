<?php

$link = mysqli_connect('localhost','root','');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}


$sql = "CREATE DATABASE Midterm";

if(mysqli_query($link, $sql)){
    echo "DATABASE Created";
}
else{
    echo "ERROR: Could not able to create DATABASE. " .mysqli_error($link);
}

mysqli_close($link)

?>
