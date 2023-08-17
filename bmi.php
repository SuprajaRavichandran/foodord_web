<?php include 'bmi_header.php'; ?>
<?php 
    $errh = $errw = $errg = "";
    $height = $weight = "";
    $bmipass = "";
    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST['height'])) {
            $errh = "<span style='color:#ed4337; font-size:17px; display:block'>Height is requried</span>";
        } else {
            $height = validate($_POST['height']);
        }
    
        if (empty($_POST['weight'])) {
            $errw = "<span style='color:#ed4337; font-size:17px; display:block'>Weight is requried</span>";
        } else {
            $weight = validate($_POST['weight']);
        }

        if (empty($_POST['height'] && $_POST['weight'])) {
            echo "";
        } else {
            $bmi = ($weight / ($height * $height));
            $bmipass = $bmi;
        }
    }
    {
   

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
        $stmt->close();
        $conn->close();
    }
     }
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<h2>Check Your BMI</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"method="post">
    <div class="section1">
        <span>Enter Your Height : </span>
        <input type="text" name="height" autocomplete="off" placeholder="Meter"><?php echo $errh; ?>
    </div>
    
    <div class="section2">
        <span>Enter Your weight : </span>
        <input type="text" name="weight" autocomplete="off" placeholder="kilogram"><?php echo $errw; ?>
    </div>    
    <div class="submit">
        <input type="submit" name="submit" value="Check BMI">
        <input type="reset" value="Clear">
    </div>
    
</form>

<?php
    error_reporting(0);
        echo "<span class='pass'>Your BMI is : ". number_format($bmipass , 2) ."</span>";
    if (isset($_POST['submit'])){
        if ($bmipass >= 13.6 && $bmipass <= 18.5) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px ;margin-right:70px'><a href='bmi1.html'><button> Low body weight. You need to gain weight by eating moderately.</button></a></span>";?>
            <img src="bmi.jpeg" class="six"><?php
        } elseif ($bmipass > 18.5 && $bmipass < 24.9) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:70px'><a href='bmi2.html'><button> The standard of good health.</button></a></span>";?>
            <img src="bmi.jpeg" class="six"><?php
        } elseif ($bmipass > 25 && $bmipass < 29.9) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:70px'> <a href='bmi3.html'><button>Excess body weight. Exercise needs to reduce excess weight.</button></a></span>";?>
            <img src="bmi.jpeg" class="six"><?php
        } elseif ($bmipass > 30 && $bmipass < 34.9) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:70px'><a href='bmi4.html'><button> The first stage of obesity. It is necessary to choose food and exercise.</button></a></span>";?>
            <img src="bmi.jpeg" class="six"><?php
        } elseif ($bmipass > 35 && $bmipass < 39.9) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:70px'> <a href='bmi5.html'><button>The second stage of obesity. Moderate diet and exercise are required.</button></a></span>";?>
            <img src="bmi.jpeg" class="six"><?php
        } elseif ($bmipass >= 40) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:70px'> <a href='bmi6.html'><button>Excess fat.<b style='color:#ed4337'> Fear of death</b>.</button></a> Need a doctor advice.</span>";?>
            <img src="bmi.jpeg" class="six"><?php
        }
    } else {
        echo "";
    }
?>

<?php include 'bmi_footer.php'; ?>

