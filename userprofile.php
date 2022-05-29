<html>
<head>
<style type="text/css">
</style>
<link href="sub1_button.css"rel="stylesheet" type="text/css">
</head>
<?php
session_start();
$user1_id=$_SESSION['user_id'];
$user1_firstname=$_SESSION['user_firstname'];
$user1_lastname=$_SESSION['user_lastname'];
$user1_email=$_SESSION['user_email'];
$user1_mobile=$_SESSION['user_mobile'];
$user1_dob=$_SESSION['user_dob'];
$user1_gender=$_SESSION['user_gender'];
$user1_atten=$_SESSION['user_atten'];
$r1=$_SESSION['r'];
$img=$_SESSION['img'];
$user1_npass=$_SESSIOIN['user_npass'];
$user1_cpass=$_SESSION['user_cpass'];
$_SESSION['fla']="";
?>
<body bgcolor="#FFFFFF">
<p>&nbsp;</p>
<p>&nbsp;</p>
<table class="user_data" bgcolor="#FFFFFF" width="44%" height="62%" align="center">
<tr>
<td width="230" rowspan="8"><img src="<?php echo"user_picture.jpg".$img;?>"width="200" height="250">
<form action="/action_page.php">
<input type="file" id="myfile" name="myfile"><br><br>
</form>
<button type="button" class="user_button" onclick="alert('Hello world!')">Update</button><br>
<button type="button" class="user_button" onclick="alert('Hello world!')">Back</button>
</td>
<td width="185"><div align="center" class="profile">Profile</div></td>
<td width="49">&nbsp;</td>
</tr>

<tr>
<td><div align="center" class="style3style19style20">
<div align="center">id</div>
</div></td>
<td><strong>:<?php echo $user1_id;?></strong></td>
</tr>

<tr>
<td><div align="center" class="style3style19style20">
<div align="center">name</div>
</div></td>
<td><strong>:<?php echo $user1_firstname ." ". $user1_lastname;?></strong></td>
</tr>

<tr>
<td><div align="center" class="style3style19style20">
<div align="center">email</div>
</div></td>
<td><strong>:<?php echo $user1_email;?></strong></td>
</tr>

<tr>
<td><div align="center" class="style3style19style20">
<div align="center">mobile</div>
</div></td>
<td><strong>:<?php echo $user1_mobile;?></strong></td>
</tr>

<tr>
<td><div align="center" class="style3style19style20">
<div align="center">date of birth</div>
</div></td>
<td><strong>:<?php echo $user1_dob;?></strong></td>
</tr>

<tr>
<td><div align="center" class="style3style19style20">
<div align="center">gender</div>
</div></td>
<td><strong>:<?php echo $user1_gender;?></strong></td>
</tr>

<tr>
<td height="57"><div align="center"class="style3style19style20">
<div align="center">atten_survey</div>
</div></td>
<td><strong>:<?php echo $user1_atten;?>,<?php echo $r1;?></strong></td>
</tr>

</table>
</body>
</html>

<style>

.user_data img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.user_data .profile {
    font-weight: bold;
    font-size: 20px;
}

button.user_button {
    background-color: #000;
    color: #fff;
    padding: 5px 15px;
    margin: 5px 0;
    border-radius: 10px;
}

</style>




