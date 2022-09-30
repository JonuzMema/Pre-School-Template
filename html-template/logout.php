<?php
require "config.php";
if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
}
header("Location: main_index.php");
?>