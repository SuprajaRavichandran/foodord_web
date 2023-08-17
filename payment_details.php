<?php
$conn = mysqli_connect('localhost','root', '','ourfoodproject');


$fname = $_POST['fname'];
$email = $_POST['email'];
$add = $_POST['add'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$credit = $_POST['credit'];
$expm = $_POST['expm'];
$expy = $_POST['expy'];
$cvv = $_POST['cvv'];

$sql="INSERT INTO `paymente`(`fname`,`email`,`add`,`city`,`state`,`zip`,`credit`,`expm`,`expy`,`cvv`)
        values('$fname','$email','$add','$city','$state','$zip','$credit','$expm','$expy','$cvv')";
    $rs=mysqli_query($conn,$sql);
    if($rs){
        header("location:index1.php");
    }
    else{
        die('Connection failed:'.$conn->connect_error);
    }
