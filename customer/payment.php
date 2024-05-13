<?php
// Assuming the initial wallet balance is stored in a database table called 'wallet'
// Connect to the database
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "Estore";

// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//   die("Connectio
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $crypto = $_POST['crypto'];
    $totalCost = $_POST['total_cost'];

    // Deduct total cost from wallet balance
    $sql = "UPDATE wallet SET balance = balance - $totalCost WHERE id = 1"; // Assuming the wallet balance is stored in a row with id=1
    if ($conn->query($sql) === TRUE) {
        header("Location: index.html"); // Redirect back to the main page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
