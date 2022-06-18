<?php 
  require('dbCon.php');

  session_start();

  /* Functions */
  function pathTo($destination) {
    echo "<script>window.location.href = '$destination.php'</script>";
  }

  if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
    /* Set Default Invalid */
    $_SESSION['status'] = 'invalid';
  }

  if ($_SESSION['status'] == 'valid') {
    pathTo('dashboard');
  }
  
  if (isset($_POST['submit'])) {
    $username = trim($_POST['input_username']);
    $password = trim($_POST['input_password']);

    if (empty($username) || empty($password)) {
      echo "Enter Your Credentials";
    } else {
      $queryValidate = "SELECT * FROM tbl_gameuserinfo WHERE user_name = '$username' AND user_password = '$password'";
      $sqlValidate = mysqli_query($variable, $queryValidate);
      $rowValidate = mysqli_fetch_array($sqlValidate);

      if (mysqli_num_rows($sqlValidate) > 0) {
        $_SESSION['status'] = 'valid';
        $_SESSION['input_username'] = $rowValidate['input_username'];

        pathTo('dashboard');
      } else {
        $_SESSION['status'] = 'invalid';

        echo 'Invalid Credential';
      }
    }
  }
?>