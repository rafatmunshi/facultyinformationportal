<?php
session_start();
if(!isset($_SESSION['admin']))
header("location:index.php");
?>
<html>
<head>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
<link rel="stylesheet" href="jquery-ui.css">
<script type="text/javascript">
$(document).ready(function() {
   var max_fields      = 20; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div>TITLE :<input type="text" name="mytext[]"/> ONGOING OR COMPLETED :<input type="text" name="ongorcom[]"/> FUNDING AGENCY : <input type="text" name="fund[]"/> NAT OR INT :<input type="text" name="national[]"/>GRANT : <input type="text" name="grant[]"/>YEAR : <input type="text" name="year[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;

     })


    var max_fields1      = 20; //maximum input boxes allowed
    var wrapper1       = $(".input_fields_wrap1"); //Fields wrapper
    var add_button1      = $(".add_field_button1"); //Add button ID
    
    var y = 1; //initlal text box count
    $(add_button1).click(function(e){ //on add input button click
        e.preventDefault();
        if(y < max_fields1){ //max input box allowed
            y++; //text box increment
   $(wrapper1).append('<div>TITLE : <input type="text" name="mytext1[]"/> AUTHOR :<input type="text" name="author1[]"/> YEAR : <input type="text" name="year1[]"/> Publisher :<input type="text" name="publisher1[]"/>CITATION AGENCY : <input type="text" name="citationagency1[]"/>IMPACT FACTOR : <input type="text" name="impactfactor1[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
 //add input box
        }
    });
    
    $(wrapper1).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); y--;

     })

