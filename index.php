<?php
$insert = false;

if(isset($_POST['name'])){
        
//set connection
$server = "localhost";
$username = "root";
$password = "";

//create database connection
$con = mysqli_connect($server, $username, $password);


//check for connection seccuss
if(!$con){
    die("Failed connection!".mysqli_connecct_error());
}


//Collect post variables
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
//$desc=$_POST['desc'];
$sql = " INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `dt`) 
VALUES ('$name', '$age', '$gender', '$email', '$phone', 
current_timestamp())";




if($con->query($sql)==true){
    echo "<script>alert('data inserted');</script>";
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

//close databasse connection
$con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="college photo">
    <div class="container">
        <h1>Welcome To GEC Gandhinagar Trip Form</h1>
        <p class="p1">Fill below form to confirm your sit</p>
       
       <?php
        if($insert == true){
       echo " <p class='submitmsg'>Thanks for filling the form. Happy to see you in Trip</p>";
    

       echo "<a href='display.php' class='submitmsg'>Display inserted list</a>";
        }
       ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
            <button class="btn">Submit</button>
            
           
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
