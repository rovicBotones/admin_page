
<head>
   
   <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include ("dbCon.php");
$email=$_POST['input_email'];
$username=$_POST['input_username'];
$password=$_POST['input_password'];



$sql = "INSERT INTO`tbl_gameuserinfo` ( `user_email`, `user_name`, `user_password`) VALUES ('$email','$username','$password')";


if (empty($username) || empty($password) || empty($email)) {
   echo "<script type='text/javascript'>alert('You must Enter Your Details!');</script>";
 
}
else {
   $result=mysqli_query($variable, $sql);
   
   echo "<script type='text/javascript'>alert('Register succesfully');
   window.open('login_form.php', '_self');</script>";
}
  



?>

</body>
</html>