var max_fields2      = 20; //maximum input boxes allowed
    var wrapper2       = $(".input_fields_wrap2"); //Fields wrapper
    var add_button2      = $(".add_field_button2"); //Add button ID
    
    var z = 1; //initlal text box count
    $(add_button2).click(function(e){ //on add input button click
        e.preventDefault();
        if(z < max_fields2){ //max input box allowed
            z++; //text box increment
   $(wrapper2).append('<div>TITLE : <input type="text" name="mytext2[]"/> AUTHOR :<input type="text" name="author2[]"/> YEAR : <input type="text" name="year2[]"/> Publisher :<input type="text" name="publisher2[]"/>CITATION AGENCY : <input type="text" name="citationagency2[]"/>IMPACT FACTOR : <input type="text" name="impactfactor2[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
       $(wrapper2).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); z--;

     })


    var max_fields3      = 20; //maximum input boxes allowed
    var wrapper3       = $(".input_fields_wrap3"); //Fields wrapper
    var add_button3      = $(".add_field_button3"); //Add button ID
    
    var a = 1; //initlal text box count
    $(add_button3).click(function(e){ //on add input button click
        e.preventDefault();
        if(a < max_fields3){ //max input box allowed
            a++; //text box increment
   $(wrapper3).append('<div>TITLE : <input type="text" name="mytext3[]"/> AUTHOR :<input type="text" name="author3[]"/> YEAR : <input type="text" name="year3[]"/> Publisher :<input type="text" name="publisher3[]"/>CITATION AGENCY : <input type="text" name="citationagency3[]"/>IMPACT FACTOR : <input type="text" name="impactfactor3[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper3).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); a--;

     })
     


    var max_fields4      = 20; //maximum input boxes allowed
    var wrapper4    = $(".input_fields_wrap4"); //Fields wrapper
    var add_button4      = $(".add_field_button4"); //Add button ID
    
    var b = 1; //initlal text box count
    $(add_button4).click(function(e){ //on add input button click
        e.preventDefault();
        if(b < max_fields4){ //max input box allowed
            b++; //text box increment
   $(wrapper4).append('<div>TITLE : <input type="text" name="mytext4[]"/> AUTHOR :<input type="text" name="author4[]"/> YEAR : <input type="text" name="year4[]"/> Publisher :<input type="text" name="publisher4[]"/>CITATION AGENCY : <input type="text" name="citationagency4[]"/>IMPACT FACTOR : <input type="text" name="impactfactor4[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper4).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); b--;

     })


     var max_fields5      = 20; //maximum input boxes allowed
    var wrapper5       = $(".input_fields_wrap5"); //Fields wrapper
    var add_button5      = $(".add_field_button5"); //Add button ID
    
    var c = 1; //initlal text box count
    $(add_button5).click(function(e){ //on add input button click
        e.preventDefault();
        if(c < max_fields5){ //max input box allowed
            c++; //text box increment
   $(wrapper5).append('<div>TITLE : <input type="text" name="mytext5[]"/> AUTHOR :<input type="text" name="author5[]"/> YEAR : <input type="text" name="year5[]"/> Publisher :<input type="text" name="publisher5[]"/>CITATION AGENCY : <input type="text" name="citationagency5[]"/>IMPACT FACTOR : <input type="text" name="impactfactor5[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
  });
    
    $(wrapper5).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); c--;

     }) 
    var max_fields6      = 20; //maximum input boxes allowed
    var wrapper6       = $(".input_fields_wrap6"); //Fields wrapper
    var add_button6      = $(".add_field_button6"); //Add button ID
    
    var d = 1; //initlal text box count
    $(add_button6).click(function(e){ //on add input button click
        e.preventDefault();
        if(d < max_fields6){ //max input box allowed
            d++; //text box increment
   $(wrapper6).append('<div>TITLE : <input type="text" name="mytext6[]"/> YEAR :<input type="text" name="year6[]"/> NATIONAL OR INTERNATIONAL : <input type="text" name="national6[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper6).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); d--;

     })


    var max_fields7      = 20; //maximum input boxes allowed
    var wrapper7      = $(".input_fields_wrap7"); //Fields wrapper
    var add_button7      = $(".add_field_button7"); //Add button ID
    
    var o = 1; //initlal text box count
    $(add_button7).click(function(e){ //on add input button click
        e.preventDefault();
        if(o < max_fields7){ //max input box allowed
            o++; //text box increment
   $(wrapper7).append('<div>TITLE : <input type="text" name="mytext7[]"/> YEAR :<input type="text" name="year7[]"/> NATIONAL OR INTERNATIONAL : <input type="text" name="national7[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper7).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); o--;

     })



    var max_fields8      = 20; //maximum input boxes allowed
    var wrapper8       = $(".input_fields_wrap8"); //Fields wrapper
    var add_button8      = $(".add_field_button8"); //Add button ID
    
    var f = 1; //initlal text box count
    $(add_button8).click(function(e){ //on add input button click
        e.preventDefault();
        if(f < max_fields8){ //max input box allowed
            f++; //text box increment
   $(wrapper8).append('<div>NAME : <input type="text" name="mytext8[]"/> YEAR :<input type="text" name="year8[]"/> AWARDING AGENCY : <input type="text" name="award8[]"/> NATIONAL OR INTERNATIONAL : <input type="text" name="national8[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper8).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); f--;

     })


    var max_fields9      = 20; //maximum input boxes allowed
    var wrapper9       = $(".input_fields_wrap9"); //Fields wrapper
    var add_button9      = $(".add_field_button9"); //Add button ID
    
    var p = 1; //initlal text box count
    $(add_button9).click(function(e){ //on add input button click
        e.preventDefault();
        if(p < max_fields9){ //max input box allowed
            p++; //text box increment
   $(wrapper9).append('<div>NAME : <input type="text" name="mytext9[]"/> YEAR OF SERVING:<input type="text" name="year9[]"/> NATIONAL OR INTERNATIONAL : <input type="text" name="national9[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper9).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); p--;

     })
    
    var max_fields10      = 20; //maximum input boxes allowed
    var wrapper10       = $(".input_fields_wrap10"); //Fields wrapper
    var add_button10      = $(".add_field_button10"); //Add button ID
    
    var h = 1; //initlal text box count
    $(add_button10).click(function(e){ //on add input button click
        e.preventDefault();
        if(h < max_fields10){ //max input box allowed
            h++; //text box increment
   $(wrapper10).append('<div>NAT OR INT : <input type="text" name="national10[]"/> ATTENDED OR ORGANISED :<input type="text" name="attend10[]"/> NAME : <input type="text" name="name10[]"/> PLACE : <input type="text" name="place10[]"/> DATE :<input type="text" name="date10[]"/> SPONSORING AGENT : <input type="text" name="sponsor10[]"/> <a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper10).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); h--;

     })
    

     var max_fields11      = 20; //maximum input boxes allowed
    var wrapper11       = $(".input_fields_wrap11"); //Fields wrapper
    var add_button11      = $(".add_field_button11"); //Add button ID
    
    var i = 1; //initlal text box count
    $(add_button11).click(function(e){ //on add input button click
        e.preventDefault();
        if(i < max_fields11){ //max input box allowed
            i++; //text box increment
   $(wrapper11).append('<div>YEAR : <input type="text" name="year11[]"/> AMOUNT :<input type="text" name="amount11[]"/> <a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper11).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); i--;

     })

    var max_fields12      = 20; //maximum input boxes allowed
    var wrapper12      = $(".input_fields_wrap12"); //Fields wrapper
    var add_button12      = $(".add_field_button12"); //Add button ID
    
    var j = 1; //initlal text box count
    $(add_button12).click(function(e){ //on add input button click
        e.preventDefault();
        if(j < max_fields12){ //max input box allowed
            j++; //text box increment
   $(wrapper12).append('<div><table><tr><td>College/ University/ Institution:</td><td><input type="text" name="coluniinstt12[]"/></td></tr><tr><td>Co-curricular Activities:</td><td><input type="text" name="cocurri12[]"/></td></tr><tr><td> Enrichment of Campus life (Hostels, sports.games):</td><td> <input type="text" name="campuslife12[]"/></td></tr><tr><td>Students Welfare and Discipline:</td><td> <input type="text" name="studwelfare12[]"/></td></tr><tr><td> Membership/ participation in bodies/ committees on Education:</td><td><input type="text" name="bodcommedu12[]"/></td></tr><tr><td> Professional Organization of Teachers: </td><td><input type="text" name="proforgteacher12[]"/></td></tr></table><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper12).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); j--;

     })

    var max_fields13      = 20; //maximum input boxes allowed
    var wrapper13       = $(".input_fields_wrap13"); //Fields wrapper
    var add_button13      = $(".add_field_button13"); //Add button ID
    
    var k = 1; //initlal text box count
    $(add_button13).click(function(e){ //on add input button click
        e.preventDefault();
        if(k < max_fields13){ //max input box allowed
            k++; //text box increment
   $(wrapper13).append('<div>NAME : <input type="text" name="mytext13[]"/> YEAR :<input type="text" name="year13[]"/> GROUP BENEFITTED : <input type="text" name="benefit13[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper13).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); k--;

     })


    var max_fields14      = 20; //maximum input boxes allowed
    var wrapper14       = $(".input_fields_wrap14"); //Fields wrapper
    var add_button14      = $(".add_field_button14"); //Add button ID
    
    var l = 1; //initlal text box count
    $(add_button14).click(function(e){ //on add input button click
        e.preventDefault();
        if(l < max_fields14){ //max input box allowed
            l++; //text box increment
   $(wrapper14).append('<div><table><tr><td>Revision/Design of Curriculum/ Syllabus :</td><td><input type="text" name="revdesign14[]"/></td></tr><tr><td>TEACHING METHODS :</td><td><input type="text" name="teachingmethods14[]"/></td></tr><tr><td> LABORATORY EXPERIMENTS :</td><td> <input type="text" name="labexp14[]"/></td></tr><tr><td>EVALUATION METHODS :</td><td> <input type="text" name="evalmethods14[]"/></td></tr><tr><td> Preparation of Resource Material :</td><td><input type="text" name="resourcemat14[]"/></td></tr><tr><td> Remedial Teaching/ Student Counselling : </td><td><input type="text" name="remtorstudcounselling14[]"/></td></tr><tr><td>ANY OTHER </td><td> <input type="text" name="other14[]"/></td></tr></table><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper14).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); l--;

     })
     
    var max_fields15      = 20; //maximum input boxes allowed
    var wrapper15       = $(".input_fields_wrap15"); //Fields wrapper
    var add_button15      = $(".add_field_button15"); //Add button ID
    
    var m = 1; //initlal text box count
    $(add_button15).click(function(e){ //on add input button click
        e.preventDefault();
        if(m < max_fields15){ //max input box allowed
            m++; //text box increment
   $(wrapper15).append('<div>ATTENDED OR ORGANISED : <input type="text" name="attend15[]"/> NAME :<input type="text" name="mytext15[]"/>YEAR : <input type="text" name="year15[]"/> DURATION :<input type="text" name="duration15[]"/> PLACE OR AGENCY : <input type="text" name="place15[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper15).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); m--;

     })
    

    var max_fields16      = 20; //maximum input boxes allowed
    var wrapper16       = $(".input_fields_wrap16"); //Fields wrapper
    var add_button16      = $(".add_field_button16"); //Add button ID
    
    var n = 1; //initlal text box count
    $(add_button16).click(function(e){ //on add input button click
        e.preventDefault();
        if(n < max_fields16){ //max input box allowed
            n++; //text box increment
   $(wrapper16).append('<div>RESEARCH GUIDANCE : <input type="text" name="research16[]"/>  <a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper16).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); n--;

     })
   
     var wrap       = $("#check");
    $('.checkIt').bind('click', function() {
        if($(this).is(":checked")) {
            document.getElementById('check').style.display = "block";
          
        } else {
            document.getElementById('check').style.display = "none";
        }
    });         
});
</script>
</head>
<body>
    <form id="teacher" method="post">
        <div>
<table>
<tr><td>1) ID: </TD><TD><input type="text" name="id"/></TD></TR>
<tr><td>2) NAME: </TD><TD><input type="text" name="names"/></TD></TR>
<tr><td>3) FACULTY: </TD><TD><input type="text" name="faculty"/></TD></TR>
<tr><td>4) DEPARTMENT: </TD><TD><input type="text" name="department"/></TD></TR>
<tr><td>4) EMAIL: </TD><TD><input type="email" name="email"/></TD></TR>
<tr><td>5) QUALIFICATION: </TD><TD><input type="text" name="qualification"/></TD></TR>
<tr><td>6) YEAR OF BIRTH: </TD><TD><input type="text" name="yob"/></TD></TR>
<tr><td>7) YEAR OF PH.d/M.Phil: </TD><TD><input type="text" name="yom"/></TD></TR>
<tr><td>8) Whether NET / SLET/ JRE ?: </TD><TD>YES? : <input type="checkbox" name="exam" value="YES" class="checkIt"/></td></tr>
<tr><td></td><td><DIV id="check" style="DISPLAY:NONE;">JRE <input type="checkbox" name="exam1[]" value="JRE" class="checkIt1"/> YEAR<input type="text" name="yoe[]"/>NET <input type="checkbox" name="exam1[]" value="NET" class="checkIt1"/>YEAR <input type="text" name="yoe[]"/>SLET <input type="checkbox" name="exam1[]" value="SLET" class="checkIt1"/>YEAR<input type="text" name="yoe[]"/></DIV></TD></TR>
<tr><td>10) DATE OF BIRTH: </TD><TD><input type="date" name="dob"/></TD></TR>
<tr><td>11) Date of Ist Continuous Appointment: </TD><TD><input type="date" name="cont"/></TD></TR>
<tr><td>12) Date of Joining on Present Post: </TD><TD><input type="date" name="dateonpresent"/></TD></TR>
<tr><td>13) Lien on the Post: </TD><TD><input type="text" name="lien"/></TD></TR>
<tr><td>14) Year of Retirement: </TD><TD><input type="text" name="yearofretire"/></TD></TR>
<tr><td>15) Present Designation: </TD><TD><input type="text" name="designation"/></TD></TR>
<tr><td>16) Nature of Appointment : </TD><TD><input type="text" name="appoint"/></TD></TR>
<tr><td>17) Nature of Post : </TD><TD><input type="text" name="nature"/></TD></TR>
<tr><td>18) PAN Number :</TD><TD><input type="text" name="pan"/></TD></TR>
<tr><td>19) Adhar Card No : </TD><TD><input type="text" name="adhar"/></TD></TR>
<tr><td>22) GENDER : </TD><TD>
<DIV id="check1">MALE <input type="radio" name="gender" value="male"/> FEMALE <input type="radio" name="gender" value="female" ></DIV></TD></TR>
<tr><td>21) Religion : </TD><TD><input type="text" name="religion"/></TD></TR>
<tr><td>22) CATEGORY : </TD><TD>
<DIV id="check1">GENERAL <input type="radio" name="category" value="GENERAL"/> SC <input type="radio" name="category" value="SC" > <br>ST <input type="radio" name="category" value="ST" > OBC <input type="radio" name="category" value="OBC" ></DIV></TD></TR>
<tr><td>23) Home State : </TD><TD><input type="text" name="home"/></TD></TR>
<tr><td>24) Specialization : </TD><TD><input type="text" name="special"/></TD></TR>
<tr><td>25) COURSES TAUGHT ?: </TD><TD>
<DIV id="check1">PH.d/M.Phil <input type="checkbox" name="course[]" value="PH.D/M.PHIL"/> UG <input type="checkbox" name="course[]" value="UG" > PG <input type="checkbox" name="course[]" value="PG" >
INTEGRATED UG/PG :<input type="checkbox" name="course[]" value="integratedugpg" /> 
OTHERS <input type="checkbox" name="course[]" value="others" >
</DIV></TD></TR>

