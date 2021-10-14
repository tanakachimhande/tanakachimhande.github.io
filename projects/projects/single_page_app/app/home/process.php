<?php

//Database connection

$conn=mysqli_connect('localhost','root','','content');
//if($conn=true){
    //echo"Connected successfull";
//}
//else{
   // echo"failed to connect Tanaka";
//}

//Inserting content into the Database

if(isset($_POST['update'])){
    
    $topic=$_POST['topic'];
    $content=$_POST['content'];
    $comment=$_POST['comment'];

    $insert="INSERT INTO contents(topics,contentss,comments)VALUE('$topic','$content','$comment')";
    $query=mysqli_query($conn,$insert);
    if($query){
        echo"<script type='text/javascript'>alert('Data has been inserted')</script>";
    }
    else{
        echo"<script type='text/javascript'>alert('Failed to insert data Tanaka!!')</script>".mysqli_error($conn);
    }
}

//Displaying  

 





?>