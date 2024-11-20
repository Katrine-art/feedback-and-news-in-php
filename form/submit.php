<?php
$servername = "localhost"; 
$username = "ck22962_submit"; 
$password = "r28VHSUz"; 
$dbname = "ck22962_submit"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];


$sql = "INSERT INTO feed (name, phone, address, email) 
        VALUES ('$name', '$phone', '$address', '$email')";


if ($conn->query($sql) === TRUE) {
    
    header("Location: view.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

