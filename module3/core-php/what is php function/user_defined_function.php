<?php 
function address($fnm,$lnm,$mobile,$address){
    $firstname="My firstname is :".$fnm."<br>";
    $lastname="My lastname is :".$lnm."<br>";
    $mobile="My Mobile is :".$mobile."<br>";
    $ad="My Address is :".$address."<br>";

    echo $firstname.$lastname.$mobile.$ad;
    
}

address("brijesh","pandey",981212121,"150 feet ring road rajkot");



?>