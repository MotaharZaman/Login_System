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
             $message = '<!doctype html>'.
                 '<html>'.
                 '<head>'.
                 '<meta charset="utf-8">'.
                 '<title> Login Success</title>'.
                 '<link href="bootstrap-4.min.css" rel="stylesheet" type="text/css">'.
                 '<link href="cover.css" rel="stylesheet" type="text/css">'.
                 '</head>'.
                 '<body style="min-height:100vh;">'.

                 '<div class="container bg-white">'.
                 '<div class="row">'.
                 '<div class="col-md-12">'.
                 '<div class="row padding-top-success">'.
                 '<div class="col-md-12 text-center">'.
                 '<img src="success.jpeg" alt="">'.
                 '<P class="text-center font-medium text-success">You are successfully logged in</P>'.
                 '</div>'.
                 '</div>'.
                 '</div>'.
                 '</div>'.
                 '</div>'.
                 '</body>'.
                 '<html>';
         }
         else{
             $message = '<!doctype html>'.
                 '<html>'.
                 '<head>'.
                 '<meta charset="utf-8">'.
                 '<title> Login Success</title>'.
                 '<link href="bootstrap-4.min.css" rel="stylesheet" type="text/css">'.
                 '<link href="cover.css" rel="stylesheet" type="text/css">'.
                 '</head>'.
                 '<body style="min-height:100vh;">'.

                 '<div class="container bg-white">'.
                 '<div class="row">'.
                 '<div class="col-md-12">'.
                 '<div class="row padding-top-success">'.
                 '<div class="col-md-12 text-center">'.
                 '<img src="success.jpeg" alt="">'.
                 '<P class="text-center font-medium text-success">Your Email is not valid</P>'.
                 '</div>'.
                 '</div>'.
                 '</div>'.
                 '</div>'.
                 '</div>'.
                 '</body>'.
                 '<html>';
         }
     }

 echo $message;
?>