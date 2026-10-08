<?php
// Include database connection
include 'connect.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Retrieve form data
$name = $_POST['name'];
$account_number = $_POST['account_number'];
$plan_name = $_POST['plan']; // Retrieve selected plan name from the form
$plan_price = $_POST['price']; // Retrieve selected plan price from the form
$email = $_POST['email']; // Retrieve user's email

// Check if the email field is not empty
if (!empty($email)) {
    // Prepare and execute SQL query to insert payment information into the database
    $stmt = $conn->prepare("INSERT INTO UserPayments (Name, Email, GCashNumber, PlanName, Price) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssd", $name, $email, $account_number, $plan_name, $plan_price);

    if ($stmt->execute()) {
        // Payment successfully stored in the database
        // Now, store user's name, email, and chosen plan in admins dashboard
        $stmt = $conn->prepare("INSERT INTO AdminDashboard (UserName, UserEmail, ChosenPlan) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $plan_name);
        $stmt->execute();

        // Store form data in session variables
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['account_number'] = $account_number;
        $_SESSION['plan_name'] = $plan_name;
        $_SESSION['plan_price'] = $plan_price;
        $_SESSION['user_email'] = $email;
        
        // Redirect to payment success page
        header("Location: payment-success.php");
        exit();
    } else {
        // Failed to store payment in the database
        echo "<h1>Payment Failed</h1>";
        echo "<p>There was an error processing your payment.</p>";
    }

    // Close statement
    $stmt->close();
} else {
    // Email field is empty, display an error message
    echo "<h1>Error</h1>";
    echo "<p>Email field cannot be empty.</p>";
}
}
