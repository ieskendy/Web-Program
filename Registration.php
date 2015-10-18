# Web-Program
<?php
$firstName = $_POST["first"];
$middleName = $_POST["middle"];
$lastName = $_POST["last"];
$gender = $_POST["gender"];
// Birthday
$month = $_POST["Month"];
$day= $_POST["Day"];
$year= $_POST["Year"];
// Program and student type
$program = $_POST["programs"];
$studentType= $_POST["Type"];
$address = $_POST["address"];
?>
<center><h1>Student Information</h1></center>
<link rel="stylesheet" type="text/css" href="Style.css"></center>
<center>First Name: <strong><?php echo $firstName; ?></strong><br /></center>
<center>Middle Name: <strong><?php echo $middleName; ?></strong><br /></center>
<center>Last Name: <strong><?php echo $lastName; ?></strong><br /></center>
<center>Gender: <strong><?php echo $gender; ?></strong><br /></center>
<center>Birthday: <strong><?php echo $month + " " + $day + " " + $year; ?></strong><br /></center>
<center>Program: <strong><?php echo $program; ?></strong><br /></center>
<center>Student Type: <strong><?php echo $studentType; ?></strong><br /></center>
<center>Address: <strong><?php echo $address; ?></strong><br /></center>
