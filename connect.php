$logemail = $_POST['logemail'];
	$logpass = $_POST['logpass'];
	$gender = $_POST['gender'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(logemail, logpass) values(?, ?)");
		$stmt->bind_param("ss", $logemail, $logpass);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();    
		$conn->close();
	}
?>
