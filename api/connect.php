<?php
    $connect = mysqli_connect("localhost", "root", "", "voting") or die("connection falied");
    if($connect){
        echo "Connected!";
    }
    else{
        echo "Not Connected!";
    }
?>