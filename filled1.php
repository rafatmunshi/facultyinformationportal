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
</head>

<body>

  <main>
    <form name="f1" method="post">
      <table class="table table-striped">
        <tr>
          <td> ID: </TD>
          <TD>
            <input type="text" name="id" />
          </TD>
        </TR>
        <tr>
          <td>
            <td>
              <input type="submit" class="login" name="set" value="check">
            </td>

        </tr>
      </table>
    </form>
	
	                            <form name="f1" method="post">
                                      <table class="table table-striped" align="center" cellpadding="15" cellspacing="5" border="1">
                                        <tr id="d">
                                          <td id="e">
                                            <input type="submit" class="login" name="logout" value="LOG OUT" style="color:green;">
                                          </td>

                                          <td id="e">
                                            <input type="submit" class="login" name="change" value="CHANGE PASSWORD" style="color:green;">
                                          </td>
                                        </tr>
                                        <tr id="d">
                                         
                                          <td id="e">
                                            <input type="submit" class="login" name="delete" value="DELETE TEACHER" style="color:green;">
                                          </td>
                                        </tr>
                                      </table>
                                    </form>
                                    </div>
                                    </main>
                                    <?php

if(isset($_POST["logout"])) 
{
?>
                                      <script>
                                        location.replace("logout.php");

                                      </script>
                                      <?php
}
if(isset($_POST["change"])) 
{
?>
                                        <script>
                                          location.replace("changepassword.php");

                                        </script>
                                        <?php 
}
if(isset($_POST["add"])) 
{
?>
                                          <script>
                                            location.replace("test.php");

                                          </script>
                                          <?php 
}
if(isset($_POST["delete"])) 
{
?>
                                            <script>
                                              location.replace("delete.php");

                                            </script>
                                            <?php 
}

?>

    <?php
if(isset($_POST["set"])) 
{
  
  $pass=$_POST['id'];

$query=mysqli_query($con,"SELECT * FROM `teacherpersonal` WHERE id=$pass");
$row=mysqli_fetch_assoc($query);

?>
      <table>
        <H1>PERSONAL DETAILS </H1>
        <div class="container">
          <table class="table table-striped">

            <tr>
              <td>NAME</td>
              <td>
                <?php echo $row['name']?>
              </td>
            </tr>
            <tr>
              <td>FACULTY</td>
              <td>
                <?php echo $row['faculty']?>
              </td>
            </tr>
            <tr>
              <td>DEPARTMENT</td>
              <td>
                <?php echo $row['department']?>
              </td>
            </tr>
            <tr>
              <td>EMAIL</td>
              <td>
                <?php echo $row['email']?>
              </td>
            </tr>
			<tr>
              <td>MOBILE</td>
              <td>
                <?php echo $row['mobile']?>
              </td>
            </tr>
            <tr>
              <td>QUALIFICATION</td>
              <td>
                <?php echo $row['qualification']?>
              </td>
            </tr>
            <tr>
              <td>YEAR OF BIRTH</td>
              <td>
                <?php echo $row['yearofbirth']?>
              </td>
            </tr>
            <tr>
              <td>DATE OF BIRTH</td>
              <td>
                <?php echo $row['dateofbirth']?>
              </td>
            </tr>
            <tr>
              <td>PAN NO</td>
              <td>
                <?php echo $row['panno']?>
              </td>
            </tr>
            <tr>
              <td>ADHAR NO</td>
              <td>
                <?php echo $row['adharno']?>
              </td>
            </tr>
            <tr>
              <td>YEAR OF PH.D/M.Phil</td>
              <td>
                <?php echo $row['yearofphp']?>
              </td>
            </tr>
            <tr>
              <td>WHETHER NET SLET GRE GATE?</td>
              <td>
                <?php echo $row['netsletjrf']?>
              </td>
            </tr>
            <tr>
              <td>EXAMS CLEARED</td>
              <td>
                <?php 
       $query1=mysqli_query($con,"SELECT * FROM `examscleared` WHERE id=$pass");
       $count=mysqli_num_rows($query1);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row1=mysqli_fetch_assoc($query1);
        echo $i.") ";
        echo $row1['nameofexam'].$row1['yearofclearing'];
       }
       }
      else{
        echo "NILL";
      }

      ?>
              </td>
            </tr>
            <tr>
              <td>GENDER</td>
              <td>
                <?php echo $row['gender']?>
              </td>
            </tr>
            <tr>
              <td>RELIGION</td>
              <td>
                <?php echo $row['religion']?>
              </td>
            </tr>
            <tr>
              <td>CATEGORY</td>
              <td>
                <?php echo $row['category']?>
              </td>
            </tr>
            <tr>
              <td>HOME STATE</td>
              <td>
                <?php echo $row['homestate']?>
              </td>
            </tr>
            <tr>
              <td>SPECIALIASTION</td>
              <td>
                <?php echo $row['specialisation']?>
              </td>
            </tr>
          </table>

