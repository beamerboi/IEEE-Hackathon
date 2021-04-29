<?php
session_start();
 include('config.php');  
 $username = $_POST['email'];  
 $password = $_POST['password'];  
   
     //to prevent from mysqli injection  
     $username = stripcslashes($username);  
     $password = stripcslashes($password);  
     $username = mysqli_real_escape_string($db, $username);  
     $password = mysqli_real_escape_string($db, $password);  
   
     $sql = "select *from member where email = '$username' and password = '$password' and usertype='user' and hasApp='1'";  
     $query = "select *from member where email = '$username' and password = '$password' and usertype='admin'";  

     $result = mysqli_query($db, $sql);  
     $result2 = mysqli_query($db, $query);  

     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
     $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
     $count = mysqli_num_rows($result);  
     $count2 = mysqli_num_rows($result2);  

        
     if($count == 1 ){  
        $_SESSION['user'] = TRUE; 

        header("Location: landing-user.php");
    } 
    else if($count2 == 1){
        $_SESSION['admin'] = TRUE;
        header("Location: landing-admin.php");  
    } 
    else{  
        header("Location: login_1.php");  
    }     
?>  