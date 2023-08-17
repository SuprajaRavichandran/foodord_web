<?php
 {
   
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $bmipass = $_POST['bmipass'];
    $bmi = $_POST['bmi'];
    //database connection
    $conn = new mysqli('localhost', 'root', '', 'ourfoodproject');
    if($conn->connect_error){
        die('connection failed:'.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into bmi(height,weight,bmipass,bmi)
        values(?,?,?,?)");
    $stmt->bind_param("ssss",$height,$weight,$bmipass,$bmi);
    $stmt->execute();
    header("location:home page.html");
    $stmt->close();
    $conn->close();
}
 }
 ?>