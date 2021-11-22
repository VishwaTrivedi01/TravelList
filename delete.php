<?php
$conn = mysqli_connect("localhost","root","","trip");

$sid=$_GET['did'];
echo $sid;
$q = mysqli_query($conn,"delete from trip where sno='$sid'") or die(mysqli_error($conn));

if($q){
    echo "<script>alert('Record Deleted');window.location = 'display.php'</script>";
}

?>