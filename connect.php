<?php
$db = "rferres02";
$pw= "gTZhxLRPk1YhP1BT";
$host="rferres02.lampt.eeecs.qub.ac.uk";
$user= "rferres02";
$conn=new mysqli($host,$user,$pw,$db);

if($conn->connect_error){
    echo "Connection failed: ".$conn->connect_error;
}

