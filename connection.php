<?php
$fname = "";
$lname ="";
$time ="";
$db = mysqli_connect('localhost', 'root', '', 'study_hall');
if (isset($_POST['submit'])){
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$time = $_POST['time'];
$query = "INSERT INTO `student` (`firstname`, `lastname`, `time`) VALUES ('$fname' , '$lname' , '$time')";
mysqli_query($db,$query);
header('location:form.php');
}
$sql = "SELECT * FROM student";
$result = mysqli_query($db,$sql);
?>