
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
   <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
<div class="register-form">
<form class="form-container" action="register_user.php" method="post">
        <div>
            <table class="form">
            <tr>
                    <td>
                    <div class="mb-1">
                     <label class="form-label">Email</label>
                     <input type="email" class="form-control" name="input_email" required>
                        </div>
                    </td>
                </tr>
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
                     <input type="md5('$password')" class="form-control" name="input_password" required>
                        </div>
                    </td>
                </tr>
            

                <tr>
                    
                <td>
                    <div class="col"><input class="btn btn-success" name="submit" type="submit" value="Submit"><a class="btn btn-danger" href="login_form.php"> Back </a></div>
                   
                
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