</table>
<table><tr><TD><div class="input_fields_wrap">
    <button class="add_field_button">27) Add Projects</button>
    
  </div></TD></TR>
  <tr><td><div class="input_fields_wrap1">
    <button class="add_field_button1">30) Add Papers</button>
    
  </div></TD></TR>
  <tr><td><div class="input_fields_wrap2">
    <button class="add_field_button2">31) Add Monographs</button>
    
  </div></TD></TR>
  <tr><td><div class="input_fields_wrap3">
    <button class="add_field_button3">32) Add Chapters in books</button>
    
  </div></TD></TR>
<tr><td><div class="input_fields_wrap4">
    <button class="add_field_button4">33) Add Edited books</button>
    
  </div></TD></TR>
  <tr><td><div class="input_fields_wrap5">
    <button class="add_field_button5">34) Add Books with ISBN</button>
    
  </div></TD></TR>
  
<tr><td><div class="input_fields_wrap6">
    <button class="add_field_button6">33) Details of Patents Filed/ Awarded (Last 5 Years) </button>
    
  </div></TD></TR>
<tr><td><div class="input_fields_wrap7">
    <button class="add_field_button7">33) ADD AGENCIES</button>
    
  </div></TD></TR>
  <tr><td><div class="input_fields_wrap8">
    <button class="add_field_button8">33) ADD AWARDS</button>
    
  </div></TD></TR>
  <tr><td><div class="input_fields_wrap9">
    <button class="add_field_button9">33) COMMITTEES BOARD</button>
    
  </div></TD></TR>
  <tr><td><div class="input_fields_wrap10">
    <button class="add_field_button10">33) CONFERENCE</button>
    
  </div></TD></TR>
  <tr><td><div class="input_fields_wrap11">
    <button class="add_field_button11">33) CONSULTIES</button>
    
  </div></TD></TR>
  <tr><td><div class="input_fields_wrap12">
    <button class="add_field_button12">33) CORPORATE</button>
    
  </div></TD></TR>
  <tr><td><div class="input_fields_wrap13">
    <button class="add_field_button13">33) EXTERNAL WORKS</button>
    
  </div></TD></TR>
  <tr><td><div class="input_fields_wrap14">
    <button class="add_field_button14">33) INNOVATIONS</button>
    
  </div></TD></TR>
  <tr><td><div class="input_fields_wrap15">
    <button class="add_field_button15">33) RECHARGING</button>
    
  </div></TD></TR>
  <tr><td><div class="input_fields_wrap16">
    <button class="add_field_button16">33) RESEARCH GUIDANCE</button>
    
  </div></TD></TR>

