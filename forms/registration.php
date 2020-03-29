<?php

if(empty($_POST['submit']))
{
	echo "Form is not submitted!";
	exit;
}
	
$name = $_POST["name"];
$promotionCode = $_POST["promotioncode"];
$designatinlevel = $_POST["designatinlevel"];
$gender=$_POST["gender"];

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Insert Values
$sql = "INSERT INTO promotions.registrations(name,promotion_code,designation_level,gender) VALUES ('$name','$promotionCode','$designatinlevel','$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	$conn->close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

<html>
<body>

<h1>

Welcome <?php echo $name; ?>

</body>
</html>