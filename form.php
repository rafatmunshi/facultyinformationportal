<!DOCTYPE html>
<?php
require 'db.php';
session_start();
if(!isset($_SESSION['studentpass']))
header("location:index.php");
$id=$_SESSION['studentpass'];
?>
<?php include 'formphp.php';
?>
<html>
<head>
    <title>Smart Wizard - a JavaScript jQuery Step Wizard plugin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Include SmartWizard CSS -->
    <link href="dist/css/smart_wizard.css" rel="stylesheet"  />
      <!-- Include SmartWizard CSS -->
   
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>

 <link href="form.css" rel="stylesheet"  />
<!-- Example autosize.js CDN Reference -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/autosize.js/3.0.15/autosize.min.js'></script>
<script>
    // Automatically size all of your <textarea > elements as you type
    autosize(document.querySelectorAll('textarea'));
</script>
	
<script type="text/javascript">
$(document).ready(function() {
	$(window).on('beforeunload', function() {
    $(window).scrollTop(0);
});

/* $(".listen").keyup(function() { 
alert("In listen");
         $(this).attr("name=", $(this).data("name=")).off("keyup");
		 alert("name set to "+ $(this).attr("name="));
        }) */
		
  var wrapper = $(".input_fields_wrap"); //Fields wrapper
  var add_button = $(".add_field_button"); //Add button ID


  $(add_button).click(function(e) { //on add input button click
    e.preventDefault();
 

      $(wrapper).prepend('<tr><td></td><td><input type="text"  name="mytext[]"/> </td><td><input type="text"  name="ongorcom[]"/> </td><td> <input type="text"  name="fund[]"/> </td><td><input type="text"  name="national[]"/></td><td><input type="text"  name="grant[]"/></td><td><input type="text"  name=name="year[]"/><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a></td></tr>'); //add input box

  });

  $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();

var sure=confirm("Do you really want to delete this?");
if(sure == true)
$(this).closest('tr').remove();
	  
     


  })


  
  var wrapper1 = $(".input_fields_wrap1"); //Fields wrapper
  var add_button1 = $(".add_field_button1"); //Add button ID

  
  $(add_button1).click(function(e) { //on add input button click
    e.preventDefault();
  
      $(wrapper1).prepend('<tr><td></td><td><textarea  cols="25"  name="mytext1[]"/> </td><td><textarea  cols="15"  name="author1[]"/> </td><td><input type="text"   size="2" name="month[]"/> </td><td><input type="text" size="2"  name="year1[]"/> </td><td><textarea  cols="15" name="publisher1[]"/></td><td><input type="text" size="8" name="national1[]"/> </td><td><input type="text" size="8" name="conforjournal[]"/> </td><td><input type="text" size="10"  name="citationagency1[]"/></td><td><input type="text" size="2" name="impactfactor1[]"/><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a></td></tr>'); //add input box
      //add input box

  });

  $(wrapper1).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
 
var sure=confirm("Do you really want to delete this?");
if(sure == true) $(this).closest('tr').remove();


  })

 
  var wrapper2 = $(".input_fields_wrap2"); //Fields wrapper
  var add_button2 = $(".add_field_button2"); //Add button ID

  
  $(add_button2).click(function(e) { //on add input button click
    e.preventDefault();
   
      $(wrapper2).prepend('<tr><td></td><td><input type="text"  name="mytext2[]"/> </td><td><input type="text"  name="author2[]"/> </td><td> <input type="text"  name="year2[]"/> </td><td><input type="text"  name="publisher2[]"/></td><td><input type="text"  name="citationagency2[]"/></td><td><input type="text"  name="impactfactor2[]"/><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a></td></tr>'); //add input box

  });
  $(wrapper2).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
 
var sure=confirm("Do you really want to delete this?");
if(sure == true) $(this).closest('tr').remove();


  })


  
  var wrapper3 = $(".input_fields_wrap3"); //Fields wrapper
  var add_button3 = $(".add_field_button3"); //Add button ID

 
  $(add_button3).click(function(e) { //on add input button click
    e.preventDefault();
    
      $(wrapper3).prepend('<tr><td></td><td><input type="text"  name="mytext3[]"/> </td><td><input type="text"  name="author3[]"/> </td><td> <input type="text"  name="year3[]"/> </td><td><input type="text"  name="publisher3[]"/><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a></td></tr>'); //add input box

  });

  $(wrapper3).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
 
var sure=confirm("Do you really want to delete this?");
if(sure == true) $(this).closest('tr').remove();

  })



 
  var wrapper4 = $(".input_fields_wrap4"); //Fields wrapper
  var add_button4 = $(".add_field_button4"); //Add button ID

 
  $(add_button4).click(function(e) { //on add input button click
    e.preventDefault();
 
      $(wrapper4).prepend('<tr><td></td><td><input type="text"  name="mytext4[]"/> </td><td><input type="text"  name="author4[]"/> </td><td> <input type="text"  name="year4[]"/> </td><td><input type="text"  name="publisher4[]"/><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a></td></tr>'); //add input box

  });

  $(wrapper4).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
 
var sure=confirm("Do you really want to delete this?");
if(sure == true) $(this).closest('tr').remove();


  })


  
  var wrapper5 = $(".input_fields_wrap5"); //Fields wrapper
  var add_button5 = $(".add_field_button5"); //Add button ID

 
  $(add_button5).click(function(e) { //on add input button click
    e.preventDefault();
   
      $(wrapper5).prepend('<tr><td></td><td><input type="text"  name="mytext5[]"/> </td><td><input type="text"  name="author5[]"/> </td><td> <input type="text"  name="year5[]"/> </td><td><input type="text"  name="publisher5[]"/><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a></td></tr>'); //add input box

  });

  $(wrapper5).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
 
var sure=confirm("Do you really want to delete this?");
if(sure == true) $(this).closest('tr').remove();
   

  })
 
  var wrapper6 = $(".input_fields_wrap6"); //Fields wrapper
  var add_button6 = $(".add_field_button6"); //Add button ID

  
  $(add_button6).click(function(e) { //on add input button click
    e.preventDefault();
    
      $(wrapper6).prepend('<tr><td></td><td><input type="text"  name="mytext6[]"/> </td><td><input type="text"  name="year6[]"/> </td><td><input type="text"  name="national6[]"/> </td><td> <input type="text"  name="filedorawarded[]"/><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a></td></tr>'); //add input box

  });

  $(wrapper6).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
 
