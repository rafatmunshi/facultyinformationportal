<!DOCTYPE html>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'db.php';
require 'src/SMTP.php';
require 'src/Exception.php';
require 'src/PHPMailer.php';
error_reporting(0);
session_start();

if(!isset($_SESSION['studentpass'])){
	if(!isset($_SESSION['admin']))
header("location:index.php");

	
}
if(isset($_SESSION['studentpass']))
$pass=$_SESSION['studentpass'];

if(isset($_SESSION['adminpass']))
$pass=$_SESSION['admin'];

?>
<html>
<head>

<style>

</style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function validateform() {
    var x = document.forms["f2"]["id1"].value;
    if (x == "") {
        alert("ENTER OTP!");
        return false;
    }

   
    var y = document.forms["f2"]["id2"].value;
     if (y == "") {
        alert("ENTER CURRENT PASSWORD");
        return false;
    }
    var z = document.forms["f2"]["id3"].value;
    if (z == "") {
        alert("ENTER NEW PASSWORD");
        return false;
    }

    var a = document.forms["f2"]["id4"].value;
     if (a == "") {
        alert("RE-ENETR NEW PASSWORD");
        return false;
    }
if (z != a)
{
	 alert("ENTER SAME NEW PASSWORD");
        return false;
}   
   
}
</script>
</head>
<body>

<center>
<form name="f1" method="post" >
<TABLE class="table table-bordered table-striped">
    <tr>
        <td style="text-align:center;"><input type="submit" class="login" name="logout" value="LOG OUT"></td>
         <td style="text-align:center;"><input type="submit" class="login" name="home" value="GO TO HOME PAGE"></td>
    </tr>
	</table>
	<br/>
	<TABLE class="table table-bordered table-striped">
    <tr> <td><b>CLICK TO SEND OTP TO YOUR REGISTERED EMAIL NO : </b></td><td><input type="submit" class="login" name="send" value="SEND OTP"></td></tr>

</table>    
</form></center>

<?php

     if(isset($_POST["logout"])) 
{ 

    ?>
<script> location.replace("logout.php"); </script>
<?php 
}
if(isset($_POST["home"])) 
{
    if(isset($_SESSION['studentpass']))
    {
?>
    
<script> location.replace("filled.php"); </script>
<?php 
}
    if(isset($_SESSION['adminpass']))
    {
?>
    
<script> location.replace("filled1.php"); </script>
<?php 
}

}

    ?>


<?php

if(isset($_POST["send"]))
{
	

    if(isset($_SESSION['studentpass']))
    {
	
$query=mysqli_query($con,"SELECT * FROM teacherpersonal WHERE id='$pass'");
$row= mysqli_fetch_assoc($query);
}
else
    if(isset($_SESSION['adminpass']))
    {
$query=mysqli_query($con,"SELECT * FROM adminemail WHERE id='$pass'");
$row= mysqli_fetch_assoc($query);
}

if($row['email']==''){
	echo "You havent given your email id to IQAC. Kindly submit your email id details to IQAC to change password.";

}
$b=rand(100000,999999);
$_SESSION["otp"] = $b;
$emails=$row['email'];
$arr = explode(",", $emails, 2);
$emails = $arr[0];
$to =$emails;
$subject = "OTP to reset password";
$txt = "Your OTP for changing password is : " .$b;

	$mail=new PHPMailer();
	$mail->CharSet = 'UTF-8';
	
	$body = $txt;
	
	$mail->IsSMTP();
	$mail->Host       = 'smtp.gmail.com';
	
	$mail->SMTPSecure = 'tls';
	$mail->Port       = 587;
	$mail->SMTPDebug  = 0;
	$mail->SMTPAuth   = true;
	
$mail->Username   = 'rafatmunshiamu@gmail.com';
$mail->Password   = 'Vjtiirfmm1';

mail($to,$subject,$txt);	
$mail->SetFrom('rafatmunshiamu@gmail.com');
$mail->AddReplyTo('rafatmunshiamu@gmail.com','no-reply');
$mail->Subject    = $subject;
$mail->MsgHTML($body);

$mail->AddAddress($to);

$mail->send();
echo "OTP sent to ".$emails." email.";
}

if(isset($_POST["start"])) 
{ 
$id11=$_POST['id1'];
$id12=$_POST['id2'];

$id13=$_POST['id3'];
$id14=$_POST['id4'];


	if($id13==$id14)
	{
      if($id11==$_SESSION["otp"])
      {
  

    if(isset($_SESSION['studentpass']))
    {
		 
$query=mysqli_query($con,"SELECT * FROM `teacherlogin` WHERE id='$pass' and password='$id12'");

}
else
    if(isset($_SESSION['adminpass']))
    {
		
$query=mysqli_query($con,"SELECT * FROM `adminlogin` WHERE id='$pass' and password='$id12'");

}

$count=mysqli_num_rows($query);

if($count>0)
{  
 $row = mysqli_fetch_assoc($query);
 $pass=$row['id'];
  if(isset($_SESSION['studentpass']))
    {
		$ali=mysqli_query($con,"UPDATE teacherlogin SET password='$id13' WHERE id='$pass'");
}
else
    if(isset($_SESSION['adminpass']))
    {
		$ali=mysqli_query($con,"UPDATE adminlogin SET password='$id13' WHERE id='$pass'");
}

echo "<b>PASSWORD RESET SUCCESSFULLY<B>";

}
else
{
	echo "<b>INCORRECT CURRENT PASSWORD </b>";
}
}
else
{
	echo "<B>INCORRECT OTP</B>";
}
}
else
{
	echo "<B> YOU HAVE ENTERED DIFFERENT NEW PASSWORDS</B>";
}

}
?>
<br/><br/>
<div id="first1">

<center>
<form name="f2" method="post" onsubmit="validateform()">
<TABLE class="table table-bordered table-striped">
	<TR>
		<TD><B>ENTER THE OTP FROM YOUR EMAIL:</B></TD><TD><input type="text" name="id1"></TD>
	</tr>
		<TR>
		<TD><B>ENTER YOUR CURRENT PASSWORD:</B></TD><TD><input type="text" name="id2"></TD>
	</tr>
		<TR>
		<TD><B>ENTER YOUR NEW PASSWORD:(20 characters max)</B></TD><TD><input type="text" name="id3"></TD>
	</tr>
	<TR>
		<TD><B>RE-ENTER YOUR NEW PASSWORD:</B></TD><TD><input type="text" name="id4"></TD>
	</tr>
	<tr><td><td><input type="submit" class="login" name="start" value="RESET PASSWORD"></td>
	</tr>
</table></div>	
</form>	</center>

</body></html>