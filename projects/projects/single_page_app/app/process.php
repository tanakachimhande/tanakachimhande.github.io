<?php

//Database connection

$conn=mysqlli_connect('localhost','root','','content');
if($conn=true){
    echo"Connected successfull";
}
else{
    echo"failed to connect Tanaka";
}


?>