</table>
<table>
<tr><td><td><input type="submit" class="login" name="start" value="SUBMIT"></td>
</tr></table>
</div>
</form>




<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL ^ E_DEPRECATED);
if(isset($_POST["start"])) 
{
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"facultydetails");
$id=$_POST['id'];
$query=mysqli_query($con,"INSERT INTO teacherlogin (id,password)  VALUES ( '$id','123456')");

$var1=$id;
$name=$_POST['names'];
$faculty= $_POST['faculty'];
$department=$_POST['department'];
$email=$_POST['email'];
$qualification=$_POST['qualification'];
$yearofb= $_POST['yob'];
$dateofb=$_POST['dob'];
$pan=$_POST['pan'];
$adhar= $_POST['adhar'];
$yearofm=$_POST['yom'];
$gender=$_POST['gender'];
$religion=$_POST['religion'];
$home= $_POST['home'];
$special=$_POST['special'];

$dateof1contappt=$_POST['cont'];
$dateofjoiningonpresent=$_POST['dateonpresent'];
$lien= $_POST['lien'];
$designation=$_POST['designation'];
$appoint=$_POST['appoint'];
$nature= $_POST['nature'];
$yearofretire=$_POST['yearofretire'];


$category=$_POST['category'];
$exam= $_POST['exam'];
$exam1=$_POST['exam1'];
$yoe=$_POST['yoe'];
$course=$_POST['course'];
 if(empty($exam)) 
    {
      $exam='NO';
        
    } 
  $query=mysqli_query($con,"INSERT INTO teacherpersonal(id,name,faculty,department,email,qualification,yearofbirth,dateofbirth,panno,adharno,yearofphp,netsletjrf,gender,religion,category,homestate,specialisation) VALUES ('$id','$name','$faculty','$department','$email','$qualification','$yearofb','$dateofb','$pan','$adhar','$yearofm','$exam','$gender','$religion','$category','$home','$special')");
    /* $query=mysqli_query($con,"INSERT INTO teacherpersonal(id,name,faculty,department,qualification,yearofbirth,dateofbirth,panno,adharno,yearofphpmphil,netsletjrf,gender,religion,category,homestate,specialisation) VALUES ('$var1','$name','$faculty','$department','$qualification','$yearofb','$dateofb','$pan','$adhar','$yearofm','$exam','$gender','$religion','$category','$home','$special')");
    */



 

       $N = count($exam1);
        echo("<p>You selected $N syllabus(s): ");
        for($i=0; $i < $N; $i++)
        {
            $var1=$exam1[$i];
         
			if($var1=='JRE')
             $var2=$yoe[0];
		 if($var1=='NET')
             $var2=$yoe[1];
		 if($var1=='SLET')
             $var2=$yoe[2];
            

                     $query=mysqli_query($con,"INSERT INTO examscleared (id,nameofexam,	yearofclearing)  VALUES ( '$id','$var1','$var2')");
                 }

             
          $N = count($course);
          for($i=0; $i < $N; $i++)
        {
            $var1=$course[$i];
            
            

                     $query=mysqli_query($con,"INSERT INTO coursestaught (id,coursestaught)  VALUES ( '$id','$var1')");
                 }
   

