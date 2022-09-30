<?php

function adminAccess(){
    if(!isset($_SESSION['user'])){
        header("Location: login.php");        
    }else{
        $role = $_SESSION['user']['role'];
        if($role != "Admin"){
            header("Location: login.php");        
        }
    }
}

function teacherAccess(){
    if(!isset($_SESSION['user'])){
        header("Location: login.php");        
    }
    else{
        $user = $_SESSION['user'];
        $role=$user['role'];
        if($role != "Teacher"){
            header("Location: login.php"); 
        }
        
    }
}

function studentAccess(){
    if(!isset($_SESSION['user'])){
        header("Location: login.php");        
    }else{
        $role = $_SESSION['user']['role'];
        if($role != "Student"){
            header("Location: login.php");    
        }
    }
}
?>