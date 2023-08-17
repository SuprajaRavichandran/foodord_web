<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="container">
<form Style="width:500px">
    <div class="row">
        <div class="col">
                <h3 class="title">payment</h3>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="name" id="name" placeholder="mr. john deo">
                </div>
                <div class="inputBox">
                    <span>Amount to be Paid:</span>
                    <input type="text" name="amt" id="amt" placeholder="00000">
                </div>
        <input type="button" name="btn" id="btn" class="submit-btn" value="Pay Now" onclick="pay_now()"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function pay_now(){
        var name=jQuery('#name').val();
        var amt=jQuery('#amt').val();
         jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"amt="+amt+"&name="+name,
               success:function(result){
                   var options = {
                        "key": "rzp_test_M4yA3kv5POYBqk", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "Acme Corp",
                        "description": "Test Transaction",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="thank_you.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
</script>
</form>

</body>
</html>