$query=mysqli_query($con,"INSERT INTO employmentdetails (id,dateof1contappt,dateofjoiningonpresent,lienonthepost,presentdesignation,natureofappt,natureofpost,yearofretirement)  VALUES ( '$id','$dateof1contappt','$dateofjoiningonpresent','$lien','$designation','$appoint','$nature','$yearofretire')");
   
$hobb= $_POST['mytext'];
$nat= $_POST['national'];
$fund= $_POST['fund'];
$ongorcom= $_POST['ongorcom'];
$grant= $_POST['grant'];
$year= $_POST['year'];
       $N = count($hobb);
        for($i=0; $i < $N; $i++)
        {
         
          $var2=$hobb[$i];
          $var3=$ongorcom[$i];
          $var4=$fund[$i];
          $var5=$nat[$i];
          $var6=$grant[$i];
          $var7=$year[$i];
          if(empty($var2)) 
    {
        
    } 
    else 
    {
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO projects (id, title, ongoingorcompleted, nameoffunding, nori, grannt, year)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var6','$var7')");
                 }
               }
               

$hobb2= $_POST['mytext1'];
$auth2= $_POST['author1'];
$year2= $_POST['year1'];
$publisher2= $_POST['publisher1'];
$citation2= $_POST['citationagency1'];
$impact2= $_POST['impactfactor1'];
       $N = count($hobb2);
    
        for($i=0; $i < $N; $i++)
        {
         
          $var2=$hobb2[$i];
          $var3=$auth2[$i];
          $var4=$year2[$i];
          $var5=$publisher2[$i];
          $var6=$citation2[$i];
          $var7=$impact2[$i];
          if(empty($var2)) 
    {
        
    } 
    else 
    {
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO papers (id, title, author, year, publisher, citationagency, impactfactor)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var6','$var7')");
                 }

             }

