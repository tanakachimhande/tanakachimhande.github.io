<?php?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Mini Calculator</title>
 	<link rel="stylesheet" type="text/css" href="css/bootsrapstyle.css">
 </head>
 <body>

 	<div class="container jumbotron">

 		<div>
 			<h5 class="text-center bg-danger">Tanaka!! You Can Do Some Calculations Here.</h5>
 		</div>

 		<div class="card pt-2 ml-20">
	 			<div class=" card card-body " style="width: 25%; text-align: cente;margin-right: auto;margin-left: auto;">
	 			    <h4 class="card-title text-center bg-primary">My Simple Calculator</h4>
	 			    <form method="get" class="form-group">
 	                <label>First Number</label>
 	                <input class="form-control" type="number" name="num1" placeholder="enter first number"><br>
 	                <label>Second Number</label>
 	                <input class="form-control" type="number" name="num2" placeholder="enter second number"><br><br>
 	                <select name="select">
 		                <option>+</option>
 		                <option>-</option>
 		                <option>/</option>
 		                <option>*</option>
 	                </select><b><u>| :Operations</u></b><br><br>
 	                <button class="btn btn-success" type="submit" name="submit">Calculate</button><br>
 	                <h5>The Answer is:</h5>
 	                </form>
 	                
 	                
 	                <?php

 	                session_start();

 	                if(isset($_GET['submit'])){

 	                	$num1=$_GET['num1'];
 	                    $num2=$_GET['num2'];
 	                    $operator=$_GET['select'];
 	                     

 	                    if($operator=='+')
 	                    {
 	                    
 	                       $add= $num1 + $num2;

 	                       echo "<h5 class='alert-info p-2'>$add</h5>";
 	                       //echo$num1 + $num2;
 	                           
 	                    }
 	                    elseif($operator=='-')
 	                    {
 	                    
 	                       $add= $num1 - $num2;

 	                       echo "<h5 class='alert-info p-2'>$add</h5>";
 	                       //echo$num1 + $num2;
 	                           
 	                    }
 	                    elseif($operator=='/')
 	                    {
 	                    
 	                       $add= $num1 / $num2;

 	                       echo "<h5 class='alert-primary p-2'>$add</h5>";
 	                       //echo$num1 + $num2;
 	                           
 	                    }
 	                    elseif($operator=='*')
 	                    {
 	                    
 	                       $add= $num1 * $num2;

 	                       echo "<h5 class='alert-success p-2'>$add</h5>";
 	                       //echo$num1 + $num2;
 	                           
 	                    }
 	                    else{

 	                    	echo "<h5 class='alert-danger'>$add</h5>";

 	                    }



 	                }


 	                ?>

  

                     

	 			     
	 			</div>
	 			
	 	</div>
	 	<div class="container">
		    <a class="text-center btn btn-danger" href="index.php"><b>| Back</b></a>
		 	 
	    </div>
	 	 
 	</div>

 <script src="js/bootsrap.js"></script>
<script src="js/jquery.js"></script>
 </body>
 </html>


 