</body>

</html>
<?php
       $query=mysqli_query($con,"SELECT * FROM `employmentdetails` WHERE id=$pass");
       $row=mysqli_fetch_assoc($query);
?>
  <H1>EMPLOYMENT DETAILS </H1>
  <table class="table table-striped">

    <tr>
      <td>DATE OF 1
        <SUP>ST</SUP> CONTINUOUS APPOINTMENT</td>
      <td>
        <?php echo $row['dateof1contappt']?>
      </td>
    </tr>
    <tr>
      <td>DATE OF JOINING ON PRESENT POST</td>
      <td>
        <?php echo $row['dateofjoiningonpresent']?>
      </td>
    </tr>
    <tr>
      <td>LIEN ON THE POST</td>
      <td>
        <?php echo $row['lienonthepost']?>
      </td>
    </tr>
    <tr>
      <td>PRESENT DESIGNATION</td>
      <td>
        <?php echo $row['presentdesignation']?>
      </td>
    </tr>
    <tr>
      <td>NATURE OF APPOINTMENT</td>
      <td>
        <?php echo $row['natureofappt']?>
      </td>
    </tr>
    <tr>
      <td>NATURE OF POST</td>
      <td>
        <?php echo $row['natureofpost']?>
      </td>
    </tr>
    <tr>
      <td>YEAR OF RETIREMENT</td>
      <td>
        <?php echo $row['yearofretirement']?>
      </td>
    </tr>
    <tr>
      <td>COURSES TAUGHT </td>
      <td>
        <?php 
       $query1=mysqli_query($con,"SELECT * FROM `coursestaught` WHERE id=$pass");
       $count=mysqli_num_rows($query1);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row1=mysqli_fetch_assoc($query1);
        echo $i.") ";
        echo $row1['coursestaught'];
       }
       }
      else{
        echo "NILL";
      }

      ?>
      </td>
    </tr>
  </table>



  <?php
       $query=mysqli_query($con,"SELECT * FROM `projects` WHERE id=$pass");
       
?>
    <H1>PROJECT DETAILS </H1>
    <table class="table table-striped">
      <thead>
        <td>Sr No</td>
        <td>TITLE</td>
        <td>ONGOING OR COMPLETED</td>
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
        <TR>
          <td>
            <?php echo $i.") ";?>
          </td>
          <td>
            <?php echo $row['title']?>
          </td>
          <td>
            <?php echo $row['ongoingorcompleted']?>
          </td>
          <td>
            <?php echo $row['nameoffunding']?>
          </td>
          <td>
            <?php echo $row['nori']?>
          </td>
          <td>
            <?php echo $row['grannt']?>
          </td>
          <td>
            <?php echo $row['year']?>
          </td>
        </TR>
        <?php
       }
       }
      else{
        ?>
          <TR>
            <td>NO PROJECTS</td>
          </TR>
          <?php
      }
?>
    </table>



    <?php
       $query=mysqli_query($con,"SELECT * FROM `papers` WHERE id=$pass");
       
?>
      <H1>PAPER DETAILS </H1>
      <table class="table table-bordered table-striped">
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

          <TR>
            <td>
              <?php echo $i.") ";?>
            </td>
            <td>
              <?php echo $row['title']?>
            </td>
            <td>
              <?php echo $row['author']?>
            </td>
			 <td>
              <?php echo $row['month']?>
            </td>
            <td>
              <?php echo $row['year']?>
            </td>
            <td>
              <?php echo $row['publisher']?>
            </td>
			 <td>
              <?php echo $row['nori']?>
            </td>
			 <td>
              <?php echo $row['conforjournal']?>
            </td>
            <td>
              <?php echo $row['citationagency']?>
            </td>
            <td>
              <?php echo $row['impactfactor']?>
            </td>
          </TR>
          <?php }}
      else{
        ?>
            <TR>
              <td>NO PAPERS</td>
            </TR>
            <?php
      }
?>
      </table>



      <?php
       $query=mysqli_query($con,"SELECT * FROM `monographs` WHERE id=$pass");
       
