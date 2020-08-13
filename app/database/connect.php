<?php 

$host = 'localhost';
$user = 'root';
$pass = '7436001';
$db_name = 'livingtv';
$conn = new MySQLi($host, $user, $pass, $db_name);
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$programs_category = $_POST['programs_category'];
// Attempt insert query execution
$sql = "INSERT INTO orders (first_name, last_name, email, phone, programs_category) VALUES ($first_name, $last_name, $email, $phone, $programs_category)";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>