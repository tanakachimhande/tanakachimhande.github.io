<?php

include('testing.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootsrapstyle.css">
</head>
<body class='body'>
 <div class="container2">
     <div class="login-container">
         <h4 id='heading'><i class='fas fa-arrow-left'></i>Please login to continue</h4><br><br>
         <form class="form" method='post'>
             <input type="text" id="user" placeholder='username'name='username' autocomplete='off'>
             <input type="text" id="user" placeholder='password'name='password' autocomplete='off'><br><br>
             <button id="btn" class='btn btn-info' type='submit' name='login'>Login</button><br><br>
             <b>Forgot password?</b><a href='resetpass.php'><b>Click here || <a href='landing.php'>Back</a><b></a>
         </form>
     </div>
      
 </div>










<script src="js/main.js"></script>
<script src="js/bootsrap.js"></script>
<script src="js/jquery.js"></script>    
</body>
</html>
