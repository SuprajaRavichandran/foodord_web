<?php
$conn = mysqli_connect('localhost','root', '','ourfoodproject');


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$subject = $_POST['subject'];

$sql="INSERT INTO `contactt`(`firstname`,`lastname`,`country`,`subject`)
        values('$firstname','$lastname','$country','$subject')";
    $rs=mysqli_query($conn,$sql);
    if($rs){
        echo("successfull");
    }
    else{
        die('Connection failed:'.$conn->connect_error);
    }
