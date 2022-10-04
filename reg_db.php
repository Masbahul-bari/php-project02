<?php
$con = mysqli_connect("localhost","root","","Labfinal");
$a = $_POST['id'];
$b = $_POST['name'];
$c = $_POST['dep'];

$sql = "INSERT INTO info(EmployeeID,Name,Dept) VALUES('$a','$b','$c')";
mysqli_query($con,$sql);
echo "Successfully Registration";

?>