var sure=confirm("Do you really want to delete this?");
if(sure == true) $(this).closest('tr').remove();
 

  })


  
  var wrapper7 = $(".input_fields_wrap7"); //Fields wrapper
  var add_button7 = $(".add_field_button7"); //Add button ID

  
  $(add_button7).click(function(e) { //on add input button click
    e.preventDefault();
    
      $(wrapper7).prepend('<tr><td></td><td><input type="text"  name="mytext7[]"/> </td><td><input type="text"  name="year7[]"/> </td><td><input type="text"  name="national7[]"/><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a></td></tr>'); //add input box

  });

  $(wrapper7).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
 
var sure=confirm("Do you really want to delete this?");
if(sure == true) $(this).closest('tr').remove();
 

  })



  
  var wrapper8 = $(".input_fields_wrap8"); //Fields wrapper
  var add_button8 = $(".add_field_button8"); //Add button ID

 
  $(add_button8).click(function(e) { //on add input button click
    e.preventDefault();
  
      $(wrapper8).prepend('<tr><td></td><td><input type="text"  name="mytext8[]"/> </td><td><input type="text"  name="year8[]"/> </td><td><input type="text"  name="award8[]"/> </td><td><input type="text"  name="national8[]"/><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a></td></tr>');
  });

  $(wrapper8).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
 
var sure=confirm("Do you really want to delete this?");
if(sure == true) $(this).closest('tr').remove();
  

  })


  
  var wrapper9 = $(".input_fields_wrap9"); //Fields wrapper
  var add_button9 = $(".add_field_button9"); //Add button ID

 
  $(add_button9).click(function(e) { //on add input button click
    e.preventDefault();
  
      $(wrapper9).prepend('<tr><td></td><td><input type="text"  name="mytext9[]"/> </td><td><input type="text"  name="year9[]"/> </td><td><input type="text"  name="national9[]"/><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a></td></tr>'); //add input box

  });

  $(wrapper9).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
 
var sure=confirm("Do you really want to delete this?");
if(sure == true) $(this).closest('tr').remove();
   

  })

  
  var wrapper10 = $(".input_fields_wrap10"); //Fields wrapper
  var add_button10 = $(".add_field_button10"); //Add button ID

  
  $(add_button10).click(function(e) { //on add input button click
    e.preventDefault();
   
      $(wrapper10).prepend('<tr><td></td><td><input type="text"  name="national10[]"/> </td><td><input type="text"  name="attend10[]"/> </td><td> <input type="text"  name="name10[]"/> </td><td><input type="text"  name="place10[]"/> </td><td><input type="date" name="dates10[]"/> </td><td><input type="text"  name="year10[]"/> </td><td><input type="text"  name="sponsor10[]"/> <a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a></td></tr>'); //add input box
 
  });

  $(wrapper10).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
 
var sure=confirm("Do you really want to delete this?");
if(sure == true) $(this).closest('tr').remove();


  })


 
  var wrapper11 = $(".input_fields_wrap11"); //Fields wrapper
  var add_button11 = $(".add_field_button11"); //Add button ID

 
  $(add_button11).click(function(e) { //on add input button click
    e.preventDefault();
    
      $(wrapper11).prepend('<tr><td></td><td><input type="text"  name="year11[]"/></td><td><input type="text"  name="amount11[]"/><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a></td></tr>'); //add input box

  });

  $(wrapper11).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
 
var sure=confirm("Do you really want to delete this?");
if(sure == true) $(this).closest('tr').remove();
  

  })



  var wrapper13 = $(".input_fields_wrap13"); //Fields wrapper
  var add_button13 = $(".add_field_button13"); //Add button ID


  $(add_button13).click(function(e) { //on add input button click
    e.preventDefault();
   
      $(wrapper13).prepend('<tr><td></td><td><input type="text"  name="mytext13[]"/> </td><td><input type="text"  name="year13[]"/> </td><td><input type="text"  name="place13[]"/> </td><td><input type="text"  name="benefit13[]"/><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a></td></tr>'); //add input box
 
  });

  $(wrapper13).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
 
var sure=confirm("Do you really want to delete this?");
if(sure == true) $(this).closest('tr').remove();
   

  })

  
  var wrapper15 = $(".input_fields_wrap15"); //Fields wrapper
  var add_button15 = $(".add_field_button15"); //Add button ID

 
  $(add_button15).click(function(e) { //on add input button click
    e.preventDefault();
   
      $(wrapper15).prepend('<tr><td></td><td><input type="text"  name="attend15[]"/> </td><td><input type="text"  name="mytext15[]"/></td><td><input type="text"  name="year15[]"/> </td><td><input type="text"  name="duration15[]"/> </td><td><input type="text"  name="place15[]"/><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a></td></tr>'); //add input box

  });

  $(wrapper15).on("click", ".remove_field", function(e) { //user click on remove text
    e.preventDefault();
 
var sure=confirm("Do you really want to delete this?");
if(sure == true) $(this).closest('tr').remove();
   

  })

  var wrap = $("#check");
  $('.checkIt').bind('click', function() {
    if ($(this).is(":checked")) {
      document.getElementById('check').style.display = "block";

    } else {
      document.getElementById('check').style.display = "none";
    }
  });
});

</script>
</head>
<body>

  <div class="container">
    <!-- SmartWizard html -->
	 <form id="teacher" method="post" autocomplete="on" novalidate>
    <div id="smartwizard">
      <ul>
        <li><a href="#step-1">Step 1<br /><small>Personal details</small></a></li>
        <li><a href="#step-2">Step 2<br /><small>Publications details</small></a></li>
		<li><a href="#step-3">Step 3<br /><small>Books details</small></a></li>
        <li><a href="#step-4">Step 4<br /><small>Projects and patents</small></a></li>
        <li><a href="#step-5">Step 5<br /><small>Conferences and awards</small></a></li>
        <li><a href="#step-6">Step 6<br /><small>Recharging and research guidance</small></a></li>
        <li><a href="#step-7">Step 7<br /><small>Innovations and others</small></a></li>


      </ul>

