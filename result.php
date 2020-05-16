<?php
     session_start();

     $email = "";
     $password = "";
     $message = "";

     if ( isset( $_POST['submit'] ) ) {
         $email = $_REQUEST['email'];
         $password = $_REQUEST['password'];
     }

     function validateEmail($email){
         return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? FALSE : TRUE;
     }

     if($email && $password){
         if(validateEmail($email)){
             $message = "Successfully Logged in";
         }
         else{
             $message = "Your email is not valid";
         }
     }

 echo "<p style='color:red'>$message</p>";
?>