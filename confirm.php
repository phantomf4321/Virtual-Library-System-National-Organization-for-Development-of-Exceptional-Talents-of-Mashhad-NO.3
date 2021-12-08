<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$class=$_POST['class'];
$phone=$_POST['phone'];

// echo "Name Is".$name ."Phone Number:".$phone;


include 'database.php';
$sql="INSERT INTO student(firstname,lastname,class,phone) VALUES('$fname','$lname','$class','$phone')";

    include 'database.php';
    $id=$_GET['id'];

    $sql="DELETE FROM user WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./accept.php");
    }


?>