<div>
   
         
            <div id="step-1" class="container-fluid ">
              <table class="table table-hover table-striped table-bordered ">
   <tr>
                  <td> ID: </TD>
                  <TD>
                    <input type="text"  name="id" value="<?php echo $row['id']; ?>" size="10" >
                  </TD>
                </TR>
                <tr>
                  <td> NAME: </TD>
                  <TD>
                    <input type="text"  name="names" value="<?php echo $row['name']; ?>" size="50" novalidate>
                  </TD>
                </TR>
                <tr >
                  <td> FACULTY: </TD>
                  <TD >
                    <input type="text"  size="50" name="faculty" value="<?php echo $row['faculty']; ?>" list="faculties" >
                  </TD>
                </TR>
                <datalist id="faculties">
                  <option value="Engineering & Technology">
                </datalist>
                <tr>
                  <td> DEPARTMENT: </TD>
                  <TD>
                    <input type="text"  size="50" name="department" value="<?php echo $row['department']; ?>" list="depts">
                  </TD>
                </TR>
                <datalist id="depts">
                  <option value="Applied Sciences and Humanities">
                    <option value="Architecture">
                      <option value="Civil Engineering">
                        <option value="Electrical Engineering">
                          <option value="Leather and Footwear Technology">
                            <option value="Mechanical Engineering">
                </datalist>
                <tr>
                  <td> EMAIL: </TD>
                  <TD>
                    <input type="email" size="50" name="email" value="<?php echo $row['email']; ?>" novalidate>
                  </TD>
                </TR>
				  <tr>
                  <td> MOBILE: </TD>
                  <TD>
                    <input type="text" size="50" name="mobile" value="<?php echo $row['mobile']; ?>" novalidate>
                  </TD>
                </TR>
                <tr>
                  <td> QUALIFICATION: </TD>
                  <TD>
                    <input type="text"  size="50" name="qualification" value="<?php echo $row['qualification']; ?>" list="quals">
                  </TD>
                </TR>
                <datalist id="quals">
                  <option value="Ph.D">
                    <option value="M.Phil">
                      <option value="M.Tech">
                        <option value="Graduate">
                </datalist>
                <tr>
                  <td> YEAR OF BIRTH: </TD>
                  <TD>
                    <input type="text"  size="50" name="yearofbirth" value="<?php echo $row['yearofbirth']; ?>">
                  </TD>
                </TR>
                <tr>
                  <td> YEAR OF PH.d/M.Phil: </TD>
                  <TD>
                    <input type="text"  size="50" name="yearofphp" value="<?php echo $row['yearofphp']; ?>">
                  </TD>
                </TR>
                <tr>
                  <td> Whether NET / SLET/ GRE/ GATE ?: </TD>
                  <TD>YES? :
                    <input type="checkbox" name="netsletjrf" value="YES" <?php echo ($row[ 'netsletjrf']=='YES' )? 'checked': '' ?> class="checkIt" /></td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                      <span id="check">GRE
                      <input type="checkbox" name="nameofexam[]" value="GRE" <?php
$count = mysqli_num_rows($query2);
$f     = 0;
for ($i = 0; $i < $count; $i++) {
    $row2 = mysqli_fetch_assoc($query2);
    if ($row2['nameofexam'] == 'GRE') {
        $f = 1;
		$yearofe=$row2['yearofclearing'];
    }
}
echo ($f == 1) ? 'checked' : '';
?> class="checkIt1"/> YEAR
                      <input type="text" size="5" name="yearofclearing[]" value="
<?php
echo ($f == 1) ? $yearofe : '';
?>" /> NET
                      <input type="checkbox" name="nameofexam[]" value="NET" <?php
$query2 = mysqli_query($con, "SELECT * FROM `examscleared` WHERE id=$id");
$count  = mysqli_num_rows($query2);
$g      = 0;
for ($i = 0; $i < $count; $i++) {
    $row2 = mysqli_fetch_assoc($query2);
    if ($row2['nameofexam'] == 'NET') {
        $g = 1;
		$yearofe=$row2['yearofclearing'];
    }
}
echo ($g == 1) ? 'checked' : '';
?> class="checkIt1"/> YEAR
                      <input type="text" size="5" name="yearofclearing[]" value="
<?php
echo ($g == 1) ? $yearofe : '';
?>" /> SLET
                      <input type="checkbox" name="nameofexam[]" value="SLET" <?php
$query2 = mysqli_query($con, "SELECT nameofexam FROM `examscleared` WHERE id=$id");
$count  = mysqli_num_rows($query2);
$h      = 0;
for ($i = 0; $i < $count; $i++) {
    $row2 = mysqli_fetch_assoc($query2);
    if ($row2['nameofexam'] == 'SLET') {
        $h = 1;
		$yearofe=$row2['yearofclearing'];
    }
}
echo ($h == 1) ? 'checked' : '';
?> class="checkIt1"/>YEAR
                      <input type="text" size="5" name="yearofclearing[]" value="
<?php
echo ($h == 1) ? $yearofe : '';
?>" />  <span id="check">GATE
                      <input type="checkbox" name="nameofexam[]" value="GATE" <?php
$query2 = mysqli_query($con, "SELECT nameofexam FROM `examscleared` WHERE id=$id");
					  $count = mysqli_num_rows($query2);
$f     = 0;
for ($i = 0; $i < $count; $i++) {
    $row2 = mysqli_fetch_assoc($query2);
    if ($row2['nameofexam'] == 'GATE') {
        $f = 1;
		$yearofe=$row2['yearofclearing'];
    }
}
echo ($f == 1) ? 'checked' : '';
?> class="checkIt1"/> YEAR
                      <input type="text" size="5" name="yearofclearing[]" value="
