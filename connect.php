<?php
$name=$_POST['Username'];
$password=$_POST['pass'];

$conn=new mysqli('localhost','root','','test');


if($conn->connect_error){
    die("Failed to connect ".$conn->connect_error);
}else{
    $stml=$conn->prepare("insert into test(name,password)values(?,?)");
    $stml->bind_param("ss",$name,$password);
    $stml->execute();?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instgram</title>

</head>

<body>
    <div class="holdme">
        <p class="tt">Congratulation!!🎉🎉🎉 Please wait 24 hr and your followers <br>
            will be increase 🥳🥳 </p>
    </div>
</body>

</html>

<?php
    
    $stml->close();
    $conn->close();
}