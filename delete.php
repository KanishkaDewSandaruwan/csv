<?php 
$con = mysqli_connect("localhost","root","","kibblerz");
$id = $_REQUEST['detailid'];

$querygetcode="SELECT  * FROM details where detailid='".$id."'";
$catresult=mysqli_query($con,$querygetcode);
$result_row=mysqli_fetch_assoc($catresult);
$a=$result_row['detailid'];

$query1="DELETE FROM details WHERE detailid='$a '";
mysqli_query($con,$query1);

header('location:index.php');

 ?>