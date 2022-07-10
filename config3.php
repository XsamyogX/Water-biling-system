<?php
if(isset($_POST['submit'])) {
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$amount = $_POST['amount'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$code = $_POST['code'];
		$cardname = $_POST['cardname'];
        $cardno = $_POST['cardno'];
        $expmonth = $_POST['expmonth'];
        $expyear = $_POST['expyear'];
        $cw = $_POST['cw'];
	

	

	// Database connection
	
	$conn = mysqli_connect('localhost','root','','payment');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql="INSERT INTO `info`(`fullname`, `email`, `amount`, `city`, `state`, `zipcode`, `card_name`,`card_number`,`exp_month`,`exp_year`,`cw`)
        VALUES ('$fullname','$email','$amount','$city','$state','$code','$cardname','$cardno','$expmonth','$expyear','$cw')" ;
        mysqli_query($conn, $sql);
		// echo $execval;
		echo "Payment sucessful...";
		$conn->close();
		header("Location: ");
		exit();
	}
}
?>