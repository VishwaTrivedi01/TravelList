<?php

$conn = mysqli_connect("localhost","root","","trip");

$sql = "select * from trip";
$q = mysqli_query($conn,$sql) or die(mysqli_error($conn));

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p class=l1>Below your friends also join you in this trip:</p>
    <div class="container">
       <table>
       <tr>
        <th>Sno</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Date</th>
        <th>Action</th>
        </tr>
        <?php 
        while($row=mysqli_fetch_array($q)){
        echo "<tr>";
        
         echo "<td>{$row['sno']}</td>";
         echo "<td>{$row['name']}</td>";
         echo "<td>{$row['age']}</td>";
         echo "<td>{$row['gender']}</td>";
         echo "<td>{$row['email']}</td>";
         echo "<td>{$row['phone']}</td>";
         echo "<td>{$row['dt']}</td>";
         echo "<td><a href='editd.php?dsid={$row['sno']}'>Edit</a> | <a href='delete.php?did={$row['sno']}'>Delete</a></td>";   
        echo "<tr>"
        ;}
        ?>
        </table><br>
                <a href='index.php'>Add Record</a>
        </div>
            

 <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <img src="img2.jpg" alt="" width="100%" height="80%">
      </div>
      <div class="col-sm-6 p-5">
        <p class="text-center">Enjoy your ideal trip!!!</p>
        <p class="text-center">We travel through train with full of games.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <img src="img3.jpg" alt="" width="100%" height="80%">
      </div>
      <div class="col-sm-6 p-5">
        <p class="text-center">Let's see the beauty of mountains</p>
        <p class="text-center">will provide you food and stay facility</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <img src="img4.jpg" alt="" width="100%" height="80%">
      </div>
      <div class="col-sm-6 p-5">
        <p class="text-center">Shout out for our helping members</p>
        <p class="text-center">Then let's travel together!</p>
      </div>
    </div>
  </div>
   <!-- footer --> 
   <footer style="background-color: black; height: 20%; color: white; text-align:center;">
   <br>
       <p> If any query contact the leader of trip group</p><br>
       <p> Contact No. 234543234</p>
   
        </footer>
</body>
</html>