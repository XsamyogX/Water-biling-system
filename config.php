

<!-- using php for connecting to database and storing the detail
<?php
if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$name = $_POST['name'];
		$Phone_Number = $_POST['phonenumber'];
		$Address = $_POST['address'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$rate_type = $_POST['rates'];
	

	

	// Database connection
	
	$conn = mysqli_connect('localhost','root','','users');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql="INSERT INTO `info`(`username`, `name`, `phonenumber`, `address`, `email`, `userpwd`, `rates`)
        VALUES ('$username','$name','$Phone_Number','$Address','$email','$password','$rate_type')" ;
        mysqli_query($conn, $sql);
		// echo $execval;
		echo "Registration successfully...";
		$conn->close();
		header("Location: home.php");
		exit();
	}
}
?>