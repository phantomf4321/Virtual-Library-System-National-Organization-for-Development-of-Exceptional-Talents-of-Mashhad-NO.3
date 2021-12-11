<?php
require_once ('connection.php');
$sql = "SELECT * FROM student";
$result = mysqli_query($db, $sql);
$output ='<table>
<tr>
<th align = "center">fName</th>
<th align = "center">lName</th>
<th align = "center">Time</th>
</tr>';
while ($excel = mysqli_fetch_assoc($result)) 
{
    $output.='<tr>
    <th align = "center">'.$excel['id'].'</th>
    <th align = "center">'.$excel['firstname'].'</th>
    <th align = "center">'.$excel['lastname'].'</th>
    <th align = "center">'.$excel['time'].'</th>
    </tr>';
}
$output.='</table>';
header('Content-Type:aplication/xls');
header('Content-Disposition:attachment;filename=excel.xls');
echo $output;
?>