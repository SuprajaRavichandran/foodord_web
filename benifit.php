<?php
 {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    //database connection
    $conn = new mysqli('localhost', 'root', '', 'ourfoodproject');
    if($conn->connect_error){
        die('connection failed:'.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into register(name,email,password,number)
        values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$password,$number);
    $stmt->execute();
    header("location:home page.html");
    $stmt->close();
    $conn->close();
}
 }
 ?>