?>
        <H1>MONOGRAPHS DETAILS </H1>
        <table class="table table-bordered table-striped">
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
            <TR>
              <td>
                <?php echo $i.") ";?>
              </td>
              <td>
                <?php echo $row['title']?>
              </td>
              <td>
                <?php echo $row['author']?>
              </td>
              <?php echo $row['year']?>
                </td>
                <?php echo $row['publisher']?>
                  </td>
                  <?php echo $row['citationagency']?>
                    </td>
                    <?php echo $row['impactfactor']?>
                      </td>
            </TR>
            <?php
       }
       }
      else{
        ?>
              <TR>
                <td>NO MONOGRAPHS</td>
              </TR>
              <?php
         }
        ?>
        </table>

        <?php
       $query=mysqli_query($con,"SELECT * FROM `chaptersinbooks` WHERE id=$pass");
       
?>
          <H1>CHAPTERS IN BOOKS DETAILS </H1>
          <table class="table table-bordered table-striped">
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
              <TR>
                <td>
                  <?php echo $i.") ";?>
                </td>
                <td>
                  <?php echo $row['title']?>
                </td>
                <td>
                  <?php echo $row['author']?>
                </td>
                <td>
                  <?php echo $row['year']?>
                </td>
                <td>
                  <?php echo $row['publisher']?>
                </td>
  
              </TR>
              <?php
       }
       }
      else{
        ?>
                <TR>
                  <td>NO CHAPTERS IN BOOKS</td>
                </TR>
                <?php
         }
        ?>
          </table>

          <?php
       $query=mysqli_query($con,"SELECT * FROM `editedbooks` WHERE id=$pass");
       
?>
            <H1>EDITED BOOKS DETAILS </H1>
            <table class="table table-bordered table-striped">
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
                <TR>
                  <td>
                    <?php echo $i.") ";?>
                  </td>
                  <td>
                    <?php echo $row['title']?>
                  </td>
                  <td>
                    <?php echo $row['author']?>
                  </td>
                  <td>
                    <?php echo $row['year']?>
                  </td>
                  <td>
                    <?php echo $row['publisher']?>
                  </td>
     
                </TR>
                <?php
       }
       }
      else{
        ?>
                  <TR>
                    <td>NO EDITED BOOKS</td>
                  </TR>
                  <?php
         }
        ?>
            </table>




            <?php
       $query=mysqli_query($con,"SELECT * FROM `bookswithisbn` WHERE id=$pass");
       
?>
              <H1>BOOKS WITH ISBN DETAILS </H1>
              <table class="table table-bordered table-striped">
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
                  <TR>
                    <td>
                      <?php echo $i.") ";?>
                    </td>
                    <td>
                      <?php echo $row['title']?>
                    </td>
                    <td>
                      <?php echo $row['author']?>
                    </td>
                    <td>
                      <?php echo $row['year']?>
                    </td>
                    <td>
                      <?php echo $row['publisher']?>
                    </td>
            
                  </TR>
                  <?php
       }
       }
      else{
        ?>
                    <TR>
                      <td>NOBOOKS WITH ISBN</td>
                    </TR>
                    <?php
         }
        ?>
              </table>



              <?php
       $query=mysqli_query($con,"SELECT * FROM `patents` WHERE id=$pass");
       
?>
                <H1>PATENTS DETAILS </H1>
                <table class="table table-bordered table-striped">
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
                    <TR>
                      <td>
                        <?php echo $i.") ";?>
                      </td>
                      <td>
                        <?php echo $row['name']?>
                      </td>
                      <td>
                        <?php echo $row['year']?>
                      </td>
                      <td>
                        <?php echo $row['nori']?>
                      </td>
					     <td>
                        <?php echo $row['filedorawarded']?>
                      </td>

                      <?php
       }
       }
      else{
        ?>
                        <TR>
                          <td>NO PATENTS</td>
                        </TR>
                        <?php
         }
        ?>
                </table>


                <?php
       $query=mysqli_query($con,"SELECT * FROM `agencies` WHERE id=$pass");
       
?>
                  <H1>AGENCY DETAILS </H1>
                  <table class="table table-bordered table-striped">
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
                      <TR>
                        <td>
                          <?php echo $i.") ";?>
                        </td>
                        <td>
                          <?php echo $row['name']?>
                        </td>
                        <td>
                          <?php echo $row['year']?>
                        </td>
                        <td>
                          <?php echo $row['nori']?>
                        </td>

                        <?php
       }
       }
      else{
        ?>
                          <TR>
                            <td>NO AGENCY</td>
                          </TR>
                          <?php
         }
        ?>
                  </table>


                  <?php
       $query=mysqli_query($con,"SELECT * FROM `awards` WHERE id=$pass");
       
