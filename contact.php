<?php
$name = $_REQUEST['txtName'];
$email   = $_REQUEST['txtEmail'];
$message = $_REQUEST['txtMessage'];
//database connection
include('dbConnect.php');

$sql = "INSERT into contact(name,email,message) values(:name,:email,:message)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":name",$name);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":message",$message);

$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Bootstrap CSS --> 
     <link rel="stylesheet" href="bootstrap.min.css">
     <link rel="stylesheet" href="sty.css">
     <link rel="stylesheet" href="font-awesome.min.css">
     <title></title>
     <style>
    .fa-check{
    font-size: 80px;
    color: #27ae60;
    font-weight: bold;
    height: 110px;
    width: 110px;
    border: 1px solid #27ae60;
    text-align: center;
    padding-top: 13px;
    border-radius: 50%;
    box-sizing: border-box;
    margin: 40px 0 0 0px;
    }
     </style>
</head>
<body>
  </body>
  </html>
  
    <script src="jquery-3.2.1.slim.min.js"></script>
    <script src="popper.min.js"></script>    
    <script src="bootstrap.min.js"></script>  
    