<?php
echo ($f == 1) ? $yearofe : '';
?>" /> 
                    </span>
                  </TD>
                </TR>
                <tr>
                  <td> DATE OF BIRTH: </TD>
                  <TD>
                    <input type="date" name="dateofbirth" value="<?php echo $row['dateofbirth']; ?>">
                  </TD>
                </TR>
                <tr>
                  <td> Date of Ist Continuous Appointment: </TD>
                  <TD>
                    <input type="date" name="dateof1contappt" value="<?php echo $row1['dateof1contappt']; ?>">
                  </TD>
                </TR>
                <tr>
                  <td> Date of Joining on Present Post: </TD>
                  <TD>
                    <input type="date" name="dateofjoiningonpresent" value="<?php echo $row1['dateofjoiningonpresent']; ?>">
                  </TD>
                </TR>
                <tr>
                  <td> Lien on the Post: </TD>
                  <TD>
                    <input type="text"  size="50" name="lienonthepost" value="<?php echo $row1['lienonthepost']; ?>" list="liens">
                  </TD>
                </TR>
                <datalist id="liens">
                  <option value="Assistant Professor">
                    <option value="Associate Professor">
                </datalist>
                <tr>
                  <td> Year of Retirement: </TD>
                  <TD>
                    <input type="text"  size="50" name="yearofretirement" value="<?php echo $row1['yearofretirement']; ?>">
                  </TD>
                </TR>
                <tr>
                  <td> Present Designation: </TD>
                  <TD>
                    <input type="text"  size="50" name="presentdesignation" value="<?php echo $row1['presentdesignation']; ?>" list="presdesigs">
                  </TD>
                </TR>
                <datalist id="presdesigs">
                  <option value="Assistant Professor">
                    <option value="Assistant Professor S-2">
                      <option value="Assistant Professor S-3">
                        <option value="Associate Professor-CAS ">
                </datalist>

                <tr>
                  <td> Nature of Appointment : </TD>
                  <TD>
                    <input type="text"  size="50" name="natureofappt" value=<?php echo $row1[ 'natureofappt']; ?> ></TD>
                </TR>
                <tr>
                  <td> Nature of Post : </TD>
                  <TD>
                    <input type="text"  size="50" name="natureofpost" value=<?php echo $row1[ 'natureofpost']; ?> ></TD>
                </TR>
                <tr>
                  <td> PAN Number :</TD>
                  <TD>
                    <input type="text"  size="50" name="panno" value=<?php echo $row[ 'panno']; ?> ></TD>
                </TR>
                <tr>
                  <td> GENDER : </TD>
                  <TD>
                    <span id="check1">MALE
                      <input type="radio" name="gender" value="male" <?php echo ($row[ 'gender']=='male' )? 'checked': '' ?> /> FEMALE
                      <input type="radio" name="gender" value="female" <?php echo ($row[ 'gender']=='female' )? 'checked': '' ?>></span>
                  </TD>
                </TR>
                <tr>
                  <td> Adhar Card No : </TD>
                  <TD>
                    <input type="text"  size="50" name="adharno" value=<?php echo $row[ 'adharno']; ?>></TD>
                </TR>
                <tr>
                  <td> Religion : </TD>
                  <TD>
                    <input type="text"  size="50" name="religion" value=<?php echo $row[ 'religion']; ?> ></TD>
                </TR>
				 <tr>
                  <td> Category : </TD>
                  <TD>
                    <input type="text"  size="50" name="category" value=<?php echo $row[ 'category']; ?> ></TD>
                </TR>
                <tr>
                  <td> Home State : </TD>
                  <TD>
                    <input type="text"  size="50" name="homestate" value=<?php echo $row[ 'homestate']; ?> ></TD>
                </TR>
                <tr>
                  <td> Specialization : </TD>
                  <TD>
                    <input type="text"  size="50" name="specialisation" value=<?php echo $row[ 'specialisation']; ?> ></TD>
                </TR>
                <tr>
                  <td> COURSES TAUGHT ?: </TD>
                  <TD>
                    <span id="check1">PH.d/M.Phil
                      <input type="checkbox" name="coursestaught[]" value="PH.D/M.PHIL" <?php $count=mysqli_num_rows($query3); $f=0; for($i=0;$i<$count;$i++) { $row3=mysqli_fetch_assoc($query3); if($row3[ 'coursestaught']=='PH.D/M.PHIL' ) { $f=1; }
                      } echo ($f==1)? 'checked': ''; ?> /> UG
                      <input type="checkbox" name="coursestaught[]" value="UG" <?php $query3=mysqli_query($con, "SELECT coursestaught FROM `coursestaught` WHERE id=$id"); $count=mysqli_num_rows($query3); $f=0; for($i=0;$i<$count;$i++) { $row3=mysqli_fetch_assoc($query3);
                      if($row3[ 'coursestaught']=='UG' ) { $f=1; } } echo ($f==1)? 'checked': ''; ?> > PG
                      <input type="checkbox" name="coursestaught[]" value="PG" <?php $query3=mysqli_query($con, "SELECT coursestaught FROM `coursestaught` WHERE id=$id"); $count=mysqli_num_rows($query3); $f=0; for($i=0;$i<$count;$i++) { $row3=mysqli_fetch_assoc($query3);
                      if($row3[ 'coursestaught']=='PG' ) { $f=1; } } echo ($f==1)? 'checked': ''; ?> > INREGRATED UG/PG
                      <input type="checkbox" name="coursestaught[]" value="integratedugpg" <?php $query3=mysqli_query($con, "SELECT coursestaught FROM `coursestaught` WHERE id=$id"); $count=mysqli_num_rows($query3); $f=0; for($i=0;$i<$count;$i++)
                      { $row3=mysqli_fetch_assoc($query3); if($row3[ 'coursestaught']=='integratedugpg' ) { $f=1; } } echo ($f==1)? 'checked': ''; ?> > OTHERS
                      <input type="checkbox" name="coursestaught[]" value="other" <?php $query3=mysqli_query($con, "SELECT coursestaught FROM `coursestaught` WHERE id=$id"); $count=mysqli_num_rows($query3); $f=0; for($i=0;$i<$count;$i++) { $row3=mysqli_fetch_assoc($query3);
                      if($row3[ 'coursestaught']=='other' ) { $f=1; } } echo ($f==1)? 'checked': ''; ?> > </span>
                  </TD>
                </TR>
              </table>

                <table class="table table-hover table-striped table-bordered">
                  <tr>
                    <td>
                      <td>
                        <input type="submit" class="login" name="start" value="SUBMIT">
                      </td>
                  </tr>
                </table>
              </div>

              <div id="step-2" class="container-fluid">
	
			
				
               

  <h3>PAPER DETAILS </h3>
                  <button class="add_field_button1"> Add Papers</button>
                  <table class="table table-hover table-striped table-bordered input_fields_wrap1">
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `papers` WHERE id=$id ORDER BY year DESC");
       
