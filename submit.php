<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the plan parameter is set in the POST data
if(isset($_POST['plan'])) {
    // Get the selected plan and its price from the POST data
    $selected_plan = $_POST['plan'];
    $selected_price = $_POST['price'];
    
    // Insert the selected plan and its price into the database
    $sql = "INSERT INTO GymPlans (PlanName, Price) VALUES ('$selected_plan', '$selected_price')";

    if ($conn->query($sql) === TRUE) {
        echo "Plan selected successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "No plan selected!";
}

// Close the database connection
$conn->close();
?>
