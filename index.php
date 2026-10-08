<?php
// Include database connection and other necessary files

// Check if the sign-up form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signUp'])) {
    // Retrieve form data
    $first_name = $_POST['fName'];
    $last_name = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform necessary validations

    // Insert user data into the database
    // Your code to insert data into the database goes here

    // After successfully registering the user and inserting their data into the database
    // Concatenate first name and last name into full name

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="login-signup.css">
</head>
<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname"></label>
        </div>
        <div class="input-group">
           
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName"></label>
        </div>
        <div class="input-group">
            
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email"></label>
        </div>
        <div class="input-group">
            
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password"></label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
          <div class="input-group">
             
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email"></label>
          </div>
          <div class="input-group">
             
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password"></label>
          </div>
          <p class="recover">
            <a href="#"></a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>

        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
      </div>
      <script src="script.js"></script>
      <?php 
    if(isset($_GET['alert'])){
        echo '<script>alert("' . $_GET['alert'] . '");</script>'; // Display alert dialog
    }
    
    ?>
    
</body>
</html>
