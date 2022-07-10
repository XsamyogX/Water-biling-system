



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
   <link rel="stylesheet" href="style.css">
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
       
    <div class="center">
    
        <h2>WATER BILLING SYSTEM</h2>
        <form action="config.php" method="POST">
            <div class="txt_field">
                <input type="text" id="username" name="username" required>
                <label for="username"> username</label>
            </div>
            <div class="txt_field">
                <input type="text" id="name" name="name" required>
                <label for="name"> name</label>
            </div>
            <div class="txt_field"> 
                <input type="tel" name="phonenumber" id=" Phone Number" required>
                <label for="Phone Number" >Phone Number</label>
            </div>
            <div class="txt_field"> 
                <input type="text" name="address" id="Address" required>
                <label for="Address" >Address</label>
            </div>
            <div class="txt_field">
                <input type="email" id="email" name="email" required>
                <label for="email"> email</label>
            </div>
            <div class="txt_field"> 
                <input type="password" name="password" id="password" required>
                <label for="password" > password</label>
            </div>
            <div class="Rates"> 
               <label for="Rates">Rates:</label><br>
               <select name="rates" id="rates" >
                   <option> --Select Rates--</option>
                   <option>Resident- 101</option>
                   <option>University/School-102</option>
                   <option>Industry/Business-103</option> 
               </select>
            </div>
            
            <input type="submit" value="Register" name="submit">
            <div class="signup_link">
               Have an account? <a href="home.html">Login Here</a>
            </div>
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