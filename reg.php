


<?php
$servername="localhost";
$username="root";
$password="";
$dbname="database structures";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
    die ("connection failed:".mysqli_connect_error());
}
$sql="INSERT into survey_tb1(first_name,second_name,user_id,n_password,c_password,e_mail,mobile_no,date_of_birth,gender)
VALUES('" . $_POST['nam'] . "','" . $_POST['na'] . "','" . $_POST['una'] . "','" . $_POST['paw'] . "','" . $_POST['cpaw'] . "','" . $_POST['em'] . "','" . $_POST['Mno'] . "','" . $_POST['dob'] . "','" . $_POST['c'] . "')"; 

if (mysqli_query($conn, $sql)) {
    header("location:login.php?reg=success");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<head>
<title>REGISTER</title>
</head>
<table cellpadding="6" cellspacing="6" border="4">
<font size="5">
<body bgcolor="sky blue">
 <h2><center><font color="Block">REGISTER</center></h2><br></font>

<tr><td>Frist_Name</td>
<td><?php echo $_POST['nam'];?></td></tr></br>

<tr><td>Second_Name</td>
<td><?php echo $_POST['na'];?></td></tr></br>

<tr><td>User Name</td>
<td><?php echo $_POST['una'];?></td></tr></br>

<tr><td>N_Password</td>
<td><?php echo $_POST['paw'];?></td></tr></br>

<tr><td>C_Password</td>
<td><?php echo $_POST['cpaw'];?></td></tr></br>


<tr><td>Email</td>
<td><?php echo $_POST['em'];?></td></tr></br>

<tr><td>Date of Birth</td>
<td><?php echo $_POST['dob'];?></td></tr></br>


<tr><td>Gender</td>
<td><?php echo $_POST['c'];?></td></tr></br>


<tr><td>atten</td>
<td><?php echo $_POST['sa'];?></td></tr></br>


<tr><td>img</td>
<td><?php echo $_POST['co'];?></td></tr></br>

</table>
</center>
</body>
</html>



