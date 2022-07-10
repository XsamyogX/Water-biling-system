<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
   <link rel="stylesheet" href="aboutus.css">
</head>

<body>
       <nav>
         <img src="logo.png" class="logo">
         <ul>
         <li><a href="home.html">Home</a></li>
         <li><a href="aboutus.html">About Us</a></li>
         <li><a href="# Bottom">Contact Us</a></li>
         </ul>
      </nav>
        
      <div>
        <div class="payment">
            <div class="payment-left">
               <h4>BILLING INFORMATION</h4>
               <form action="cofig3.php" method="POST">
                   <p>Full Name:</p>
                   <input type="text" name="fullname">
                   <p>Email:</p>
                   <input type="email" name="email">
                   <p>Amount:</p>
                   <input type="tel" name="amount">
                   <p>City:</p>
                   <input type="text" name="city">
                   <p>State:</p>
                   <input type="text" name="state">
                   <p>Zip Code:</p>
                   <input type="tel" name="code">
               </form>
            </div>
            <div class="payment-right">
               <h4>PAYMENT</h4>
               
               <form action="config3.php" method="POST">
               <p> Cards Accepted</p>
                <p>Name On Card:</p>
                <input type="text" name="cardname">
                <p>Debit Card Number:</p>
                <input type="tel" name="cardno">
                <p>Exp Month:</p>
                <input type="date" name="expmonth">
                <p>Exp Year:</p>
                <input type="date" name="expyear">
                <p>CW:</p>
                <input type="tel" name="cw">
            </form>
            </div>
            <form action="config3.php" method="POST">
            <input type="submit" value="Submit"class="button">
            </form>
        </div>  
        
      <div class="footer">
         <div class="footer-left">
            <img src="" class="footer-img">
            <img src="insta.jpg" class="footer-img"> <br>
            WaterBillingSystem©2022
         </div>
         <div class="footer-right">
            <h3>CONTACT US</h3>
            <form>
               <label for="email"> Email</label><br>
               <input type="email" name="email" class="input1"><br>
               <label>Message</label><br>
               <textarea name="review" rows="4" cols="40">
  
               </textarea>
                <br>
               <input type="submit" value="Send" class="submit">
            </form>
         </div>
    </div> 
</body>
</html>
