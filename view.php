<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Report</title>
<style>
input[type='submit'],input[type='reset']{padding: 10px 25px 8px; color: #fff;background-color: #0067ab;}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
</style>
</head>
<center>
<h1>Records</h1>
<table border="2" cellspacing="5" cellpadding="10">
    <tr>
        <th>fName</th>
        <th>lname</th>
        <th>time</th>
    </tr>  
    <?php while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo $row['time']; ?></td>
    </tr>
    <?php } ?>
</table>
<a href="excel.php"><input type="submit" name="excel" value="Download Excel"></a>
</center>
</body>
</html>
