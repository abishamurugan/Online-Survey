<html>
<head>
<style type="text/css">
</style>
<link href="button_css.css" rel="stylesheet" type="text/css">
<link href="sub_next.css" rel="stylesheet" type="text/css">
<link href="*" rel="stylesheet" type="text/css">
<link href="sub1_button.css" rel="stylesheet" type="text/css">
</head>
<?php
session_start();
$us1_atten=$_SESSION['user_atten'];
$r1=$_SESSION['r'];
include'connect.php';
if($us1_atten==0)
{
$us1_atten=1;
$_SESSION['user_atten']=$us1_atten;
}
if($us1_atten>$r1)
{
       header("location:finish.php");
}
else
{
$q_num=$us1_atten;
          $q="SELECT*FROM`survey_tb2`WHERE`question_no`=$q_num";
$res=$con->query($q);

      //$res=mysql_query($q);
	while($row=mysqli_fetch_row($res))
{
	$q_no=$row[0];
		$qus=$row[1];
		$q_ch1=$row[2];
		$q_ch2=$row[3];
		$q_ch3=$row[4];
		$q_ch4=$row[5];
		$a_ch1=$row[6];
		$a_ch2=$row[7];
		$a_ch3=$row[8];
		$a_ch4=$row[9];
  }
}
if(isset($_POST['sub1']))
{
	$us1_atten=$_SESSION['user_atten'];
	if(isset($_POST['option1']))
	{$q_val=$_POST['option1'];}
	if($us1_atten>$r1)
{
	header("location:finish.php");
}
else
{
if(isset($_POST['option1']))
{$q_val=$_POST['option1'];}
if($q_val=="")
{
echo"<script>alert(please select any choice..');</script>";
}
else
{
$us1_id=$_SESSION['user_id'];
    if($q_val==1)
{
	
$q="UPDATE `survey_tb2` SET `ans_ch1`=". $a_ch1+1 ." WHERE `question_no`=$q_num";
$res=$con->query($q);
}

if($q_val==2)
{
$q="UPDATE `survey_tb2` SET `ans_ch2`=". $a_ch2+1 ." WHERE `question_no`=$q_num";
$res=$con->query($q);
}

if($q_val==3)
{
$q="UPDATE `survey_tb2` SET `ans_ch3`=". $a_ch3+1 ." WHERE `question_no`=$q_num";
$res=$con->query($q);
}

if($q_val==4)
{
$q="UPDATE `survey_tb2` SET `ans_ch1`=". $a_ch4+1 ." WHERE `question_no`=$q_num";
$res=$con->query($q);
}

$us1_atten=$_SESSION['user_atten']+1;
$_SESSION['user_atten']=$us1_atten;
$q="UPDATE `survey_tb1` SET `atten`=$us1_atten WHERE `user_id`='$us1_id'";
$res=$con->query($q);
$q_num=$us1_atten;
  $q="SELECT*FROM`survey_tb2`WHERE `question_no`=$q_num";
$res=$con->query($q);

//$res=mysql_query($q);
	while($row=mysqli_fetch_row($res))
{
$q_no=$row[0];
	$qus=$row[1];
	$q_ch1=$row[2];
	$q_ch2=$row[3];
	$q_ch3=$row[4];
	$q_ch4=$row[5];
}
}
}
}
if($us1_atten>$r1)
 {
      header("location:finish.php");
}
 echo"<script>window.open('ch_pie.php','f11')</script>";
 $e_ch1 = $e_ch2 = $e_ch3 = $e_ch4 = '';
if($q_ch1=="")
{$e_ch1="hidden='yes'";}
if($q_ch2=="")
{$e_ch2="hidden='yes'";}
if($q_ch3=="")
{$e_ch3="hidden='yes'";}
if($q_ch4=="")
{$e_ch4="hidden='yes'";}
?>
<body bgcolor="#FF6666">
<form name="form1" action="" method="post">
<table name="table1" bgcolor="#CCCCFF" height="100%">

<tr>
<td><span class="style3"><?php echo $q_no;?>,<?php echo $qus;?></span></td>
</tr>
<tr>
<td><span class="style3">
<input  type="radio" value="1" name="option1"<?php echo $e_ch1;?>>
<?php echo $q_ch1;?>
</input>
</span>
</td>
</tr>

<tr>
<td><span class="style3">
<input type="radio" value="2" name="option1"<?php echo $e_ch2;?>>
<?php echo $q_ch2;?>
</input>
</span>
</td>
</tr>

<tr>
<td><span class="style3">
<input type="radio" value="3" name="option1"<?php echo $e_ch3;?>>
<?php echo $q_ch3;?>
</input>
</span>
</td>
</tr>

<tr>
<td><span class="style3">
<input type="radio" value="4" name="option1"<?php echo $e_ch4;?>>
<?php echo $q_ch4;?>
</input>
</span>
</td>
</tr>

<tr>
<td align ="center"><span class="style3">
<input name="sub1" type="submit"class="sub1_button" value=">--Next->">
</span>
</td>
</tr>
</table>
</form>
</body>
</html>


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