?>
                      <thead>
         <td>Sr No</td>
          <td>TITLE</td>
          <td>AUTHOR</td>
		  <td>MONTH</td>
          <td>YEAR</td>
          <td>PUBLISHER</td>
		  <td>NATIONAL OR INTERNATIONAL</td>
		  <td>CONFERENCE OR JOURNAL</td>
          <td>CITATION AGENCY</td>
          <td>IMPACT FACTOR</td>
        </thead>
                        

                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>

                          <tr>
						  <td>
                  <?php echo $i.") ";?>
                </td>
                            <td> 
                              <textarea  cols="25" name="mytext1[]" value=""><?php echo $row['title']; ?></textarea>
                            </TD>
                            <td> 
                              <textarea  cols="15" name="author1[]" value=""><?php echo $row['author']; ?></textarea>
                            </TD>
							<td> 
                              <input size="2" type="text" name="month[]" value="<?php echo $row['month']; ?>">
                            </TD>
                            <td> 
                              <input size="2" type="text" name="year1[]" value="<?php echo $row['year']; ?>">
                            </TD>
                            <td> 
                              <textarea  cols="15" name="publisher1[]" value=""><?php echo $row['publisher']; ?></textarea>
                            </TD>
							<td> 
                              <input size="8" type="text" name="national1[]" value="<?php echo $row['nori']; ?>">
                            </TD>
							<td> 
                              <input size="8" type="text" name="conforjournal[]" value="<?php echo $row['conforjournal']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  size="10" name="citationagency1[]" value="<?php echo $row['citationagency']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  size="2" name="impactfactor1[]" value="<?php echo $row['impactfactor']; ?>"><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a>
                            </TD>
                          </TR>
                          <?php
       }
       }
       ?>
                  </table>

                <h3>MONOGRAPHS DETAILS </h3>
                  <button class="add_field_button2"> Add Monographs</button>
                  <table class="table table-hover table-striped table-bordered input_fields_wrap2">
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `monographs` WHERE id=$id ORDER BY year DESC");
       
?>
                      
                     <thead>
           <td>Sr No</td>
            <td>TITLE</td>
            <td>AUTHOR</td>
            <td>YEAR</td>
            <td>PUBLISHER</td>
            <td>CITATION AGENCY</td>
            <td>IMPACT FACTOR</td>
          </thead>

                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>

                          <tr>  <td>
                  <?php echo $i.") ";?>
                </td>
                            <td> 
                              <input type="text"  name="mytext2[]" value="<?php echo $row['title']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="author2[]" value="<?php echo $row['author']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="year2[]" value="<?php echo $row['year']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="publisher2[]" value="<?php echo $row['publisher']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="citationagency2[]" value="<?php echo $row['citationagency']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="impactfactor2[]" value="<?php echo $row['impactfactor']; ?>"><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a>
                            </TD>
                          </TR>
                          <?php
       }
       }
       ?>
                  </table>
				  
                <table class="table table-hover table-striped table-bordered">
                  <tr>
                    <td>
                      <td>
                        <input type="submit" class="login" name="start" value="SUBMIT">
                      </td>
                  </tr>
                </table>
			</div>
			  <div id="step-3" class="container-fluid ">
             
        <h3>CHAPTERS IN BOOKS DETAILS </h3>
             
                  <button class="add_field_button3"> Add Chapters in books</button>
                  <table class="table table-hover table-striped table-bordered input_fields_wrap3">
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `chaptersinbooks` WHERE id=$id ORDER BY year DESC");
       
?>
                      
                 <thead>
           <td>Sr No</td>
              <td>TITLE</td>
              <td>AUTHOR</td>
              <td>YEAR</td>
              <td>PUBLISHER</td>

            </thead>

                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>

                          <tr>  <td>
                  <?php echo $i.") ";?>
                </td>
                            <td> 
                              <input type="text"  name="mytext3[]" value="<?php echo $row['title']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="author3[]" value="<?php echo $row['author']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="year3[]" value="<?php echo $row['year']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="publisher3[]" value="<?php echo $row['publisher']; ?>">
                           
                           <a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a>
                            </TD>
                          </TR>
                          <?php
       }
       }
       ?>
                  </table>
             

         <h3>EDITED BOOKS DETAILS </h3>
                  <button class="add_field_button4"> Add Edited books</button>
                  <table class="table table-hover table-striped table-bordered input_fields_wrap4">
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `editedbooks` WHERE id=$id ORDER BY year DESC");
       
?>
                      
                       <thead>
             <td>Sr No</td>
                <td>TITLE</td>
                <td>AUTHOR</td>
                <td>YEAR</td>
                <td>PUBLISHER</td>

              </thead>

                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>

                          <tr>  <td>
                  <?php echo $i.") ";?>
                </td>
                            <td> 
                              <input type="text"  name="mytext4[]" value="<?php echo $row['title']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="author4[]" value="<?php echo $row['author']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="year4[]" value="<?php echo $row['year']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="publisher4[]" value="<?php echo $row['publisher']; ?>">
                          
                          <a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a>
                            </TD>
                          </TR>
                          <?php
       }
       }
       ?>
                  </table>
				  
				                     <h3>BOOKS WITH ISBN DETAILS </h3>
                  <button class="add_field_button5"> Add Books with ISBN</button>
                  <table class="table table-hover table-striped table-bordered input_fields_wrap5">
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `bookswithisbn` WHERE id=$id ORDER BY year DESC");
       
?>
                      <thead>
                  <td>Sr No</td>
                  <td>TITLE</td>
                  <td>AUTHOR</td>
                  <td>YEAR</td>
                  <td>PUBLISHER</td>
          
                </thead>
                  

                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>

                          <tr>  <td>
                  <?php echo $i.") ";?>
                </td>
                            <td> 
                              <textarea  cols="30" name="mytext5[]" value=""><?php echo $row['title']; ?></textarea>
                            </TD>
                            <td> 
                              <input type="text"  size="15" name="author5[]" value="<?php echo $row['author']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  size="5" name="year5[]" value="<?php echo $row['year']; ?>">
                            </TD>
                            <td> 
                              <textarea  cols="40" name="publisher5[]" value=""><?php echo $row['publisher']; ?></textarea>
                            </TD>
                            <a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a>
                        
                          </TR>
                          <?php
       }
       }
       ?>
                  </table>
				  
                <table class="table table-hover table-striped table-bordered">
                  <tr>
                    <td>
                      <td>
                        <input type="submit" class="login" name="start" value="SUBMIT">
                      </td>
                  </tr>
                </table>
                </div>
            
              <div id="step-4" class="container-fluid">

             
	<h3>PROJECT DETAILS </h3>
				    <?php
       $query=mysqli_query($con,"SELECT * FROM `projects` WHERE id=$id ORDER BY year DESC");
       
