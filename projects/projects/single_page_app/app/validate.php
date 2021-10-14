<?php
//Database connection_aborted

$conn=mysqli_connect('localhost','root','','applogin');
//if($conn=true){
    echo"<script type='text/javascript'>alert('Connected successflully')</srcipt>";
//}
//else{
    echo"<script type='text/javascript'>alert('Failed to  connect Tanaka!!')</srcipt>";
//}

echo"What is the issue now hey";
 

if(isset($_POST['login'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

    $select=mysqli_query($conn,"SELECT* FROM loginn WHERE username='$username',password='$password'");
    $query=mysqli_fetch_array($select);
    if($query){
        //header("location:home.php").mysqli_error($conn);
    }
    else{
        header("login.php");
    }
}






?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>testin the page</title>
 </head>
 <body>
     Why the page is not working as expected but will find the problem as soon as possible and let me find possible solutions now. Am a problem solver and will be guru soon when it comes to computer programming
 </body>
 </html>