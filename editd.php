<?php
$conn = mysqli_connect("localhost","root","","trip");


if(!isset($_GET['dsid']) || empty($_GET['dsid'])){
    header("location: display.php");
}


$editid= $_GET['dsid'];
$sql= "select * from trip where sno= '{$editid}' ";
$editq= mysqli_query($conn,$sql) or die(mysqli_error($conn));



//now we fetch that edited record
$show = mysqli_fetch_array($editq);

if($_POST){
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$uq = mysqli_query($conn,"update trip set name='{$name}', age='{$age}', gender='{$gender}', email='{$email}', phone='{$phone}' where sno='{$editid}' ") or die("Error".mysqli_error($conn));

if($uq){

 echo "<script>alert('Record Updated');window.location = 'display.php'</script>";

}
    
} 


?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<img class="bg" src="bg.jpg" alt="college photo">
<div class = "container">
    
    <form method="post">
            <input type="text" name="name" id="name" value="<?php echo $show['name']; ?>" placeholder="Enter your name">
            <input type="text" name="age" id="age" value="<?php echo $show['age']; ?>" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" value="<?php echo $show['gender']; ?>" placeholder="Enter your gender">
            <input type="email" name="email" id="email" value="<?php echo $show['email']; ?>" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" value="<?php echo $show['phone']; ?>" placeholder="Enter your phone number">
           
            <input type="submit"/>
    </form>
</div>
</body></html>