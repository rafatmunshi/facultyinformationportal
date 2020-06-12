<!DOCTYPE html>
<?php
require 'db.php';
session_start();
if(!isset($_SESSION['admin']))
header("location:index.php");
?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

<style>

</style>
</style>
</head>

<body>
<center>
<form name="f1" method="post" >
<TABLE class="table table-bordered table-striped">
  <tr><td style="text-align:center;"> ID: </TD><TD ><input type="text" name="id"/></TD></TR>
    <tr>
      <td></td> <td ><input type="submit" class="login" name="set" value="DELETE"></td>
  
    </tr>
</table>    
</form></center>
<?php
if(isset($_POST["set"])) 
{
  
  $pass=$_POST['id'];
$query=mysqli_query($con,"SELECT id FROM `teacherpersonal` WHERE id=$pass");
$count=mysqli_num_rows($query);
//$row=mysqli_fetch_assoc($query);
if($count==1)
{
mysqli_query($con,"DELETE  FROM `teacherpersonal` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `examscleared` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `employmentdetails` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `coursestaught` WHERE id=$pass");
mysqli_query($con,"DELETE FROM `projects` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `papers` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `monographs` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `chaptersinbooks` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `editedbooks` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `bookswithisbn` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `patents` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `agencies` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `awards` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `committeesboard` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `conference` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `consulties` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `corporate` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `innovations` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `recharging` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `researchguidance` WHERE id=$pass");
mysqli_query($con,"DELETE  FROM `teacherlogin` WHERE id=$pass");
echo "<B> SUCCESSFULLY DELETED INFORMATIONS OF ID= ".$pass." </B>"; 
}
else
{
  echo "<B> WRONG ID </B>";
}
         }
       
        ?>
</table>
</center>
<form name="f1" method="post" >
<TABLE class="table table-bordered table-striped" cellpadding="15" cellspacing="5" border="1">
   <tr id="d" style="text-align:center;"> <td id="e"><input type="submit" class="login" name="logout" value="LOG OUT" style="color:green;"></td>
    
    <td id="e" style="text-align:center;"><input type="submit" class="login" name="change" value="HOME" style="color:green;"></td>
   </tr>
</table>    
</form>
<?php

if(isset($_POST["logout"])) 
{
?>
<script> location.replace("logout.php"); </script>
<?php
}

if(isset($_POST["change"])) 
{
?>
<script> location.replace("filled1.php"); </script>
 <?php 
}

?>
</body>
</HTML>