?>
                    <H1>AWARD DETAILS </H1>
                    <table class="table table-bordered table-striped">
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
                        <TR>
                          <td>
                            <?php echo $i.") ";?>
                          </td>
                          <td>
                            <?php echo $row['name']?>
                          </td>
                          <td>
                            <?php echo $row['year']?>
                          </td>
                          <td>
                            <?php echo $row['awardingagency']?>
                          </td>
                          <td>
                            <?php echo $row['nori']?>
                          </td>

                          <?php
       }
       }
      else{
        ?>
                            <TR>
                              <td>NO AWARDS</td>
                            </TR>
                            <?php
         }
        ?>
                    </table>


                    <?php
       $query=mysqli_query($con,"SELECT * FROM `committeesboard` WHERE id=$pass");
       
?>
                      <H1>COMMITTEES BOARD DETAILS </H1>
                      <table class="table table-bordered table-striped">
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
                          <TR>
                            <td>
                              <?php echo $i.") ";?>
                            </td>
                            <td>
                              <?php echo $row['name']?>
                            </td>
                            <td>
                              <?php echo $row['yearofserving']?>
                            </td>
                            <td>
                              <?php echo $row['nori']?>
                            </td>

                            <?php
       }
       }
      else{
        ?>
                              <TR>
                                <td>NO COMMITTEES BOARD</td>
                              </TR>
                              <?php
         }
        ?>
                      </table>


                      <?php
       $query=mysqli_query($con,"SELECT * FROM `conference` WHERE id=$pass");
       
?>
                        <H1>CONFERENCE DETAILS </H1>
                        <table class="table table-bordered table-striped">
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
                            <TR>
                              <td>
                                <?php echo $i.") ";?>
                              </td>
                              <td>
                                <?php echo $row['nori']?>
                              </td>
                              <td>
                                <?php echo $row['aoro']?>
                              </td>
                              <td>
                                <?php echo $row['name']?>
                              </td>
                              <td>
                                <?php echo $row['place']?>
                              </td>
							   <td>
                                <?php echo $row['dates']?>
                              </td>
                              <td>
                                <?php echo $row['year']?>
                              </td>
                              <td>
                                <?php echo $row['sponsoringagent']?>
                              </td>
                              <?php
       }
       }
      else{
        ?>
                                <TR>
                                  <td>NO CONFERENCE</td>
                                </TR>
                                <?php
         }
        ?>
                        </table>


                        <?php
       $query=mysqli_query($con,"SELECT * FROM `consulties` WHERE id=$pass");
       
?>
                          <H1>CONSULTANCIES DETAILS </H1>
                          <table class="table table-bordered table-striped">
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
                              <TR>
                                <td>
                                  <?php echo $i.") ";?>
                                </td>
                                <td>YEAR</td>
                                <td>
                                  <?php echo $row['year']?>
                                </td>
                                <td>AMOUNT</td>
                                <td>
                                  <?php echo $row['amount']?>
                                </td>


                                <?php
       }
       }
      else{
        ?>
                                  <TR>
                                    <td>NO CONSULTANCIES</td>
                                  </TR>
                                  <?php
         }
        ?>
                          </table>


                          <?php
       $query=mysqli_query($con,"SELECT * FROM `corporate` WHERE id=$pass");
       
?>
                            <H1>CORPORATE DETAILS </H1>
                            <table class="table table-bordered table-striped">
                              <thead>
                                <td>Sr No</td>
                                <td>College/ University/ Institution</td>
                                <td>Co-curricular Activities</td>
                                <td>Enrichment of Campus life (Hostels, sports.games)</td>
                                <td>Students Welfare and Discipline</td>
                                <td>Membership/ participation in bodies/ committees on Education</td>
                                <td>Professional Organization of Teachers</td>
                              </thead>
                              <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>
                                <TR>
                                  <td>
                                    <?php echo $i.") ";?>
                                  </td>
                                  <td>
                                    <?php echo $row['coluniinstt']?>
                                  </td>
                                  <td>
                                    <?php echo $row['cocurri']?>
                                  </td>
                                  <td>
                                    <?php echo $row['campuslife']?>
                                  </td>
                                  <td>
                                    <?php echo $row['studwelfare']?>
                                  </td>
                                  <td>
                                    <?php echo $row['bodcommedu']?>
                                  </td>
                                  <td>
                                    <?php echo $row['proforgteacher']?>
                                  </td>


                                  <?php
       }
       }
      else{
        ?>
                                    <TR>
                                      <td>NO CORPORATE</td>
                                    </TR>
                                    <?php
         }
        ?>
                            </table>

                            <?php
       $query=mysqli_query($con,"SELECT * FROM `externalwork` WHERE id=$pass");
       
