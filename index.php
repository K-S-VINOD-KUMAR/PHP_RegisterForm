<?php 
$insert = false;
 if(isset($_POST['FirstName'])){
     $server="localhost";
     $username="root";
     $password="";

     $con = mysqli_connect($server, $username, $password);

     if(!$con){
         die("connection to this database failed due to".mysqli_connect_error());
     }

     $FirstName = $_POST['FirstName'];
     $LastName = $_POST['LastName'];
     $Mobile = $_POST['Mobile'];
     $Email = $_POST['Email'];
     $Password = $_POST['Password'];
     $ConfirmPassword = $_POST['ConfirmPassword'];
     $sql = "INSERT INTO `register`.`join` (`FirstName`, `LastName`, `Mobile`, `Email`, `Password`, `ConfirmPassword`, `datetime`) VALUES ('$FirstName', '$LastName', '$Mobile', '$Email', '$Password', '$ConfirmPassword', current_timestamp())";

     if($con->query($sql)==true){
         $insert = true;
     }
     else{
         Echo "ERROR: $sql <br> $con->error";
     }
     $con->close();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WinZcode</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <img src="mp1.jpg" class="bg" alt="bg">
<div class="container">
    <h1>REGISTERATION FORM</h1>
    <h2>Welcome to community of WinZcode register and grow with us!!!</h2>
    <div class="input">
        <form action="index.php" method="post">
        <input type="text" name="FirstName" id="FirstName" placeholder="Enter Your FirstName">
        <input type="text" name="LastName" id="LastName" placeholder="Enter Your LastName">
        <input type="tel" name="Mobile" id="Mobile" placeholder="Enter Your Mobile">
        <input type="text" name="Email" id="Email" placeholder="Enter Your Email">
        <input type="password" name="Password" id="Password" placeholder="Enter Your Password">
        <input type="password" name="ConfirmPassword" id="ConfirmPassword" placeholder="Enter Your Confirm Password">
        <button type="submit" class="btn">REGISTER</button>
    </div>
</form>
</div>
<?php 
if($insert == true){
echo "<h3 class='succes'>REGISTERED SUCCESFULLY</h3>";
}
?>
</body>
</html>