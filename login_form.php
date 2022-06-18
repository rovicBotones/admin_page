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
        $_SESSION['input_username'] = //$rowValidate['input_username'];
        
        pathTo('dashboard');
      } else {
        $_SESSION['status'] = 'invalid';

        echo 'Invalid Credential';
      }
    }
  }
?>

<html>

<head>
    
    <title>Form</title>
   <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
<div class="register-form">
<form class="form-container" action="login_form.php" method="post">
        <div>
            <table class="form">
           
                <tr>
                    <td>
                    <div class="mb-1">
                     <label class="form-label">Username</label>
                     <input type="text" class="form-control" name="input_username" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="mb-1">
                     <label class="form-label">Password</label>
                     <input type="password" class="form-control" name="input_password" required>
                        </div>
                    </td>
                </tr>
            
                <tr>
                    <td>
                    <p>New Here? Create one <a href="register_form.php">Here </a></p>
                
                    </td>
                
                </tr>
                <tr>
                    
                <td>
                    <div class="col"><input class="btn btn-success" name="submit" type="submit" value="Submit"><a class="btn btn-danger" href="index.php">Back
             </a></div>
                    
                
                    </td>
                </tr>

                <br><br>


        </div>


        </table>


    </form>




</div>
    
    </table>






</body>

</html>