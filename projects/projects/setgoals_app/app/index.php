 
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

<!--App Container-->

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

                <!--Displaying data using PHP-->

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
                    <td><input id = 'checkbox' type='checkbox' name='checkbox'></td>
                    <td><a href='edit.php?edit=<?php echo$row['id']?>' class='btn btn-info'>Edit</a></td>
                    <td><a href = 'delete.php?delete=<?php echo$row['id']?>' class='btn btn-danger'>Delete</a></td>
                </tr>

                <?php
                }
                    
                ?>
                    </table>
                </div><br>

                <!--Input fields-->

                <form class="form" method="post">
                     <a class='btn btn-danger' href='http://localhost:9090/dashboard/my-projects/single_page_app/app/landing.php'>BACK</a>
                    <input type="text" placeholder="enter items here..." class="list-input" name="item" autocomplete='off' required>
                    <button type="submit" name="submit" class='btn btn-success'>Add</button>
                </form>
                 
            </div>
        </div>
    </div>
    <hr class="line">
</div>
 
<!--Js connections-->

<script src="app.js"></script>
<script src="js/bootsrap.js"></script>
<script src="js/jquery.js"></script>   
</body>
</html>
