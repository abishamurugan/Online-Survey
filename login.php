<html>
<head>
<body bgcolor="gray" style="background-image:url('image.jpg');">
<center><font color="red"><h1>ONLINE SURVEY </h1></font color>
<h2>LOGIN</h2>
<form action="log.php" method="post">
<Label for="Uname"><b> User Name:</b></label>
<input type="text" placeholder="Enter the Name" Name="Uname"><br><br>

<Label for="Psw"><b> Password:</b></label>
<input type="password" placeholder="Enter Password" Name="Psw"><br><br>

<input type="submit">login</button></center>
<?php 
if (isset($_GET['reg']) && $_GET['reg'] == 'success') {
    echo "successfully create";
}
if (isset($_GET['log']) && $_GET['log'] == 'fail') {
    echo "invalied user name or password";
}
?>
</body>
</head>
</html>

