<?php
if(isset($_POST['Name'])){
$server="localhost";
$username="root";
$password="";

$dbname="student_details";

$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con){
    die("Connection to this database failed due to " . mysqli_connect_error());
}
$name=$_POST['Name'];
$gender=$_POST['Gender'];
$contact=$_POST['Contact'];
$mail=$_POST['Mail_ID'];
$sql="INSERT INTO `student_details`.`GOA_TRIP`(`Name`,`Gender`,`Contact`,`Mail ID`) values('$name','$gender','$contact','$mail')";
if($con->query($sql)==true){
    echo "<h1 style='color: red;'>Thanks for your Registration</h1>";
    // echo "We will contact you Shortly";
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOA_trip</title>
</head>
<body style="background-image:url('https://lh5.googleusercontent.com/p/AF1QipNdh6s-FIUe1bNNbrZ-N3jxuj-UFJQ0fsvQHhkZ=w540-h312-n-k-no');background-repeat: no-repeat;background-size: cover;">
<div class="box">
    <h1>WELCOME TO GO DEEP IN THE GLORY OF GOA!!!</h1><br><br>
    <P>FILL THE DETAILS TO GET YOURSELF IN THE DIVE</p><br><br>
    <form method="POST" action="GOA_TRIP.php" >
       <label>Name</label> <input type="Name" name="Name"><br><br>
       <label>Gender </label><input type="text" name="Gender"><br><br>
       <label>Contact</label> <input type="number" name="Contact" placeholder="xxxxxxxxxx"><br><br>
       <label>Mail ID</label> <input type="email" name="Mail_ID"><br><br>
<input type="submit" class="btn"><br><br>
</form>
</div>
</body>
</html>
