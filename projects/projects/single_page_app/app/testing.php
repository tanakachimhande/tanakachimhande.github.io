<?php
 //Database connection_aborted

$conn=mysqli_connect('localhost','root','','applogin');
//if($conn=true){
   // echo"conecteted successflully Tanaka wena zvazoita";
//}
//else{
   //echo"failed to connect Tanaka"; 
//}

//if(isset($_POST['login'])){

   // $username=$_POST['username'];
    //$password=$_POST['password'];

    //$insert="INSERT INTO loginn(username,password)VALUES('$username','$password')";
    //if(mysqli_query($conn,$insert)){
        //echo"registered successflully";
    //}
    //else{
     // echo"Failed to insert data Tanaka";
   // }
        
    
//};
if(isset($_POST['login'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

    $select=mysqli_query($conn,"SELECT* FROM loginn WHERE username='".$_POST['username']."' and password='".$_POST['password']."'");
    

    if(mysqli_fetch_assoc($select)){

        echo"<script type='text/javascript'>alert('Loged in successfylly as Tanaka')</script>";
        header('location:http://localhost:9090/dashboard/my-projects/single_page_app/app/home/home.php');
    }
    else{
        echo"<script type='text/javascript'>alert('Invalid username or password')</script>";
         
    }
}
else{
    //header('location:admin_login_updates.php');
}



 

?>
 