?>
                  <button class="add_field_button"> Add Projects</button>
				  
                  <table class="table table-hover table-striped table-bordered input_fields_wrap" >
                
                      
                        
     <thead>
      <td>Sr No</td>
        <td>TITLE</td>
        <td>ONGOING OR COMPLETED OR APPLIED</td>
        <td>FUNDING AGENCY</td>
        <td>NATIONAL OR INTERNATIONAL</td>
        <td>GRANT</td>
        <td>YEAR</td>
      </thead>
                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>

                          <tr>  <td>
                  <?php echo $i.") ";?>
                </td>
                            <td>                            
                              <textarea  cols="50"  name="mytext[]" value=""><?php echo $row['title']; ?></textarea>
                            </TD>
                            <td>
                              <input type="text"  size="10" name="ongorcom[]" value="<?php echo $row['ongoingorcompleted']; ?>">
                            </TD>
                            <td> 
                              <textarea  cols="30" name="fund[]" value=""><?php echo $row['nameoffunding']; ?></textarea>
                            </TD>
                            <td> 
                              <input type="text"  size="10" name="national[]" value="<?php echo $row['nori']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  size="5" name="grant[]" value="<?php echo $row['grannt']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  size="5" name="year[]" value="<?php echo $row['year']; ?>"><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a>
                            </TD>
                          </TR>
                          <?php
       }
       }
       ?>
	

                  </table>
            <h3>PATENTS DETAILS </h3> Details of Patents Filed/ Awarded(Last 5 Years)
                 <br/> <button class="add_field_button6">Add Patents Filed/ Awarded (Last 5 Years) </button>
                  <table class="table table-hover table-striped table-bordered input_fields_wrap6">
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `patents` WHERE id=$id ORDER BY year DESC");
       
?>
                      <thead>
                 <td>Sr No</td>
                    <td>NAME</td>
                    <td>YEAR</td>
                    <td>NATIONAL OR INTERNATIONAL</td>
					<td>FILED OR AWARDED</td>
                  </thead>
                       

                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>

                          <tr>  <td>
                  <?php echo $i.") ";?>
                </td>
                            <td> 
                              <input type="text"  name="mytext6[]" value="<?php echo $row['name']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="year6[]" value="<?php echo $row['year']; ?>">
                            </TD>
							 <td> 
                              <input type="text"  name="national6[]" value="<?php echo $row['nori']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="filedorawarded[]" value="<?php echo $row['filedorawarded']; ?>"><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a>
                            </TD>

                          </TR>
                          <?php
       }
       }
       ?>
                  </table>
              

            <h3>AGENCIES DETAILS </h3> National/ International Agencies collaboration(s) with agencies. (Last 3 years)
                  <br/><button class="add_field_button7"> Add Agencies</button>
                  <table class="table table-hover table-striped table-bordered input_fields_wrap7">
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `agencies` WHERE id=$id");
       
?>
                      
                       <thead>
                    <td>Sr No</td>
                      <td>NAME</td>
                      <td>YEAR</td>
                      <td>NATIONAL OR INTERNATIONAL</td>

                    </thead>

                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>

                          <tr>  <td>
                  <?php echo $i.") ";?>
                </td>
                            <td> 
                              <input type="text"  name="mytext7[]" value="<?php echo $row['name']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="year7[]" value="<?php echo $row['year']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="national7[]" value="<?php echo $row['nori']; ?>"><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a>
                            </TD>
                          </TR>
                          <?php
       }
       }
       ?>
                  </table>
				  
                <table class="table table-hover table-striped table-bordered">
                  <tr>
                    <td>
                      <td>
                        <input type="submit" class="login" name="start" value="SUBMIT">
                      </td>
                  </tr>
                </table>
             </div>
              <div id="step-5" class="container-fluid">
                  <h3>AWARDS DETAILS </h3> National/ International Awards/ Recognition received       (Last 5 years)
                 <br/> <button class="add_field_button8"> Add awards</button>

                  <table class="table table-hover table-striped table-bordered input_fields_wrap8">
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `awards` WHERE id=$id ORDER BY year DESC");
       
?>
                      <thead>
                       <td>Sr No</td>
                        <td>NAME</td>
                        <td>YEAR</td>
                        <td>AWARDING AGENCY</td>
                        <td>NATIONAL OR INTERNATIONAL</td>

                      </thead>
                   

                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>

                          <tr>  <td>
                  <?php echo $i.") ";?>
                </td>
                            <td>
                              <input type="text"  name="mytext8[]" value="<?php echo $row['name']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="year8[]" value="<?php echo $row['year']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="award8[]" value="<?php echo $row['awardingagency']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="national8[]" value="<?php echo $row['nori']; ?>"><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a>
                            </TD>
                          </TR>
                          <?php
       }
       }
       ?>
                  </table>
             

     

              <h3>CONFERENCE DETAILS </h3>
                  <button class="add_field_button10">Add Conferences</button>

                  <table class="table table-hover table-striped table-bordered input_fields_wrap10">
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `conference` WHERE id=$id ORDER BY year DESC");
       
?>
                      
                     <thead>
                     <td>Sr No</td>
                            <td>NATIONAL OR INTERNATIONAL</td>
                            <td>ATTENDED OR ORGANISED</td>

                            <td>NAME</td>
                            <td>PLACE</td>
							<td>DATES</td>
                            <td>YEAR</td>
                            <td>SPONSORING AGENT</td>

                          </thead>

                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>

                          <tr>  <td>
                  <?php echo $i.") ";?>
                </td>
                            <td> 
                              <input type="text"  size="10" name="national10[]" value="<?php echo $row['nori']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  size="10" name="attend10[]" value="<?php echo $row['aoro']; ?>">
                            </TD>
                            <td> 
                              <textarea  cols="40" name="name10[]" value=""><?php echo $row['name']; ?></textarea>
                            </TD>
                            <td> 
                              <textarea  cols="30" name="place10[]" value=""><?php echo $row['place']; ?></textarea>
                            </TD>
							<td> 
                              <input type="text"  size="5" name="dates10[]" value="<?php echo $row['dates']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  size="5" name="year10[]" value="<?php echo $row['year']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  size="10" name="sponsor10[]" value="<?php echo $row['sponsoringagent']; ?>"><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a>
                            </TD>
                          </TR>
                          <?php
       }
       }
       ?>
                  </table>
           
                <table class="table table-hover table-striped table-bordered">
                  <tr>
                    <td>
                      <td>
                        <input type="submit" class="login" name="start" value="SUBMIT">
                      </td>
                  </tr>
                </table>
              </div>
              <div id="step-6" class="container-fluid">
			  
			       <h3>RECHARGING DETAILS </h3>Orientation/ Refresher/ FDP/ Short term courses
                  <br/><button class="add_field_button15   ">Add recharging courses done</button>
                  <table class="table table-hover table-striped table-bordered input_fields_wrap15">
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `recharging` WHERE id=$id ORDER BY year DESC");
       
