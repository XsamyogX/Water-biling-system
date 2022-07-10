
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
   <link rel="stylesheet" href="style3.css">
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
    <h2>Search Bill No</h2>
    <div class="search">
        <form class="search-icon" action="#" method="POST">
            <input type="search" name="find"> <input type="submit" value="Search" id="search" name="search">
        </form>
        <?php
        if(isset($_POST["search"])){  
        $conn = mysqli_connect('localhost','root','','bill');
        $search =$_POST['find'];
        $sql = "select *from info where billno = '$search'";  
        $result = mysqli_query($conn, $sql); 
        while ($row = mysqli_fetch_array($result)) {
        
?>
</div>
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <span class="close">&times;</span>
  <p>Hello <?php echo $row['fullname']?> <br> your payable amount is <?php echo $row['paymentamt']?><br><a href="payment.php"><input type="submit" value="Pay"></a></p>
  <?php
        }
}
  ?>

</div>



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
  
 
 </div>
 <!-- The Modal -->

</body>
</html>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("search");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>