$hobb1= $_POST['mytext2'];
$auth= $_POST['author2'];
$year= $_POST['year2'];
$publisher= $_POST['publisher2'];
$citation= $_POST['citationagency2'];
$impact= $_POST['impactfactor2'];
       $N = count($hobb1);
        
        for($i=0; $i < $N; $i++)
        {
         
          $var2=$hobb1[$i];
          $var3=$auth[$i];
          $var4=$year[$i];
          $var5=$publisher[$i];
          $var6=$citation[$i];
          $var7=$impact[$i];
          if(empty($var2)) 
    {
        
    } 
    else 
    {
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO monographs (id, title, author, year, publisher, citationagency, impactfactor)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var6','$var7')");
                 }

             }

$hobb3= $_POST['mytext3'];
$auth3= $_POST['author3'];
$year3= $_POST['year3'];
$publisher3= $_POST['publisher3'];
$citation3= $_POST['citationagency3'];
$impact3= $_POST['impactfactor3'];
       $N = count($hobb3);
        
        for($i=0; $i < $N; $i++)
        {
         
          $var2=$hobb3[$i];
          $var3=$auth3[$i];
          $var4=$year3[$i];
          $var5=$publisher3[$i];
          $var6=$citation3[$i];
          $var7=$impact3[$i];
          if(empty($var2)) 
    {
        
    } 
    else 
    {
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO chaptersinbooks (id, title, author, year, publisher, citationagency, impactfactor)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var6','$var7')");
                 }

             }