?>
                      <thead><td>Sr No</td>
                                      <td>ATTENTED OR ORGANISED</td>
                                      <td>NAME</td>
                                      <td>YEAR</td>
                                      <td>DURATION</td>
                                      <td>PLACE OR AGENCY</td>
                                    </thead>
                       

                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>

                          <tr>  <td>
                  <?php echo $i.") ";?>
                </td>
                            <td> 
                              <input type="text"  name="attend15[]" value="<?php echo $row['aoro']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="mytext15[]" value="<?php echo $row['name']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="year15[]" value="<?php echo $row['year']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="duration15[]" value="<?php echo $row['duration']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="place15[]" value="<?php echo $row['placeoragency']; ?>"><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a>
                            </TD>
                          </TR>
                          <?php
       }
       }
       ?>
                  </table>
          

          <h3>RESEARCH GUIDANCE DETAILS </h3>
               
                  <table class="table table-hover table-striped table-bordered">
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `researchguidance` WHERE id=$id");
       
?>
                      
                       

                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>=0)
       {
   
        $row=mysqli_fetch_assoc($query);
        ?>
<tr>   Enter number of students guided-
							 
                            <TD>
                              MTECH LEVEL
                            </TD>
							 <TD>
                             PHD LEVEL
                            </TD>
							</tr>
                          <tr>
					
                         
                            <TD>
                              <input type="text"  name="mtechlevel[]" value="<?php echo $row['mtechlevel']; ?>" >
                            </TD>
							 <TD>
                              <input type="text"  name="phdlevel[]" value="<?php echo $row['phdlevel']; ?>" >
                            </TD>
                          </TR>
                          <?php
  
       }
       ?>
                  </table>
				    <h3>COMMITTEES BOARD DETAILS </h3>
                  <button class="add_field_button9">Add committees and boards served</button>

                  <table class="table table-hover table-striped table-bordered input_fields_wrap9">
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `committeesboard` WHERE id=$id ORDER BY yearofserving DESC");
       
?>
                      
                       <thead>
                        <td>Sr No</td>
                          <td>NAME</td>
                          <td>YEAR OF SERVING</td>

                          <td>NATIONAL OR INTERNATIONAL</td>

                        </thead>

                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>

                          <tr>  <td>
                  <?php echo $i.") ";?>
                </td>
                            <td> 
                              <input type="text"  name="mytext9[]" value="<?php echo $row['name']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="year9[]" value="<?php echo $row['yearofserving']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="national9[]" value="<?php echo $row['nori']; ?>"><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a>
                            </TD>
                          </TR>
                          <?php
       }
       }
       ?>
                  </table>
              
				     <h3>CORPORATE DETAILS </h3>
            
                  <table class="table table-hover table-striped table-bordered input_fields_wrap12">
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `corporate` WHERE id=$id");
       
?>
                      <thead>
                               <td>College/ University/ Institution</td>
                                <td>Co-curricular Activities</td>
                                <td>Enrichment of Campus life (Hostels, sports.games)</td>
                                <td>Students Welfare and Discipline</td>
                                <td>Membership/ participation in bodies/ committees on Education</td>
                                <td>Professional Organization of Teachers</td>
                              </thead>
                   

                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>=0)
       {$i=1;
     
        $row=mysqli_fetch_assoc($query);
        ?>

                          <td>
                            <textarea  cols="20" name="coluniinstt12[]" value="<?php echo $row['coluniinstt']?>"></textarea>
                          </td>
                          <td>
                            <textarea  cols="20" name="cocurri12[]" value="<?php echo $row['cocurri']?>"></textarea>
                          </td>
                          <td>
                            <textarea  cols="20" name="campuslife12[]" value="<?php echo $row['campuslife']?>"></textarea>
                          </td>
                          <td>
                            <textarea  cols="20" name="studwelfare12[]" value="<?php echo $row['studwelfare']?>"></textarea>
                          </td>
                          <td>
                            <textarea  cols="20" name="bodcommedu12[]" value="<?php echo $row['bodcommedu']?>"></textarea>
                          </td>
                          <td>
                            <textarea  cols="20" name="proforgteacher12[]" value="<?php echo $row['proforgteacher']?>"></textarea>
                          </td>

                          </TR>
                          <?php
     
       }
       ?>
                  </table>

                <table class="table table-hover table-striped table-bordered">
                  <tr>
                    <td>
                      <td>
                        <input type="submit" class="login" name="start" value="SUBMIT">
                      </td>
                  </tr>
                </table>
          
              </div>

              <div id="step-7" class="container-fluid">
             <h3>INNOVATIONS DETAILS </h3>
                          
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `innovations` WHERE id=$id");
       
