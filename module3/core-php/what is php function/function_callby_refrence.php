<?php
function display(&$fname) //&$fname call as a reference
{
    $firstname="My firstname is :Brijesh";
    echo $firstname."<br>";
}
$lastname="My lastname is :Pandey";
display($fname);
echo $lastname;

?>