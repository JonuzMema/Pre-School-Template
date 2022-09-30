<?php

$conn = mysqli_connect('localhost', 'root', '', 'sms');

if(!$conn){
    echo "Error occurred!<br>".mysqli_error();
}

?>
