<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
   <link rel="stylesheet" href="home.css">
</head>

<body>
   <div class="container">
      <!-- The video -->
      <video autoplay muted loop id="myVideo">
         <source src="video.mp4" type="video/mp4">
      </video>
 
      <nav>
         <img src="logo.png" class="logo">
         <ul>
         <li><a href="home.php">Home</a></li>
         <li><a href="aboutus.html">About Us</a></li>
         <li><a href="C:\Users\Lalit\Desktop\cloud\login.html">Contact Us</a></li>
         <li><a href="stafflogin.html"></a></li>
         </ul>
      </nav>
      <div class="center">
    
         <h2>Login here</h2>
         <form action="config2.php" method="POST">
             <div class="txt_field">
                 <input type="text" id="username"name="username"  placeholder="username"required>
                 
            </div>
             <div class="txt_field"> 
                 <input type="password" name="password" id="password" placeholder="Password" required>
             </div>
             <div class="usertype" > 
                <label class="type">User Type:</label>
                  <select name="type">
                  <option> Select</option>
               
                  <option value="User">User</option>
                  <option value="Admin">Admin</option>
               </select>
           </div>

            <input type="submit" value="Login" name="login">
             <div class="signup_link">
                Not a member? <a href="Register.php">Sign Up</a>
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
                  <h4>CONTACT US</h4>
                  <form>
                     <label for="email"> Email</label><br>
                     <input type="email" name="email" class="input1"><br>
                     <label>Message</label><br>
                     <textarea name="review" rows="4" cols="40"></textarea><br>
                     <input type="button" value="Send" class="submit">
                  </form>
         </div>
   </div>

</body>
</html>
