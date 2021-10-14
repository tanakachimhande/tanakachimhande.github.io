<?php

include('process.php');
//Edit the record.

if(isset($_GET['edit'])){

    //$input=$_POST['item'];
    $edit=$_GET['edit'];


    $select=mysqli_query($conn,"SELECT* FROM task WHERE id='$edit'");

    while($row=mysqli_fetch_array($select)){

        $items=$row['tasks'];

    }
}

if(isset($_POST['update'])){


    $input=$_POST['item'];
    $edit=$_GET['edit'];
    
    $update="UPDATE task SET tasks='$input' WHERE id='$edit'";
    $result= mysqli_query($conn,$update);
    if($result){
        echo"<script type='text/javascript'>alert('Successfully updated')</script>";
        header('location:index.php');
    }
    else{
        echo"<script type='text/javascript'>alert('Failed to update Tanaka')</script>";
    }




}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootsrapstyle.css">
</head>
<body>

<!--App box-->

<div class="container">
    <div class="app-container">
        <div class="card">
            <div class="card-body">
                <p class="time"></p>
                <h4 class="card-title">To Do List Application</h4>
                <img id="bg-image" src="bg-image.jpg" alt="no image">
                <h4 class="card-title">The To Dos</h4><br>
                <div class="list-container">
                    <table id='table' class="table-bordered">
                         <tr id='thd'>
                             <th>Id</th>
                             <th>Items</th>
                             <th>Date</th>
                             <th>Check</th>
                             <th>Edit</th>
                             <th>Delete</th>
                         </tr>
                    <?php

                   include('process.php');

                   $select=mysqli_query($conn,"SELECT* FROM task");

                   while($row=mysqli_fetch_array($select))
                   {
                    ?>
                <tr>
                    <td><?php echo$row['id']?></td>
                    <td id='check'><?php echo$row['tasks']?></td>
                    <td><?php echo$row['dates']?></td>
                    <td><input id='checkbox' type='checkbox' name='checkbox'></td>
                    <td><a href='edit.php?edit=<?php echo$row['id']?>' class='btn btn-info'>Edit</a></td>
                    <td><a href='delete.php?delete=<?php echo$row['id']?>' class='btn btn-danger'>Delete</a></td>
                </tr>
                     
   

                <?php
                   }
                    
                    
    
                    
                    ?>
                    </table>
                </div><br>
                <form class="form" method="post">
                    <input type="text" placeholder="enter todos here..." class="list-input" name="item" autocomplete='off' required value='<?php echo$items?>'>
                    <button type="submit" name="update" class='btn btn-success'>Update</button>
                </form>
                 
            </div>
        </div>
    </div>
</div>
 


 






<script src="app.js"></script>
<script src="js/bootsrap.js"></script>
<script src="js/jquery.js"></script>   
</body>
</html>
