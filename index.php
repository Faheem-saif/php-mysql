

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body >

    <form id="loginbox" action="<?php $_SERVER['PHP_SELF'] ?>"; method= "POST">
<h1  style="color:coral;" >Login Form</h1>
<input name="username" type="text" placeholder="Enter Username"> <br>
<input  name="password" type="text"placeholder="Enter Password" >
<button id="loginbutton" name="login">
    Login
</button>

 

</form>
<?php
$hostname="localhost";
// include "home.php";
if(isset($_POST['login'])){
    $conn= mysqli_connect("localhost","root", "","phpassigment") or die("connection failed");

    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
 $sql= "SELECT name,password FROM myinfo WHERE name='$username' AND password='{$password}'";

   $result = mysqli_query($conn,$sql) or die("query failed");
   if(mysqli_num_rows($result)>0){
   while($row=mysqli_fetch_assoc($result)){
    session_start();
    $_SESSION['username']=$row['name'];
    $_SESSION['password']=$row['password'];

    header("Location:home.php");
   }
   }else {
    echo "<script>alert('Usernmae or password incorrect');</script>";

   }
}
?>

</body>

</html>