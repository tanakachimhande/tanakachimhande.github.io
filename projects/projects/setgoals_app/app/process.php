
 <?php
  
 //Database connection

 $conn=mysqli_connect('localhost','root','','tasks');

 //if($conn=true){
    // echo"Connected successfully";
 //}
 //else{
   //  echo"failed to connect Tanaka".mysqli_error($conn);
 //}

 //Insert items into the Database

if(isset($_POST['submit'])){

    $input=$_POST['item'];
    $insert="INSERT INTO task(tasks)VALUES('$input')";
    $result=mysqli_query($conn,$insert);
    if($result){
        //echo"<script type='text/javascript'>alert('Data has been inserted')</script>";
        
    }
    else{
        echo"<script type='text/javascript'>alert('Failed to insert data Tanaka')</script>".mysqli_error($conn); 
    };
};

//Delete the record from the Database

 
 
 
 
 
 
 
 
 
 
 
 ?>