$hobb4= $_POST['mytext4'];
$auth4= $_POST['author4'];
$year4= $_POST['year4'];
$publisher4= $_POST['publisher4'];
$citation4= $_POST['citationagency4'];
$impact4= $_POST['impactfactor4'];
       $N = count($hobb4);
        
        for($i=0; $i < $N; $i++)
        {
         
          $var2=$hobb4[$i];
          $var3=$auth4[$i];
          $var4=$year4[$i];
          $var5=$publisher4[$i];
          $var6=$citation4[$i];
          $var7=$impact4[$i];
          if(empty($var2)) 
    {
        
    } 
    else 
    {
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO editedbooks (id, title, author, year, publisher, citationagency, impactfactor)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var6','$var7')");
                 }

             }

             $hobb1= $_POST['mytext5'];
$auth= $_POST['author5'];
$year= $_POST['year5'];
$publisher= $_POST['publisher5'];
$citation= $_POST['citationagency5'];
$impact= $_POST['impactfactor5'];
       $N = count($hobb1);
        echo("<p>You selected $N projects(s): ");
        for($i=0; $i < $N; $i++)
        {
          
          $var2=$hobb1[$i];
          $var3=$auth[$i];
          $var4=$year[$i];
          $var5=$publisher[$i];
          $var6=$citation[$i];
          $var7=$impact[$i];
          if(empty($var2)) 
    {
        
    } 
    else 
    {
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO bookswithisbn (id, title, author, year, publisher, citationagency, impactfactor)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var6','$var7')");
                 }

             }


$title= $_POST['mytext6'];
$year= $_POST['year6'];
$nat= $_POST['national6'];

       $N = count($title);
        
        for($i=0; $i < $N; $i++)
        {
          
          $var2=$title[$i];
          $var3=$year[$i];
          $var4=$nat[$i];
         
          if(empty($var2)) 
    {
        
    } 
    else 
    {
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO patents (id, name,  year, nori)  VALUES ( '$id','$var2','$var3','$var4')");
                 }

             }    
$title= $_POST['mytext7'];
$year= $_POST['year7'];
$nat= $_POST['national7'];

       $N = count($title);
        
        for($i=0; $i < $N; $i++)
        {
          
          $var2=$title[$i];
          $var3=$year[$i];
          $var4=$nat[$i];
         
          if(empty($var2)) 
    {
        
    } 
    else 
    {
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO agencies (id, name,  year, nori)  VALUES ( '$id','$var2','$var3','$var4')");
                 }

             } 
$title= $_POST['mytext8'];
$year= $_POST['year8'];
$award= $_POST['award8'];
$nat= $_POST['national8'];
       $N = count($title);
        
        for($i=0; $i < $N; $i++)
        {
          
          $var2=$title[$i];
          $var3=$year[$i];
          $var4=$award[$i];
          $var5=$nat[$i];
          if(empty($var2)) 
    {
        
    } 
    else 
    {
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO awards (id, name, year, awardingagency, nori)  VALUES ( '$id','$var2','$var3','$var4','$var5')");
                 }

             } 
$title= $_POST['mytext9'];
$year= $_POST['year9'];
$nat= $_POST['national9'];

       $N = count($title);
        
        for($i=0; $i < $N; $i++)
        {
          
          $var2=$title[$i];
          $var3=$year[$i];
          $var4=$nat[$i];
         
          if(empty($var2)) 
    {
        
    } 
    else 
    {
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO committeesboard (id, name,  yearofserving, nori)  VALUES ( '$id','$var2','$var3','$var4')");
                 }

             }  



$nat= $_POST['national10'];
$attend= $_POST['attend10'];
$name= $_POST['name10'];
$place= $_POST['place10'];
$date= $_POST['date10'];
$sponsor= $_POST['sponsor10'];
       $N = count($nat);
    
        for($i=0; $i < $N; $i++)
        {
        
          $var2=$nat[$i];
          $var3=$attend[$i];
          $var4=$name[$i];
          $var5=$place[$i];
          $var6=$date[$i];
          $var7=$sponsor[$i];
          if(empty($var2)) 
    {
        
    } 
    else 
    {
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO conference (id, nori, aoro, name, place, dates , sponsoringagent)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var6','$var7')");
                 }

             }     

