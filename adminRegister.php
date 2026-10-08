<?php 

include 'connect.php';

$alert_message = ""; // Initialize alert message

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkEmail="SELECT * From admins where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        $alert_message = "Email Address Already Exists !"; // Set alert message
     }
     else{
        $insertQuery="INSERT INTO admins(firstName,lastName,email,password)
                       VALUES ('$firstName','$lastName','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
                exit();
            }
            else{
                $alert_message = "Error: ".$conn->error; // Set alert message
            }
     }
}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=($password) ;
   
   $sql="SELECT * FROM admins WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: admin-dashboard.php");
    exit();
   }
   else{
    $alert_message = "Wrong email or password"; // Set alert message
   }

}

// Redirect back to index.php with alert message
header("Location: adminIndex.php?alert=".urlencode($alert_message));
exit();

?>
