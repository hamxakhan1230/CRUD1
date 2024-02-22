<?php
$con = new mysqli('localhost','root','','crud');
if($con){
    echo 'connection is successful';
}else{
    echo 'connection is not successful';
}
?>