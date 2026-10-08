<?php
// Include database connection
include 'connect.php';

// Your other code here
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="Dashboard-admin-style.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="bootstrap-5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
        <div class="position-sticky">
          <div class="d-flex flex-column align-items-center p-3">
            <a class="navbar-brand" href="#">
              <img src="Images/logo_main.jpeg" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
              DashBoard
            </a>
          </div>
          <hr>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard-admin.php"><i class="ri-home-5-fill"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_profile.php"><i class="ri-user-fill"></i> Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminoruser.php"><i class="ri-logout-box-line"></i> Log out</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <section class="main">
          <h1>Admin Dashboard</h1>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Chosen Plan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // Fetch user details from the AdminDashboard table
              $sql = "SELECT UserName, UserEmail, ChosenPlan FROM AdminDashboard";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["UserName"] . "</td>";
                  echo "<td>" . $row["UserEmail"] . "</td>";
                  echo "<td>" . $row["ChosenPlan"] . "</td>";
                  echo "</tr>";
                }
              } else {
                echo "<tr><td colspan='3'>No users found</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </section>
      </main>
    </div>
  </div>

  <script src="bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

