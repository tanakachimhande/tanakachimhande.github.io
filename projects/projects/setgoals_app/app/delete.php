<?php

require_once('process.php');

//Delete the  record.

if(isset($_GET['delete'])){

    $delete=$_GET['delete'];
     $remove="DELETE FROM task WHERE id='$delete'";
     if(mysqli_query($conn,$remove)){
        echo"<script type='text/javascript'>alert('Data has been delete')</script>";
        header('location:index.php');
     }
     else{
        echo"<script type='text/javascript'>alert('Failed to delete the record Tanaka!!')</script>";

     }

}












?>