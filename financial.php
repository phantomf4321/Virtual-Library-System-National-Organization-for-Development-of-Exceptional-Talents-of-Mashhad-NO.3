  <?php
        include 'database.php';
        $sql="SELECT * FROM student";
        $result=mysqli_query($conn, $sql);

        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $fname=$row['firstname'];
				$lname=$row['lastname'];
				$class=$row['class'];
				$phone=$row['phone'];
				
				
				
				$sql="INSERT INTO financial(firstname,lastname,class,phone) VALUES('$fname','$lname','$class','$phone')";


$result=mysqli_query($conn, $sql);

if($result){
}
else{
     echo "Sorry We Can't Connect";
}

            


                
            }
        }
    ?>