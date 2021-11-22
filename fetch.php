<?php
$conn = mysqli_connect("localhost","root","","trip");

$sql = "select * from trip";
$q = mysqli_query($conn,$sql) or die(mysqli_error($conn));

//below function show data as a numerical array
$row = mysqli_fetch_row($q);
print_r($row);
echo $row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[7];

$row = mysqli_fetch_array($q);
print_r($row);
echo $row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[7];
echo "<br>";
echo $row['sno'].$row['name'].$row['age'].$row['gender'].$row['email'].$row['phone'].$row['dt'];


?>