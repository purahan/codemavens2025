<?php
  include('includes/functions.php');
  if(!empty($_POST)) {
    if ($_POST['type'] == "login") {
      // Check connection
      if ($conn->connect_error) {
        echo '{"status": "error", "message": "Error connecting to website. Please try again."}';
      } else {
        $sql = "SELECT id, full_name, profile_pic, phone, dob, email, gender FROM `users` WHERE email='".$_POST['email']."' AND pwd=MD5('".$_POST['pwd']."')";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
          while($row = $result->fetch_assoc()) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row["full_name"];
            $_SESSION['email'] = $row["email"];
            $_SESSION['gender'] = $row["gender"];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['dob'] = $row['dob'];
            $_SESSION['pic'] = $row['profile_pic'];
            echo '{"status": "success"}';
          }
        } else {
          echo '{"status": "error", "message": "Username or Password is incorrect."}';
        }
      }
    }
    elseif ($_POST["type"] == "register") {
      $sql = "INSERT INTO `users` (full_name, email, pwd, phone, gender, dob, created_on, modified_on) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".md5($_POST['pwd'])."', '".$_POST['phone']."', '".$_POST['gender']."', '".$_POST['dob']."', '".date("Y-m-d")."', '".date("Y-m-d")."')";

      if ($conn->query($sql) === FALSE) {
        if ($conn->errno == 1062){
          echo '{"status": "error", "message": "You already have an account with this email id."}';
        } else{
          echo '{"status": "error", "message": "Error in saving data. Please try again."}';
        }
      } else {
        $id = mysqli_insert_id($conn);
        if($id) {
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['gender'] = $_POST["gender"];
            $_SESSION['phone'] = $_POST['phone'];
            $_SESSION['dob'] = $_POST['dob'];
        }
        echo '{"status": "success"}';
      }
    }
  }
?>