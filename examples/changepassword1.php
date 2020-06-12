<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['admin']))
header("location:index.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width , intial-scale=1.0">
<style>
h1{
	text-align: center;
	color:grey;
}
#first{
	height: 30%;
	width: 100%;
}

table{
	
padding:20px;
margin:20px;
}
td{
	
padding:3px;

}
</style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
<div id="first">

</div>
<center>
<form name="f1" method="post" >
<TABLE >
    <tr>
        <td><td><input type="submit" class="login" name="logout" value="LOG OUT"></td>
         <td><td><input type="submit" class="login" name="home" value="GO TO HOME PAGE"></td>
    </tr>
    <tr> <td><b>CLICK TO SEND OTP TO YOUR REGISTERED EMAIL NO : </b></td><td><input type="submit" class="login" name="send" value="SEND OTP"></td></tr>

</table>    
</form></center>

<?php

     if(isset($_POST["logout"])) 
{
    
header("location:logout.php");
}
if(isset($_POST["home"])) 
{

   if(isset($_SESSION['admin']))
    header("location:filled1.php");

}
    ?>
<div id="first1">

<center>
<form name="f2" method="post" onsubmit="validateform()">
<TABLE >
	<TR>
		<TD><B>ENTER THE OPT FROM YOUR EMAIL:</B></TD><TD><input type="text" name="id1"></TD>
	</tr>
		<TR>
		<TD><B>ENTER YOUR CURRENT PASSWORD:</B></TD><TD><input type="text" name="id2"></TD>
	</tr>
		<TR>
		<TD><B>ENTER YOUR NEW PASSWORD:</B></TD><TD><input type="text" name="id3"></TD>
	</tr>
	<TR>
		<TD><B>RE-ENTER YOUR NEW PASSWORD:</B></TD><TD><input type="text" name="id4"></TD>
	</tr>
	<tr><td><td><input type="submit" class="login" name="start" value="RESET PASSWORD"></td>
	</tr>
</table></div>	
</form>	</center>


<?php
if(isset($_POST["send"]))
{
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"facultydetails");
$query=mysqli_query($con,"SELECT * FROM adminemail WHERE 1");
$row= mysqli_fetch_row($query);
$b=rand(100000,999999);
$_SESSION["otp"] = $b;
$emails=$row['1'];
$to =$emails;
$subject = "OTP to reset password";
$txt = "Your OTP for changing password is : " .$b;
$headers = "From: alinawazhaider3@gmail.com";

mail($to,$subject,$txt,$headers);
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
   
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"facultydetails");
$query=mysqli_query($con,"SELECT * FROM adminlogin WHERE password='$id12'");
$count=mysqli_num_rows($query);
if($count==1)
{  
 $row = mysqli_fetch_row($query);
 $pass=$row['1'];
 $name=$row['0'];
$ali=mysqli_query($con,"UPDATE adminlogin SET password='$id13' WHERE id='$name'");
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

</body></html>