$year= $_POST['year11'];
$nat= $_POST['amount11'];

       $N = count($year);
        
        for($i=0; $i < $N; $i++)
        {
          
          $var2=$year[$i];
          $var3=$nat[$i];
          
         
          if(empty($var2)) 
    {
        
    } 
    else 
    {
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO consulties (id, year, amount)  VALUES ( '$id','$var2','$var3')");
                 }

             }  

$coluniinstt= $_POST['coluniinstt12'];
$cocurri= $_POST['cocurri12'];
$campuslife= $_POST['campuslife12'];
$studwelfare= $_POST['studwelfare12'];
$bodcommedu= $_POST['bodcommedu12'];
$proforgteacher= $_POST['proforgteacher12'];

   $i=0;
          
          $var2=$coluniinstt[$i];
          $var3=$cocurri[$i];
		  $var4=$campuslife[$i];
          $var5=$studwelfare[$i];
		  $var6=$bodcommedu[$i];
          $var7=$proforgteacher[$i];
          
       
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
             $query=mysqli_query($con,"INSERT INTO corporate (id, coluniinstt, cocurri, campuslife, studwelfare, bodcommedu, proforgteacher)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var6','$var7')");
           

             

$title= $_POST['mytext13'];
$year= $_POST['year13'];
$benefit= $_POST['benefit13'];

       $N = count($title);
        
        for($i=0; $i < $N; $i++)
        {
          
          $var2=$title[$i];
          $var3=$year[$i];
          $var4=$benefit[$i];
         
          if(empty($var2)) 
    {
        
    } 
    else 
    {
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO externalwork (id, name,year,groupbenefitted)  VALUES ( '$id','$var2','$var3','$var4')");
                 }

             }  

$revdesign14= $_POST['revdesign14'];
$teachingmethods14= $_POST['teachingmethods14'];
$labexp14= $_POST['labexp14'];
$evalmethods14= $_POST['evalmethods14'];
$resourcemat14= $_POST['resourcemat14'];
$remtorstudcounselling14= $_POST['remtorstudcounselling14'];
$other14= $_POST['other14'];
  
        
$i=0;
          $var2=$revdesign14[$i];
          $var3=$teachingmethods14[$i];
          $var4=$labexp14[$i];
          $var5=$evalmethods14[$i];
          $var6=$resourcemat14[$i];
          $var7=$remtorstudcounselling14[$i];
          $var8=$other14[$i];
         
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO innovations (id, revdesign ,teachingmethods,labexp,evalmethods,resourcemat,remtorstudcounselling,other)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var6','$var7','$var8')");
                 

             }  
     
$attend= $_POST['attend15'];
$name= $_POST['mytext15'];
$year= $_POST['year15'];
$duration= $_POST['duration15'];
$place= $_POST['place15'];

       $N = count($attend);
    
        for($i=0; $i < $N; $i++)
        {
          $var2=$attend[$i];
          $var3=$name[$i];
          $var4=$year[$i];
          $var5=$duration[$i];
          $var6=$place[$i];
         
          if(empty($var2)) 
    {
        
    } 
    else 
    {
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO recharging (id, aoro, name,year,duration ,placeoragency)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var6')");
                 }

             }     
             $title= $_POST['research16'];


       $N = count($title);
        
        for($i=0; $i < $N; $i++)
        {
          
          $var2=$title[$i];
        
         
          if(empty($var2)) 
    {
        
    } 
    else 
    {
            $con=mysqli_connect("localhost","root","");
             mysqli_select_db($con,"facultydetails");
  
            
            
                     $query=mysqli_query($con,"INSERT INTO researchguidance (id,researchguidance  )  VALUES ( '$id','$var2')");
                 }

             }         

   
   ?>
<center>
<form name="f1" method="post" >
<TABLE >
    <tr>
        <td><td><input type="submit" class="login" name="logout" value="LOG OUT"></td>
         <td><td><input type="submit" class="login" name="home" value="GO TO HOME PAGE"></td>
    </tr>
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
?>

<script> location.replace("filled1.php"); </script>
<?php
}
?>
</body>
</html>