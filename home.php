
<?php
include "navbar.php";
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <?php
    $conn= mysqli_connect("localhost","root", "","phpassigment") or die("connection failed");
    $sql= "SELECT * FROM myinfo ";
      $result=    mysqli_query($conn,$sql) or die("query incorect");
      while($data= mysqli_fetch_array($result)){
    if(mysqli_num_rows($result) > 0 ){
    ?>
    <div style=" background: rgba(255, 255, 255, 0.2);backdrop-filter: blur(5px); " class="flashcard">
      <h1 style="position:absolute;left:110px; top:73px;width:250px; border-radius: 12px; background-color:coral; color:white; padding:22px; font-size:30px;" class="name">Name: <?php echo $data['name'] ?> </h1>
      <h2  style="position:absolute;right:110px; top:70px;width:240px;  border-radius: 12px; background-color:coral; color:white; padding:22px; font-size:30px;">Rollno: <?php echo $data['rollno'] ?></h2>
      <h2 id="address" style=" margin: 3px;
    padding: 6px;
    border: 2px solid back;
    border-radius: 12px; position:absolute; bottom:50px; left:100px; background-color:coral; color:white; padding:22px; font-size:30px;"> Addreess: <?php echo $data['address'] ?> </h2>

</div>
<?php
    }?>
    <?php } ?>
</body>
</html>