<!DOCTYPE html>
<?php 
require 'db.php';
try{
	$message1="";
	$message2="";
error_reporting(0);
session_start();
if(isset($_POST["ADMINLOGIN"])) 
{

$admin=$_POST['admin'];

$password=$_POST['adminpass'];


$query=mysqli_query($con,"SELECT * FROM adminlogin WHERE id='$admin' and password='$password'");
$count=mysqli_num_rows($query);

if($count>0)
{
$_SESSION['admin']=$admin;
$_SESSION['adminpass']=$password;
header("location:filled1.php");
}
else
{
$message1= "INCORRECT USERNAME OR PASSWORD!";
}
}
if(isset($_POST["STUDENTLOGIN"])) 
{
$name=$_POST['student'];
$password=$_POST['studentpass'];

$query=mysqli_query($con,"SELECT * FROM teacherlogin WHERE id='$name' and password='$password'");

$count=mysqli_num_rows($query);
if($count==1)
{
	$row=mysqli_fetch_assoc($query);
$_SESSION['studentpass']=$row['id'];
 header("location:form.php");
 }
else
{
$message2= "INCORRECT USERNAME OR PASSWORD!";
}
}
}
	catch(PDOException $e){
	echo "error" .$e->getMessage();
	}
?>
    <HTML>

    <HEAD>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/loginmodal.css">
     
        <script>
            function validateForm() {
                var x = document.forms["f1"]["admin"].value;
                if (x == "") {
                    alert("USERNAME MUST BE FILLED");
                    return false;
                }
                var x = document.forms["f1"]["adminpass"].value;
                if (x == "") {
                    alert("PASSWORD MUST BE FILLED");
                    return false;
                }
            }

            function validateForm1() {
                var x = document.forms["f2"]["student"].value;
                if (x == "") {
                    alert("USERNAME MUST BE FILLED");
                    return false;
                }
                var x = document.forms["f2"]["studentpass"].value;
                if (x == "") {
                    alert("PASSWORD MUST BE FILLED");
                    return false;
                }
            }
        </script>

    </HEAD>

    <BODY >
    	<div class="container-fluid">
    		<button class="btn btn-lg btn-primary btn-block">
                        UNIVERSITY POLYTECHNIC- Faculty Informal Portal</button>

<div class="row">
                <div  class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                    <h1 class="login-title" style="text-align: center;">ADMIN LOGIN</h1>
                    <div id="ap_style" class=" account-wall">
                       
                        <form name="f1" method="post" onSubmit="return validateForm()">
                            <table class='center'>
                                <tr>
                                    <td>Username:</td>
                                    <td>
                                        <input type="text" class="form-control" name="admin">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password:</td>
                                    <td>
                                        <input type="password" class="form-control" name="adminpass">
                                    </td>
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                         <button NAME="ADMINLOGIN" class="btn btn-lg btn-primary btn-block" type="submit">
                                        Enter</button>
                                     <?php echo $message1; ?>
                                    </td>
                                </tr>

                            </table>
                        </form>
                    </div>
                </div>
<div  class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                   <h1 class="login-title" style="text-align: center;">TEACHERS LOGIN</h1>
                    <div id="ap_style" class=" account-wall">
                       
                        <form name="f2" method="post" onSubmit="return validateForm1()">

                            <table class='center'>
                                <tr>
                                    <td>Username(ID No):</td>
                                    <td>
                                        <input type="text" class="form-control" name="student">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password :</td>
                                    <td>
                                        <input type="password" class="form-control" name="studentpass">
                                    </td>
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        <button NAME="STUDENTLOGIN" class="btn btn-lg btn-primary btn-block" type="submit">
                                        Enter</button>
                                       <?php echo $message2; ?>
                                    </td>
                                </tr>

                            </table>
                        </form>
                    </div>
</div>
</div>

    </BODY>

    </HTML>