<?php
$servername="localhost";
$username="root";
$password="";
$dbname="database structures";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
    die ("connection failed:".mysqli_connect_error());
}
$sql="SELECT * FROM survey_tb3 WHERE admin_id='" . $_POST['Uname'] . "' AND password='" . $_POST['Psw'] . "'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['user_id'] = $row['user_id'];
$_SESSION['user_firstname']=$row['first_name'];
$_SESSION['user_lastname'] = $row['second_name'];
$_SESSION['user_email']=$row['e_mail'];
$_SESSION['user_mobile']=$row['mobile_no'];
$_SESSION['user_dob']=$row['date_of_birth'];
$_SESSION['user_gender']=$row['Gender'];
$_SESSION['user_atten']=$row['Atten'];
$_SESSIOIN['user_npass']=$row['n_password'];
$_SESSION['user_cpass']=$row['c_password'];
$_SESSION['r']=10;
header("location:ch pie.php");
} else {
    header("location:admin-login.php?log=fail");
}

mysqli_close($conn);
?>
<html>
<head>
<title>LOGIN</title>
</head>
<body bgcolor="gray" style="background-image:url('image.jpg');">

<table cellpadding="6" cellspacing="6" border="4">
<font size="5">

 <h2><center><font color="Block">REGISTER</center></h2><br></font>

<tr><td>Admin Name</td>
<td><?php echo $row['first_name'];?></td></tr></br>

<tr><td>Password</td>
<td>*****</td></tr></br>
</center>
</body>
</html>
