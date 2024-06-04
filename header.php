

<?php
 $conn= mysqli_connect("localhost","root", "","phpassigment") or die("connection failed");
 session_start();

if(!isset($_SESSION['username'])){
    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    
</body>
</html>