?>
                              <H1>EXTERNAL WORK DETAILS </H1>
                              <table class="table table-bordered table-striped">
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
                                  <TR>
                                    <td>
                                      <?php echo $i.") ";?>
                                    </td>
                                    <td>
                                      <?php echo $row['name']?>
                                    </td>
                                    <td>
                                      <?php echo $row['year']?>
                                    </td>
									<td>
                                      <?php echo $row['place']?>
                                    </td>
                                    <td>
                                      <?php echo $row['groupbenefitted']?>
                                    </td>

                                    <?php
       }
       }
      else{
        ?>
                                      <TR>
                                        <td>NO EXTERNAL WORKS</td>
                                      </TR>
                                      <?php
         }
        ?>
                              </table>


                              <?php
       $query=mysqli_query($con,"SELECT * FROM `innovations` WHERE id=$pass");
       
?>
                                <H1>INNOVATION DETAILS </H1>
                                <table class="table table-bordered table-striped">

                                  <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>
                                    <table class="table table-bordered table-striped">
                                      <tr>
                                        <td>
                                          <?php echo $i.") ";?>
                                        </td>
                                      </TR>
                                      <TR>
                                        <td>Revision/Design of Curriculum/ Syllabus :</td>
                                        <td>
                                          <?php echo $row['revdesign']?>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>TEACHING METHODS :</td>
                                        <td>
                                          <?php echo $row['teachingmethods']?>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td> LABORATORY EXPERIMENTS :</td>
                                        <td>
                                          <?php echo $row['labexp']?>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>EVALUATION METHODS :</td>
                                        <td>
                                          <?php echo $row['evalmethods']?>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td> Preparation of Resource Material :</td>
                                        <td>
                                          <?php echo $row['resourcemat']?>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td> Remedial Teaching/ Student Counselling : </td>
                                        <td>
                                          <?php echo $row['remtorstudcounselling']?>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>ANY OTHER :</td>
                                        <td>
                                          <?php echo $row['other']?>
                                        </td>
                                      </tr>

                                    </table>


                                    <?php
       }
       }
      else{
        ?>
                                      <TR>
                                        <td>NO INNOVATIONS</td>
                                      </TR>
                                      <?php
         }
        ?>
                                </table>

                                <?php
       $query=mysqli_query($con,"SELECT * FROM `recharging` WHERE id=$pass");
       
?>
                                  <H1>RECHARGING  DETAILS </H1>
                                  <table class="table table-bordered table-striped">
                                    <thead>
                                      <td>Sr No</td>
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
                                      <TR>
                                        <td>
                                          <?php echo $i.") ";?>
                                        </td>
                                        <td>
                                          <?php echo $row['aoro']?>
                                        </td>
                                        <td>
                                          <?php echo $row['name']?>
                                        </td>
                                        <td>
                                          <?php echo $row['year']?>
                                        </td>
                                        <td>
                                          <?php echo $row['duration']?>
                                        </td>
                                        <td>
                                          <?php echo $row['placeoragency']?>
                                        </td>
                                        <?php
       }
       }
      else{
        ?>
                                          <TR>
                                            <td>NO RECHARGING</td>
                                          </TR>
                                          <?php
         }
        ?>
                                  </table>

                                  <?php
       $query=mysqli_query($con,"SELECT * FROM `researchguidance` WHERE id=$pass");
       
?>
                                    <H1>RESEARCH GUIDANCE  DETAILS </H1>
                                    <table class="table table-bordered table-striped">
                                      <?php
  $count=mysqli_num_rows($query);
       
       if($count>0)
       {
       for($i=1;$i<=$count;$i++)
       {
        $row=mysqli_fetch_assoc($query);
        ?>
                                        <TR>
                                          <td>
                                            <?php echo $i.") ";?>
                                          </td>
                                          <td>MTECH LEVEL</td>
                                          <td>
                                            <?php echo $row['mtechlevel']?>
                                          </td>
										    <td>PHD LEVEL</td>
                                          <td>
                                            <?php echo $row['phdlevel']?>
                                          </td>
                                          <?php
       }
       }
      else{
        ?>
                                            <TR>
                                              <td>NO RESEARCH GUIDANCE</td>
                                            </TR>
                                            <?php
         }
}
        ?>
                                    </table>

        
                                              </body>

                                              </HTML>

