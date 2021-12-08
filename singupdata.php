<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$class=$_POST['class'];
$phone=$_POST['phone'];

 echo "تقاضا با موفقيت براي مسئول سالن ارسال. در صورت تاييد با شما تماس گرفته خواهد شد!";


include 'database.php';
$sql="INSERT INTO student(firstname,lastname,class,phone) VALUES('$fname','$lname','$class','$phone')";


$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./singupfromadmin.php");
}
else{
     echo "Sorry We Can't Connect";
}

?>
