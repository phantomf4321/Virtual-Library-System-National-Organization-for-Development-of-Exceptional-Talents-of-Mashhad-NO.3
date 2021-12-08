<?php
    $add=1.5;
    include 'database.php';
	$id=$_GET['id'];
    $sql="UPDATE student SET time=time+$add WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./time.php");

    }

?>