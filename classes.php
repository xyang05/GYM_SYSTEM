<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="classes-style.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.timetable {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  background-color: rgb(132, 174, 214);
}

.header {
  text-align: center;
  margin-bottom: 20px;
}

.timetable-grid {
  display: grid;
  grid-template-columns: auto repeat(3, 1fr); /* Adjust the number of days */
  grid-gap: 5px;
  
}

.time-slots,
.days {
  display: flex;
  flex-direction: column;
}

.time-slot,
.day {
  text-align: center;
  border: 1px solid #ccc;
  padding: 10px;
}
</style>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                    <img src="Images/logo_main.jpeg" alt="logo">
                    <span class="nav-item">DashBoard</span>
                </a></li>
                <li><a href="Dashboard.php">
                    <i class="ri-home-5-fill"></i> 
                    <span class="nav-item">Home</span>
                </a></li>
                <li><a href="#">
                    <i class="ri-user-fill"></i>
                    <span class="nav-item">Profile</span>
                </a></li>
                <li><a href="#">
                    <i class="ri-git-repository-fill"></i>
                    <span class="nav-item">Classes</span>
                </a></li>
                <li><a href="#">
                <li><a href="logout.php" class="logout">
                    <i class="ri-logout-box-line"></i>
                    <span class="nav-item">Log out</span>
                </a></li>
            </ul>
        </nav>
  
        <div class="timetable">
        <div class="header">
          <h1>Classes Schedule</h1>
        </div>
        <div class="timetable-grid">
          <div class="time-slots">
            <div class="time-slot" style="font-weight: bolder;">Plan</div>
            <div class="time-slot">Basic Plan</div>
            
            <!-- Add more time slots here -->
          </div>
          <div class="days">
            <div class="day" style="font-weight: bolder;">Day</div>
            <div class="day">Monday</div>
            <div class="day">Tuesday</div>
            <div class="day">Thursday</div>
            <div class="day">Friday</div>
            <!-- Add more days and their corresponding events here -->
          </div>
          <div class="Time">
            <div class="day" style="font-weight: bolder;">Exercises</div>
            <div class="day">Physical Fitness</div>
            <div class="day">Strength</div>
            <div class="day">Flexibility</div>
            <div class="day">Cardio Workout</div>
          <!-- Add more rows and columns as needed for your timetable -->
        </div>
        <div class="Trainer">
            <div class="day" style="font-weight: bolder;">Trainer</div>
            <div class="day">Jisun Castro</div>
      </div>
      <br>
      <br>
        </div>
        <div class="timetable-grid">
          <div class="time-slots">
            <div class="time-slot" style="font-weight: bolder;">Plan</div>
            <div class="time-slot">Standard Plan</div>
            
            <!-- Add more time slots here -->
          </div>
          <div class="days">
            <div class="day" style="font-weight: bolder;">Day</div>
            <div class="day">Wednesday</div>
            <div class="day">Thursday</div>
            <div class="day">Saturday</div>
            <div class="day">Sunday</div>
            <!-- Add more days and their corresponding events here -->
          </div>
          <div class="Time">
            <div class="day" style="font-weight: bolder;">Exercises</div>
            <div class="day">Physical Fitness</div>
            <div class="day">Strength</div>
            <div class="day">Flexibility</div>
            <div class="day">Cardio Workout</div>
          <!-- Add more rows and columns as needed for your timetable -->
        </div>
        <div class="Trainer">
            <div class="day" style="font-weight: bolder;">Trainer</div>
            <div class="day">Julian Blaze</div>
      </div>
      <br>
      <br>
    </div>
    <div class="timetable-grid">
          <div class="time-slots">
            <div class="time-slot" style="font-weight: bolder;">Plan</div>
            <div class="time-slot">Premium Plan</div>
            
            <!-- Add more time slots here -->
          </div>
          <div class="days">
            <div class="day" style="font-weight: bolder;">Day</div>
            <div class="day">Sunday</div>
            <div class="day">Monday</div>
            <div class="day">Wednesday</div>
            <div class="day">Thursday</div>
            <!-- Add more days and their corresponding events here -->
          </div>
          <div class="Time">
            <div class="day" style="font-weight: bolder;">Exercises</div>
            <div class="day">Physical Fitness</div>
            <div class="day">Strength</div>
            <div class="day">Flexibility</div>
            <div class="day">Cardio Workout</div>
          <!-- Add more rows and columns as needed for your timetable -->
        </div>
        <div class="Trainer">
            <div class="day" style="font-weight: bolder;">Trainer</div>
            <div class="day">Noel Leon</div>
      </div>
</body>
</html>
