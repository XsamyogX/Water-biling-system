<?php
$con = mysqli_connect("localhost","root","","register");
//host name, database username, password(not given) , datbasename.
if (mysqli_connect_errono()){
    echo "Failed to connect to MySQL: " . mysqli_connect_errono();
}
?>