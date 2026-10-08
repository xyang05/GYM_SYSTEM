<?php
// Retrieve session data
session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$account_number = $_SESSION['account_number'];
$plan_name = $_SESSION['plan_name'];
$plan_price = $_SESSION['plan_price'];

// Output HTML with retrieved session data
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            color: #008000; /* Green color for success message */
        }
        p {
            margin-bottom: 10px;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .button-container button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .button-container button:hover {
            background-color: #45a049; /* Darker green on hover */
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Payment Successful</h1>
    <p><strong>Name:</strong> <?php echo $name; ?></p>

    <p><strong>GCash Number:</strong> <?php echo $account_number; ?></p>
    <p><strong>Selected Plan:</strong> <?php echo $plan_name; ?></p>
    <p><strong>Plan Price:</strong> <?php echo $plan_price; ?>/month</p>
        <div class="button-container">
            <button onclick="window.location.href = 'dashboard.php';">Go Back to Dashboard</button>
        </div>
    </div>
</body>
</html>
