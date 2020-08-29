<?php

$link = mysqli_connect('localhost','root','','Midterm');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}


$sql = "CREATE TABLE student(
    snum decimal(9,0) NOT NULL PRIMARY KEY ,
    sname VARCHAR(30),
    major VARCHAR(25) ,
    level varchar(2),
    age decimal(3,0),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";

if(mysqli_query($link, $sql)){
    echo "TABLE Created";
}
else{
    echo "ERROR: Could not able to create TABLE. " .mysqli_error($link);
}

mysqli_close($link)


?>