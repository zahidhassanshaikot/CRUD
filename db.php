<?php
mysqli_connect("localhost","root","");
$conn=new PDO("mysql:host=localhost","root","");
$db=mysqli_select_db("conn", "my_db");
if(!$db){
    echo "Not Connected";
}else{
    echo "connected";
}

?>