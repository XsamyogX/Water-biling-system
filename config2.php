
<?php
if(isset($_POST["login"])){  
  $username = $_POST['username'];  
  $password = $_POST['password'];
  $usertype = $_POST['type'];

  $conn = mysqli_connect('localhost','root','','users');
      //to prevent from mysqli injection  
      $username = stripcslashes($username);  
      $password = stripcslashes($password);  
      $username = mysqli_real_escape_string($conn, $username);  
      $password = mysqli_real_escape_string($conn, $password);  
    
      $sql = "select *from info where username = '$username' and userpwd = '$password'";  
      $result = mysqli_query($conn, $sql);  
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      $count = mysqli_num_rows($result);  
        
      if($count == 1){ 
        if($usertype=='Admin'){ 
          if ($username== 'Admin'){
              header ("Location: staffhome.html");   
          }
          else{
            header ("Location: home.php");  
          }
        }
        else if($usertype=='User'){
          if($username!='Admin')
              $_SESSION["name"]=$_POST['user'];
              header ("Location: addclient.html");  
          }
          else{  
        
            header ("Location: home.php");  
        }   
        }
        
       
      else{  
        
          header ("Location: home.php");  
      }     
}


?>