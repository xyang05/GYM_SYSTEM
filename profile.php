
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    
                </button>
                <div class="sidebar-logo">
                    <a href="#">Tough Fitness and Gym</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                       
                        <span>Task</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        
                        <span>Notification</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <main class="profile-info">
              <section style="background-color: #eee;">
                <div class="container py-5">
                  <div class="row">
                    <div class="col">
                      <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                      </nav>
                    </div>
                  </div>
              
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card mb-4">
                      <div class="card-body text-center">
    <img src="Images/avat.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
    <h5 class="my-3">Julian Sedo</h5>
    <p class="text-muted mb-1">User</p>
</div>
                      </div>
                      <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                          <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                              <i class="fas fa-globe fa-lg text-warning"></i>
                              <p class="mb-0"><i class='bx bxl-facebook'></i>Facebook</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                              <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                              <p class="mb-0"><i class='bx bxl-instagram' style='color:#cf1798' ></i>Instagram</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                              <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                              <p class="mb-0"><i class='bx bxl-twitter' style='color:#8f3838' ></i>Twitter</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                              <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                              <p class="mb-0"><i class='bx bxl-linkedin' style='color:#321b86' ></i>Linkedin</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="card mb-4">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">Julian Sedo</p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">Julian@gmail.com</p>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </main>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start ">
                            <a class="text-body-secondary" href=" #">
                                <strong>Tough Fitness & Gym</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>