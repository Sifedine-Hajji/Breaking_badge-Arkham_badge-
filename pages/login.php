<?php

include_once('./components/functions.php');


if(!empty($_POST["email"])){   
if(login($_POST["email"],$_POST["password"])){
    echo'<p>log ok</p>';
    header("location:index.php");
}else{
    echo'<p>log pas ok</p>';
}




}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>login</title>
</head>
<body class="bodylogin">



 
<form method="POST">
                
        <div class="login"> 
             <h2 class="batman">Login</h2>  
               <div class="logs">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
               <input class="email1" type="email" name="email" placeholder="Email"></div>

               <div class="logs">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                   <input class="psw1" type="password" name="password" placeholder="Password"></div>
                   
               <div class="sub"> <button class="butlog" type="submit" name="subatman">Log In</button></div>
        </div>
</form>







</body>
</html>