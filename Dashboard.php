<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="Dashboard-style.css" />
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
  </head>


  <body>
    <div class="container">
      <nav>
        <ul>
          <li><a href="#" class="logo">
            <img src="Images/logo_main.jpeg" alt="logo">
            <span class="nav-item">DashBoard</span>
          </a></li>
          <li><a href="#">
            <i class="ri-home-5-fill"></i> 
            <span class="nav-item">Home</span>
          </a></li>
          <li><a href="profile.php">
            <i class="ri-user-fill"></i>
            <span class="nav-item">Profile</span>
          </a></li>
          <li><a href="classes.php">
            <i class="ri-git-repository-fill"></i>
            <span class="nav-item">Classes</span>
          </a></li>
          <li><a href="logout.php" class="logout">
            <i class="ri-logout-box-line"></i>
            <span class="nav-item">Log out</span>
          </a></li>
        </ul>
      </nav>
  
      <section class="main">
        <div class="main-top">
          <h1>Tough Fitness & Gym</h1>
        </div>
        <div class="main-skills">
          <div class="card">
            <img src="images/humphrey-muleba-LOA2mTj1vhc-unsplash.jpg" alt="logo" height="200px" width="350px"> 
          </div>
          <div class="card">
            <img src="Images/bruce-mars-gJtDg6WfMlQ-unsplash.jpg" alt="logo" height="200px" width="350px"> 
          </div>
          <div class="card">
            <img src="Images/jonathan-borba-zfPOelmDc-M-unsplash.jpg" alt="logo" height="200px" width="350px"> 
          </div>
          <div class="card">
            <img src="Images/danielle-cerullo-CQfNt66ttZM-unsplash.jpg" alt="logo" height="200px" width="350px"> 
          </div>
        </div>
  
        <section class="main-course">
          <h2>Choose your Plan</h2>
          <div class="course-box">


            <div class="course">
              <form action="payment.php" method="post"style="margin-left: 50px;">
              <div class="box" style="width: 130%;">
                <h3>Basic Plan</h3><br>
                <h5>₱500/month</h5><br>
                <p>Access to basic gym facilities</p>
                <input type="hidden" name="plan" value="Basic">
                <input type="hidden" name="price" value="500">
                <input type="submit" value="Join Now" style="top: 39%; left: 69%;">
              </div>
              </form>
              <form action="payment.php" method="post" style="margin-left: 75px;">
              <div class="box">
                <h3>Standard Plan</h3><br>
                <h5>₱1000/month</h5><br>
                <p>Access to standard gym facilities</p>
                <p>Equipment</p>
                <p>Additional classes</p>
                <input type="hidden" name="plan" value="Standard">
                <input type="hidden" name="price" value="1000">
                <input type="submit" value="Join Now" style="top: 21.5%;">
              </div>
              </form>
              <form action="payment.php" method="post" style="margin-left: 50px;">
              <div class="box">
                <h3>Premium Plan</h3><br>
                <h5>₱1500/month</h5><br>
                <p>Access to premium gym facilities</p>
                <p>Equipment</p>
                <p>Classes</p>
                <p>Personal training sessions.</p>
                <input type="hidden" name="plan" value="Premium">
                <input type="hidden" name="price" value="1500">
                <input type="submit" value="Join Now">
              </div>
              </form>
            </div>
          </div>
        </section>
      </section>
    </div>
  </body>
  </html>