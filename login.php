PHP:
<?php

  $conn = mysqli_connect('localhost', 'f1160035_moscow_vitte', 'HlDea4ki', 'f1160035_moscow_vitte');


  $username = $_POST['username'];
  $password = $_POST['password'];

  $login_query = "SELECT * FROM mv_users WHERE u_name='$username'";
  $login_result = mysqli_query($conn, $login_query);  

  if (mysqli_num_rows($login_result) == 1) {
    $user = mysqli_fetch_assoc($login_result);

    if (password_verify($password, $user['password'])) {

      session_start();
      $_SESSION['username'] = $user['username'];
      header("Location: /dashboard.php");
    } else {
      echo "";
    }
  } else {
    echo "no";
  }
?>