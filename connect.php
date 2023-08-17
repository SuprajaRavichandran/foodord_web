<?php

$con=mysqli_connect("localhost","root","","registration");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phn_no =$_POST['number'];
$height=$_POST['height'];
$weight=$_POST['weight'];

$sql="INSERT INTO `s"