?>
                 
                    
       <?php
  $count=mysqli_num_rows($query);
       
       if($count>=0)
       {$i=1;
		  
		  $row=mysqli_fetch_assoc($query);
        ?>
                       
                            <table class="table table-hover table-striped table-bordered">
                        
                              <tr>
                                <td>Revision/Design of Curriculum/ Syllabus :</td>
                                <td>
                                  <textarea  cols="50" name="revdesign14[]" value="<?php echo $row['revdesign']; ?>" /></textarea>
                                </td>
                              </tr>
                              <tr>
                                <td>TEACHING METHODS :</td>
                                <td>
                                  <textarea  cols="50" name="teachingmethods14[]" value="<?php echo $row['teachingmethods']; ?>" /></textarea>
                                </td>
                              </tr>
                              <tr>
                                <td> LABORATORY EXPERIMENTS :</td>
                                <td>
                                  <textarea  cols="50" name="labexp14[]" value="<?php echo $row['labexp']; ?>" /></textarea>
                                </td>
                              </tr>
                              <tr>
                                <td>EVALUATION METHODS :</td>
                                <td>
                                  <textarea  cols="50" name="evalmethods14[]" value="<?php echo $row['evalmethods']; ?>" /></textarea>
                                </td>
                              </tr>
                              <tr>
                                <td> Preparation of Resource Material :</td>
                                <td>
                                  <textarea  cols="50" name="resourcemat14[]" value="<?php echo $row['resourcemat']; ?>" /></textarea>
                                </td>
                              </tr>
                              <tr>
                                <td> Remedial Teaching/ Student Counselling : </td>
                                <td>
                                  <textarea  cols="50" name="remtorstudcounselling14[]" value="<?php echo $row['remtorstudcounselling']; ?>" /></textarea>
                                </td>
                              </tr>
                              <tr>
                                <td>ANY OTHER </td>
                                <td>
                                  <textarea  cols="50" name="other14[]" value="<?php echo $row['other']; ?>" /></textarea>
                                </td>
                              </tr>
                            </table>
                      
                          <?php		   
       }
       
       ?>
             
                <h3>CONSULTANCIES DETAILS </h3> Areas of Consultancy & Income generated  (Last 3 
                  <br/><button class="add_field_button11">Add consultancy details</button>
                  <table class="table table-hover table-striped table-bordered input_fields_wrap11">
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `consulties` WHERE id=$id ORDER BY year DESC");
       
?>
                      <thead>
                          <td>Sr No</td>
                              <td>YEAR</td>
                              <td>AMOUNT</td>

                            </thead>
                     

                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>

                          <tr>  <td>
                  <?php echo $i.") ";?>
                </td>
                            <td> 
                              <input type="text"  name="year11[]" value="<?php echo $row['year']; ?>">
                            </TD>
                            <td> 
                              <input type="text"  name="amount11[]" value="<?php echo $row['amount']; ?>"><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a>
                            </TD>
                          </TR>
                          <?php
       }
       }
       ?>
                  </table>
          
          

         <h3>EXTERNAL WORKS DETAILS </h3> Extension Work / Community Services/ Invited talks
                 <br/> <button class="add_field_button13   ">Add external work done</button>
                  <table class="table table-hover table-striped table-bordered input_fields_wrap13">
                    <?php
       $query=mysqli_query($con,"SELECT * FROM `externalwork` WHERE id=$id ORDER BY year DESC");
       
?>
                      
                       <thead>
                                 <td>Sr No</td>
                                  <td>NAME</td>
                                  <td>YEAR</td>
								   <td>PLACE</td>
                                  <td>GROUP BENEFITTED</td>

                                </thead>

                        <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>

                          <tr>  <td>
                  <?php echo $i.") ";?>
                </td>
                            <td> 
                              <input type="text"  name="mytext13[]" value="<?php echo $row['name']; ?>">
                            </TD>
                            <td>
                              <input type="text"  name="year13[]" value="<?php echo $row['year']; ?>">
                            </TD>
							 <td>
                              <input type="text"  name="place13[]" value="<?php echo $row['place']; ?>">
                            </TD>
                            <td>
                              <input type="text"  name="benefit13[]" value="<?php echo $row['groupbenefitted']; ?>"><a href="#" class="remove_field"><img src="delete.png" height="25px" width="25px"/></a>
                            </TD>
                          </TR>
                          <?php
       }
       }
       ?>
                  </table>

            

                <table class="table table-hover table-striped table-bordered">
                  <tr>
                    <td>
                      <td>
                        <input type="submit" class="login" name="start" value="SUBMIT">
                      </td>
                  </tr>
                </table>
				</div>


  
 </div>
        </div>
      </div>
</form>

    </div>

	
	 <!-- Include jQuery Validator plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

    <!-- Include SmartWizard JavaScript source -->
    <script type="text/javascript" src="dist/js/jquery.smartWizard.js"></script>

    <script type="text/javascript">
       $(document).ready(function() {

         // Step show event 
         $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
           //alert("You are on step "+stepNumber+" now");
           if (stepPosition === 'first') {
             $("#prev-btn").addClass('disabled');
           } else if (stepPosition === 'final') {
             $("#next-btn").addClass('disabled');
           } else {
             $("#prev-btn").removeClass('disabled');
             $("#next-btn").removeClass('disabled');
           }
         });

         // Toolbar extra buttons
         var btnFinish = $('<button type="reset"></button>').text('Logout')
           .addClass('btn btn-info')
           .on('click', function() {
		
	try { window.location.replace("logout.php"); } 
    catch(e) { window.location = "logout.php"; }
             
           });
         var btnCancel = $('<button type="reset"></button>').text('Go to home page')
           .addClass('btn btn-danger')
           .on('click', function() {
          
			   try { window.location.href="filled.php"; } 
    catch(e) { window.location = "filled.php"; }
           });


         // Smart Wizard
         $('#smartwizard').smartWizard({
           selected: 0,
           theme: 'default',
           transitionEffect: 'fade',
           showStepURLhash: true,
           toolbarSettings: {
             toolbarPosition: 'both',
             toolbarExtraButtons: [btnFinish, btnCancel]
           }
         });


         // External Button Events
         $("#reset-btn").on("click", function() {
           // Reset wizard
           $('#smartwizard').smartWizard("reset");
           return true;
         });

         $("#prev-btn").on("click", function() {
           // Navigate previous
           $('#smartwizard').smartWizard("prev");
           return true;
         });

         $("#next-btn").on("click", function() {
           // Navigate next
           $('#smartwizard').smartWizard("next");
           return true;
         });

         $("#theme_selector").on("change", function() {
           // Change theme
           $('#smartwizard').smartWizard("theme", $(this).val());
           return true;
         });

         // Set selected theme on page refresh
         $("#theme_selector").change();
       });

    </script>  
	  <script type="text/javascript">
        $(document).ready(function() {
       

          $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
            var elmForm = $("#form-step-" + stepNumber);
            // stepDirection === 'forward' :- this condition allows to do the form validation 
            // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
            if (stepDirection === 'forward' && elmForm) {
              elmForm.validator('validate');
              var elmErr = elmForm.children('.has-error');
              if (elmErr && elmErr.length > 0) {
                // Form validation failed
                return false;
              }
            }
            return true;
          });

     window.scrollTo(0, 0);

        });
  
    </script>  
	            <?php
  //    echo error_get_last();
       ?>
</body>
</html>
