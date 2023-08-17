<?php
 
    if(isset($fname)|| isset($email)||isset($add)||isset($city)||isset($state)||isset($zip)
    ||isset($credit)||isset($expm)||isset($expy)||isset($cvv)){
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
}
    //database connection
    $conn = new mysqli('localhost','root', '','ourfoodproject');
    if($conn->connect_error){
        die('Connection failed:'.$conn->connect_error);
    }
    else{
        $sql="insert into paymente(`fname`,`email`,`add`,`city`,`state`,`zip`,`credit`,`expm`,`expy`,`cvv`)
        values'('$fname','$email','$add','$city','$state','$zip','$credit','$expm','$expy','$cvv')";
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        echo('payment successfull..');
        $stmt->close();
        $conn->close();
}
