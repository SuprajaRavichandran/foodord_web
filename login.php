<?php 

$host="localhost";
$user="root";
$password="";
$db="ourfoodproject";
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db); 

if(isset($_POST['name'])||isset($_POST['password'])){
    
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql="select * from register where name='".$name."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        header("location:home page.html");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Name (or) Password";
        exit();
    }
    
  
        
}
?>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" href="login.css"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </head>
    <body>
      <div class="bg-img">
      <div class="navbar">
    <ul>
        <li><a class="active" href="home page.html">Home</a></li>
        <li><a href="login.php">login</a></li>
        <li><a href="register.html">register</a></li>
        <li><a href="contact_form.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="cart.html">
          <div class="cart">
            <i class="bi bi-cart2"></i>
            <div id="cartAmount" class="cartAmount">0</div></li></a>
      </ul></div>
        <div class="container">
          <form method="post" action="#">
            <h2>LOGIN</h2>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>
            <label for="psw"><b>Password</b></label>
            <input type="Password" placeholder="Enter Password" name="password" required>
          <br>
            <a href="http://127.0.0.1:5500/Ref.html">
            <button type="submit" class="btn">Login</button></a>
             
            <div style= text-align:center>
              <p style="text-align:center">New user? <a href="register.html">Register</a>.</p>
              <p style="text-align:center">Need to loss weight? <a href="bmi.php">Know your BMI</a>.</p>
            </div>
           </form>
        </div>
      </div>
    </body>
</html>
