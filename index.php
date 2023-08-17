<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style1.css">
    <title>Check out</title>

</head>
<body>
 <div class="container">
    <form action="payment_details.php" method="post">
        <div class="row">
            <div class="col">
                <h3 class="title">billing address</h3>
                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text"  name="fname"  placeholder="john deo">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email"name="email"  placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="add"placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text"name="city" placeholder="mumbai">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text"name="state" placeholder="india">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text"name="zip" placeholder="123 456">
                    </div>
                </div>
            </div>
            <div class="col">
            <h3 class="title">Payment Details</h3>
                
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="text"name="credit"  placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text"name="expm" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="text" name="expy" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv"   placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div><br>
        <a href="http://127.0.0.1:5500/Ref.html">
            <button type="submit" class="submit-btn">Check Out</button></a>

        
</form>
</div>    
    
</body>
</html>

