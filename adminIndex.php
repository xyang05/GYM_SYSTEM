<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="adminIndex.css">
</head>
<body>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="adminRegister.php">
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

      </div>
      <script src="script.js"></script>
      <?php 
    if(isset($_GET['alert'])){
        echo '<script>alert("' . $_GET['alert'] . '");</script>'; // Display alert dialog
    }
    ?>
</body>
</html>
