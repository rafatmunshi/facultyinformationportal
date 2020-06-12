
<?php
require 'db.php';
try{
include 'createlog.php';
$query = mysqli_query($con, "SELECT * FROM `teacherpersonal` WHERE id=$id");
$row = mysqli_fetch_assoc($query);
$query1 = mysqli_query($con, "SELECT * FROM `employmentdetails` WHERE id=$id");
$row1 = mysqli_fetch_assoc($query1);
$query2 = mysqli_query($con, "SELECT * FROM `examscleared` WHERE id=$id");
$query3 = mysqli_query($con, "SELECT coursestaught FROM `coursestaught` WHERE id=$id");

if (isset($_POST["start"]))
	{


	$editedid = isset($_POST['id']) ? $_POST['id'] : '';
	$name = isset($_POST['names']) ? $_POST['names'] : '';
	$faculty = isset($_POST['faculty']) ? $_POST['faculty'] : '';
	$department = isset($_POST['department']) ? $_POST['department'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
	$qualification = isset($_POST['qualification']) ? $_POST['qualification'] : '';
	$yearofbirth = isset($_POST['yearofbirth']) ? $_POST['yearofbirth'] : '';
	$dateofbirth = isset($_POST['dateofbirth']) ? $_POST['dateofbirth'] : '';
	$panno = isset($_POST['panno']) ? $_POST['panno'] : '';
	$adharno = isset($_POST['adharno']) ? $_POST['adharno'] : '';
	$yearofphp = isset($_POST['yearofphp']) ? $_POST['yearofphp'] : '';
	$religion = isset($_POST['religion']) ? $_POST['religion'] : '';
	$category = isset($_POST['category']) ? $_POST['category'] : '';
	$homestate = isset($_POST['homestate']) ? $_POST['homestate'] : '';
	$specialisation = isset($_POST['specialisation']) ? $_POST['specialisation'] : '';
	$dateof1contappt = isset($_POST['dateof1contappt']) ? $_POST['dateof1contappt'] : '';
	$dateofjoiningonpresent = isset($_POST['dateofjoiningonpresent']) ? $_POST['dateofjoiningonpresent'] : '';
	$lienonthepost = isset($_POST['lienonthepost']) ? $_POST['lienonthepost'] : '';
	$presentdesignation = isset($_POST['presentdesignation']) ? $_POST['presentdesignation'] : '';
	$natureofappt = isset($_POST['natureofappt']) ? $_POST['natureofappt'] : '';
	$natureofpost = isset($_POST['natureofpost']) ? $_POST['natureofpost'] : '';
	$yearofretirement = isset($_POST['yearofretirement']) ? $_POST['yearofretirement'] : '';
	$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
	$query = mysqli_query($con, "SELECT * FROM `teacherpersonal` WHERE id=$id");
	$row = mysqli_fetch_assoc($query);
	$count=mysqli_num_rows($query);
	if( $count==0){
		$query = mysqli_query($con, "INSERT INTO teacherpersonal (id)  VALUES ( '$editedid')");
				write_mysql_log("teacherpersonal inserted", "rpunitpoly", $id);
	}
	$query = mysqli_query($con, "SELECT * FROM `teacherpersonal` WHERE id=$id");
	$row = mysqli_fetch_assoc($query);
	if ($row['name'] == $name && $row['faculty'] == $faculty && $row['department'] == $department && $row['qualification'] == $qualification && $row['yearofbirth'] == $yearofbirth && $row['dateofbirth'] == $dateofbirth && $row['panno'] == $panno && $row['adharno'] == $adharno && $row['religion'] == $religion && $row['homestate'] == $homestate && $row['gender'] == $gender && $row['yearofphp'] == $yearofphp && $row['email'] == $email && $row['mobile'] == $mobile && $row['specialisation'] == $specialisation&& $row['category'] == $category)
		{
		}
	  else
		{
		$query = mysqli_query($con, "UPDATE teacherpersonal set name='$name',faculty='$faculty',department='$department', email='$email', mobile='$mobile', gender='$gender', qualification='$qualification',yearofbirth='$yearofbirth',dateofbirth='$dateofbirth',panno='$panno',adharno='$adharno',yearofphp='$yearofphp',religion='$religion',homestate='$homestate',specialisation='$specialisation',category='$category' where id=$id");
		write_mysql_log("teacherpersonal updated", "rpunitpoly", $id);
		}

	$query1 = mysqli_query($con, "SELECT * FROM `employmentdetails` WHERE id=$id");
	$row1 = mysqli_fetch_assoc($query1);
	$count1=mysqli_num_rows($query1);
	if( $count1==0){
		$query1 = mysqli_query($con, "INSERT INTO employmentdetails (id)  VALUES ( '$editedid')");
				write_mysql_log("employmentdetails inserted", "rpunitpoly", $id);
	}
	$query1 = mysqli_query($con, "SELECT * FROM `employmentdetails` WHERE id=$id");
	$row1 = mysqli_fetch_assoc($query1);
	if ($row1['dateof1contappt'] == $dateof1contappt && $row1['dateofjoiningonpresent'] == $dateofjoiningonpresent && $row1['lienonthepost'] == $lienonthepost && $row1['presentdesignation'] == $presentdesignation && $row1['natureofappt'] == $natureofappt && $row1['natureofpost'] == $natureofpost && $row1['yearofretirement'] == $yearofretirement)
		{
		}
	  else
		{
		$query = mysqli_query($con, "UPDATE employmentdetails set dateof1contappt='$dateof1contappt',dateofjoiningonpresent='$dateofjoiningonpresent',lienonthepost='$lienonthepost',presentdesignation='$presentdesignation',natureofappt='$natureofappt',natureofpost='$natureofpost',yearofretirement='$yearofretirement' where id=$id");
		write_mysql_log("employmentdetails updated", "rpunitpoly", $id);
		}

		$netsletjrf = isset($_POST['netsletjrf']) ? $_POST['netsletjrf'] : '';
	
	$nameofexam = isset($_POST['nameofexam']) ? $_POST['nameofexam'] : '';
	
	$yearofclearing = isset($_POST['yearofclearing']) ? $_POST['yearofclearing'] : '';
	
	if (empty($netsletjrf))
		{
		
		$netsletjrf = 'NO';
		if ($row['netsletjrf'] != $netsletjrf)
			{
			mysqli_query($con, "UPDATE teacherpersonal set netsletjrf='NO' where id=$id");
			mysqli_query($con, "DELETE FROM examscleared where id=$id");
			}
			
			$N = count($nameofexam);
		if ($nameofexam == '')
			{
				mysqli_query($con, "DELETE FROM examscleared where id=$id");
			
			}
			if ($nameofexam != '')
			{
				echo "count of exams is".$N;
			mysqli_query($con, "DELETE FROM examscleared where id=$id");
			for ($i = 0; $i < $N; $i++)
				{
				$var1 = $nameofexam[$i];
				if ($var1 == 'GRE') $var2 = $yearofclearing[0];
				if ($var1 == 'NET') $var2 = $yearofclearing[1];
				if ($var1 == 'SLET') $var2 = $yearofclearing[2];
				if ($var1 == 'GATE') $var2 = $yearofclearing[3];
				$query = mysqli_query($con, "INSERT INTO examscleared (id,nameofexam,yearofclearing)  VALUES ( '$id','$var1','$var2')");
				echo "inserted";
				}
			}
		}
	  else
		{
			echo "in else";
		if ($row['netsletjrf'] != $netsletjrf)
			{
				echo "netsletjrf changed";
			mysqli_query($con, "UPDATE teacherpersonal set netsletjrf='$netsletjrf' where id=$id");
			write_mysql_log("teacherpersonal updated", "facultydetails", $id);
			}

		$N = count($nameofexam);
		if ($nameofexam != '')
			{
				echo "count of exams is".$N;
			mysqli_query($con, "DELETE FROM examscleared where id=$id");
			for ($i = 0; $i < $N; $i++)
				{
				$var1 = $nameofexam[$i];
				if ($var1 == 'GRE') $var2 = $yearofclearing[0];
				if ($var1 == 'NET') $var2 = $yearofclearing[1];
				if ($var1 == 'SLET') $var2 = $yearofclearing[2];
				if ($var1 == 'GATE') $var2 = $yearofclearing[3];
				$query = mysqli_query($con, "INSERT INTO examscleared (id,nameofexam,yearofclearing)  VALUES ( '$id','$var1','$var2')");
				echo "inserted";
				}
			}
		}

	$course = isset($_POST['coursestaught']) ? $_POST['coursestaught'] : '';
	$N = count($course);
	if ($course != '')
		{
		mysqli_query($con, "DELETE FROM coursestaught where id=$id");
		for ($i = 0; $i < $N; $i++)
			{
			$query = mysqli_query($con, "SELECT * FROM `coursestaught` WHERE id=$id");
			$row = mysqli_fetch_assoc($query);
			$count = mysqli_num_rows($query);
			if ($row['coursestaught'] == $course[$i])
				{
				}
			  else
				{
				$var1 = $course[$i];
				$query = mysqli_query($con, "INSERT INTO coursestaught (id,coursestaught)  VALUES ( '$id','$var1')");
				
				}
			}
		}
	  else
		{
		$query = mysqli_query($con, "SELECT * FROM `coursestaught` WHERE id=$id");
		$row = mysqli_fetch_assoc($query);
		$count = mysqli_num_rows($query);
		if ($count > 0) mysqli_query($con, "DELETE FROM coursestaught where id=$id");
		
		}

	$hobb = isset($_POST['mytext']) ? $_POST['mytext'] : '';
	$nat = isset($_POST['national']) ? $_POST['national'] : '';
	$fund = isset($_POST['fund']) ? $_POST['fund'] : '';
	$ongorcom = isset($_POST['ongorcom']) ? $_POST['ongorcom'] : '';
	$grant = isset($_POST['grant']) ? $_POST['grant'] : '';
	$year = isset($_POST['year']) ? $_POST['year'] : '';
	$N = count($hobb);
	if ($hobb != '')
		{
		mysqli_query($con, "DELETE FROM projects where id=$id");
		for ($i = 0; $i < $N; $i++)
			{
			$var2 = $hobb[$i];
			$var3 = $ongorcom[$i];
			$var4 = $fund[$i];
			$var5 = $nat[$i];
			$var6 = $grant[$i];
			$var7 = $year[$i];
			if (empty($var2))
				{
				}
			  else
				{
				$query = mysqli_query($con, "SELECT * FROM `projects` WHERE id=$id");
				$row = mysqli_fetch_assoc($query);
				$count = mysqli_num_rows($query);
				if ($row['title'] == $var2 && $row['ongoingorcompleted'] == $var3 && $row['nameoffunding'] == $var4 && $row['nori'] == $var5 && $row['grannt'] == $var6 && $row['year'] == $var7)
					{
					}
				  else
					{
					$query = mysqli_query($con, "INSERT INTO projects (id, title, ongoingorcompleted, nameoffunding, nori, grannt, year)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var6','$var7')");
					write_mysql_log("projects changed", "rpunitpoly", $id);
					}
				}
			}
		}
	  else
		{
		$query = mysqli_query($con, "SELECT * FROM `projects` WHERE id=$id");
		$row = mysqli_fetch_assoc($query);
		$count = mysqli_num_rows($query);
		if ($count > 0) mysqli_query($con, "DELETE FROM projects where id=$id");
		}

	$hobb2 = isset($_POST['mytext1']) ? $_POST['mytext1'] : '';
	$auth2 = isset($_POST['author1']) ? $_POST['author1'] : '';
	$month = isset($_POST['month']) ? $_POST['month'] : '';
	$year2 = isset($_POST['year1']) ? $_POST['year1'] : '';
	$publisher2 = isset($_POST['publisher1']) ? $_POST['publisher1'] : '';
	$national2 = isset($_POST['national1']) ? $_POST['national1'] : '';
	$conforjournal = isset($_POST['conforjournal']) ? $_POST['conforjournal'] : '';
	$citation2 = isset($_POST['citationagency1']) ? $_POST['citationagency1'] : '';
	$impact2 = isset($_POST['impactfactor1']) ? $_POST['impactfactor1'] : '';
	$N = count($hobb2);
	if ($hobb2 != '')
		{
		mysqli_query($con, "DELETE FROM papers where id=$id");
		for ($i = 0; $i < $N; $i++)
			{
			$var2 = $hobb2[$i];
			$var3 = $auth2[$i];
			$var8 = $month[$i];
			$var4 = $year2[$i];
			$var5 = $publisher2[$i];
			$var9 = $national2[$i];
			$var10 = $conforjournal[$i];
			$var6 = $citation2[$i];
			$var7 = $impact2[$i];
			if (empty($var2))
				{
				}
			  else
				{
				$query = mysqli_query($con, "SELECT * FROM `papers` WHERE id=$id");
				$row = mysqli_fetch_assoc($query);
				$count = mysqli_num_rows($query);
				if ($row['title'] == $var2 && $row['author'] == $var3 && $row['month'] == $var8 && $row['year'] == $var4 && $row['publisher'] == $var5 && $row['nori'] == $var9 && $row['conforjournal'] == $var10 && $row['citationagency'] == $var6 && $row['impactfactor'] == $var7)
					{
					}
				  else
					{
					$query = mysqli_query($con, "INSERT INTO papers (id, title, author, month, year, publisher, nori, conforjournal, citationagency, impactfactor)  VALUES ( '$id','$var2','$var3','$var8','$var4','$var5','$var9','$var10','$var6','$var7')");
					write_mysql_log("papers changed", "rpunitpoly", $id);
					}
				}
			}
		}
	  else
		{
		$query = mysqli_query($con, "SELECT * FROM `papers` WHERE id=$id");
		$row = mysqli_fetch_assoc($query);
		$count = mysqli_num_rows($query);
		if ($count > 0) mysqli_query($con, "DELETE FROM papers where id=$id");
		}

	$hobb1 = isset($_POST['mytext2']) ? $_POST['mytext2'] : '';
	$auth = isset($_POST['author2']) ? $_POST['author2'] : '';
	$year = isset($_POST['year2']) ? $_POST['year2'] : '';
	$publisher = isset($_POST['publisher2']) ? $_POST['publisher2'] : '';
	$citation = isset($_POST['citationagency2']) ? $_POST['citationagency2'] : '';
	$impact = isset($_POST['impactfactor2']) ? $_POST['impactfactor2'] : '';
	$N = count($hobb1);
	if ($hobb1 != '')
		{
		mysqli_query($con, "DELETE FROM monographs where id=$id");
		for ($i = 0; $i < $N; $i++)
			{
			$var2 = $hobb1[$i];
			$var3 = $auth[$i];
			$var4 = $year[$i];
			$var5 = $publisher[$i];
			$var6 = $citation[$i];
			$var7 = $impact[$i];
			if (empty($var2))
				{
				}
			  else
				{
				$row = mysqli_fetch_assoc($query);
				$count = mysqli_num_rows($query);
				if ($row['title'] == $var2 && $row['author'] == $var3 && $row['year'] == $var4 && $row['publisher'] == $var5 && $row['citationagency'] == $var6 && $row['impactfactor'] == $var7)
					{
					}
				  else
					{
					$query = mysqli_query($con, "INSERT INTO monographs (id, title, author, year, publisher, citationagency, impactfactor)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var6','$var7')");
					write_mysql_log("monographs changed", "rpunitpoly", $id);
					}
				}
			}
		}
	  else
		{
		$query = mysqli_query($con, "SELECT * FROM `monographs` WHERE id=$id");
		$row = mysqli_fetch_assoc($query);
		$count = mysqli_num_rows($query);
		if ($count > 0) mysqli_query($con, "DELETE FROM monographs where id=$id");
		}

	$hobb3 = isset($_POST['mytext3']) ? $_POST['mytext3'] : '';
	$auth3 = isset($_POST['author3']) ? $_POST['author3'] : '';
	$year3 = isset($_POST['year3']) ? $_POST['year3'] : '';
	$publisher3 = isset($_POST['publisher3']) ? $_POST['publisher3'] : '';
	$citation3 = isset($_POST['citationagency3']) ? $_POST['citationagency3'] : '';
	$impact3 = isset($_POST['impactfactor3']) ? $_POST['impactfactor3'] : '';
	$N = count($hobb3);
	if ($hobb3 != '')
		{
		mysqli_query($con, "DELETE FROM chaptersinbooks where id=$id");
		for ($i = 0; $i < $N; $i++)
			{
			$var2 = $hobb3[$i];
			$var3 = $auth3[$i];
			$var4 = $year3[$i];
			$var5 = $publisher3[$i];
			
			if (empty($var2))
				{
				}
			  else
				{
				$query = mysqli_query($con, "SELECT * FROM `chaptersinbooks` WHERE id=$id");
				$row = mysqli_fetch_assoc($query);
				$count = mysqli_num_rows($query);
				if ($row['title'] == $var2 && $row['author'] == $var3 && $row['year'] == $var4 && $row['publisher'] == $var5)
					{
					}
				  else
					{
					$query = mysqli_query($con, "INSERT INTO chaptersinbooks (id, title, author, year, publisher)  VALUES ( '$id','$var2','$var3','$var4','$var5')");
					write_mysql_log("chaptersinbooks changed", "rpunitpoly", $id);
					}
				}
			}
		}
	  else
		{
		$query = mysqli_query($con, "SELECT * FROM `chaptersinbooks` WHERE id=$id");
		$row = mysqli_fetch_assoc($query);
		$count = mysqli_num_rows($query);
		if ($count > 0) mysqli_query($con, "DELETE FROM chaptersinbooks where id=$id");
		}

	$hobb4 = isset($_POST['mytext4']) ? $_POST['mytext4'] : '';
	$auth4 = isset($_POST['author4']) ? $_POST['author4'] : '';
	$year4 = isset($_POST['year4']) ? $_POST['year4'] : '';
	$publisher4 = isset($_POST['publisher4']) ? $_POST['publisher4'] : '';

	$N = count($hobb4);
	if ($hobb4 != '')
		{
		mysqli_query($con, "DELETE FROM editedbooks where id=$id");
		for ($i = 0; $i < $N; $i++)
			{
			$var2 = $hobb4[$i];
			$var3 = $auth4[$i];
			$var4 = $year4[$i];
			$var5 = $publisher4[$i];

			if (empty($var2))
				{
				}
			  else
				{
				$query = mysqli_query($con, "SELECT * FROM `editedbooks` WHERE id=$id");
				$row = mysqli_fetch_assoc($query);
				$count = mysqli_num_rows($query);
				if ($row['title'] == $var2 && $row['author'] == $var3 && $row['year'] == $var4 && $row['publisher'] == $var5)
					{
					}
				  else
					{
					$query = mysqli_query($con, "INSERT INTO editedbooks (id, title, author, year, publisher)  VALUES ( '$id','$var2','$var3','$var4','$var5')");
					write_mysql_log("editedbooks changed", "rpunitpoly", $id);
					}
				}
			}
		}
	  else
		{
		$query = mysqli_query($con, "SELECT * FROM `editedbooks` WHERE id=$id");
		$row = mysqli_fetch_assoc($query);
		$count = mysqli_num_rows($query);
		if ($count > 0) mysqli_query($con, "DELETE FROM editedbooks where id=$id");
		}

	$hobb1 = isset($_POST['mytext5']) ? $_POST['mytext5'] : '';
	$auth = isset($_POST['author5']) ? $_POST['author5'] : '';
	$year = isset($_POST['year5']) ? $_POST['year5'] : '';
	$publisher = isset($_POST['publisher5']) ? $_POST['publisher5'] : '';

	$N = count($hobb1);
	if ($hobb1 != '')
		{
		mysqli_query($con, "DELETE FROM bookswithisbn where id=$id");
		for ($i = 0; $i < $N; $i++)
			{
			$var2 = $hobb1[$i];
			$var3 = $auth[$i];
			$var4 = $year[$i];
			$var5 = $publisher[$i];

			if (empty($var2))
				{
				}
			  else
				{
				$query = mysqli_query($con, "SELECT * FROM `bookswithisbn` WHERE id=$id");
				$row = mysqli_fetch_assoc($query);
				$count = mysqli_num_rows($query);
				if ($row['title'] == $var2 && $row['author'] == $var3 && $row['year'] == $var4 && $row['publisher'] == $var5)
					{
					}
				  else
					{
					$query = mysqli_query($con, "INSERT INTO bookswithisbn (id, title, author, year, publisher, citationagency, impactfactor)  VALUES ( '$id','$var2','$var3','$var4','$var5')");
					write_mysql_log("bookswithisbn changed", "rpunitpoly", $id);
					}
				}
			}
		}
	  else
		{
		$query = mysqli_query($con, "SELECT * FROM `bookswithisbn` WHERE id=$id");
		$row = mysqli_fetch_assoc($query);
		$count = mysqli_num_rows($query);
		if ($count > 0) mysqli_query($con, "DELETE FROM bookswithisbn where id=$id");
		}

	$title = isset($_POST['mytext6']) ? $_POST['mytext6'] : '';
	$year = isset($_POST['year6']) ? $_POST['year6'] : '';
	$nat = isset($_POST['national6']) ? $_POST['national6'] : '';
	$filedorawarded = isset($_POST['filedorawarded']) ? $_POST['filedorawarded'] : '';
	$N = count($title);
	if ($title != '')
		{
		mysqli_query($con, "DELETE FROM patents where id=$id");
		for ($i = 0; $i < $N; $i++)
			{
			$var2 = $title[$i];
			$var3 = $year[$i];
			$var4 = $nat[$i];
			$var5 = $filedorawarded[$i];
			if (empty($var2))
				{
				}
			  else
				{
				$query = mysqli_query($con, "SELECT * FROM `patents` WHERE id=$id");
				$row = mysqli_fetch_assoc($query);
				$count = mysqli_num_rows($query);
				if ($row['name'] == $var2 && $row['year'] == $var3 && $row['nori'] == $var4 && $row['filedorawarded'] == $var5)
					{
					}
				  else
					{
					$query = mysqli_query($con, "INSERT INTO patents (id, name,  year, nori, filedorawarded)  VALUES ( '$id','$var2','$var3','$var4','$var5')");
					write_mysql_log("patents changed", "rpunitpoly", $id);
					}
				}
			}
		}
	  else
		{
		$query = mysqli_query($con, "SELECT * FROM `patents` WHERE id=$id");
		$row = mysqli_fetch_assoc($query);
		$count = mysqli_num_rows($query);
		if ($count > 0) mysqli_query($con, "DELETE FROM patents where id=$id");
		}

	$title = isset($_POST['mytext7']) ? $_POST['mytext7'] : '';
	$year = isset($_POST['year7']) ? $_POST['year7'] : '';
	$nat = isset($_POST['national7']) ? $_POST['national7'] : '';
	$N = count($title);
	if ($title != '')
		{
		mysqli_query($con, "DELETE FROM agencies where id=$id");
		for ($i = 0; $i < $N; $i++)
			{
			$var2 = $title[$i];
			$var3 = $year[$i];
			$var4 = $nat[$i];
			if (empty($var2))
				{
				}
			  else
				{
				$query = mysqli_query($con, "SELECT * FROM `agencies` WHERE id=$id");
				$row = mysqli_fetch_assoc($query);
				$count = mysqli_num_rows($query);
				if ($row['name'] == $var2 && $row['year'] == $var3 && $row['nori'] == $var4)
					{
					}
				  else
					{
					$query = mysqli_query($con, "INSERT INTO agencies (id, name,  year, nori)  VALUES ( '$id','$var2','$var3','$var4')");
					write_mysql_log("agencies changed", "rpunitpoly", $id);
					}
				}
			}
		}
	  else
		{
		$query = mysqli_query($con, "SELECT * FROM `agencies` WHERE id=$id");
		$row = mysqli_fetch_assoc($query);
		$count = mysqli_num_rows($query);
		if ($count > 0) mysqli_query($con, "DELETE FROM agencies where id=$id");
		}

	$title = isset($_POST['mytext8']) ? $_POST['mytext8'] : '';
	$year = isset($_POST['year8']) ? $_POST['year8'] : '';
	$award = isset($_POST['award8']) ? $_POST['award8'] : '';
	$nat = isset($_POST['national8']) ? $_POST['national8'] : '';
	$N = count($title);
	if ($title != '')
		{
		mysqli_query($con, "DELETE FROM awards where id=$id");
		for ($i = 0; $i < $N; $i++)
			{
			$var2 = $title[$i];
			$var3 = $year[$i];
			$var4 = $award[$i];
			$var5 = $nat[$i];
			if (empty($var2))
				{
				}
			  else
				{
				$query = mysqli_query($con, "SELECT * FROM `awards` WHERE id=$id");
				$row = mysqli_fetch_assoc($query);
				$count = mysqli_num_rows($query);
				if ($row['name'] == $var2 && $row['year'] == $var3 && $row['awardingagency'] == $var4 && $row['nori'] == $var5)
					{
					}
				  else
					{
					$query = mysqli_query($con, "INSERT INTO awards (id, name, year, awardingagency, nori)  VALUES ( '$id','$var2','$var3','$var4','$var5')");
					write_mysql_log("awards changed", "rpunitpoly", $id);
					}
				}
			}
		}
	  else
		{
		$query = mysqli_query($con, "SELECT * FROM `awards` WHERE id=$id");
		$row = mysqli_fetch_assoc($query);
		$count = mysqli_num_rows($query);
		if ($count > 0) mysqli_query($con, "DELETE FROM awards where id=$id");
		}

	$title = isset($_POST['mytext9']) ? $_POST['mytext9'] : '';
	$year = isset($_POST['year9']) ? $_POST['year9'] : '';
	$nat = isset($_POST['national9']) ? $_POST['national9'] : '';
	$N = count($title);
	if ($title != '')
		{
		mysqli_query($con, "DELETE FROM committeesboard where id=$id");
		for ($i = 0; $i < $N; $i++)
			{
			$var2 = $title[$i];
			$var3 = $year[$i];
			$var4 = $nat[$i];
			if (empty($var2))
				{
				}
			  else
				{
				$query = mysqli_query($con, "SELECT * FROM `committeesboard` WHERE id=$id");
				$row = mysqli_fetch_assoc($query);
				$count = mysqli_num_rows($query);
				if ($row['name'] == $var2 && $row['yearofserving'] == $var3 && $row['nori'] == $var4)
					{
					}
				  else
					{
					$query = mysqli_query($con, "INSERT INTO committeesboard (id, name,  yearofserving, nori)  VALUES ( '$id','$var2','$var3','$var4')");
					write_mysql_log("committeesboard changed", "rpunitpoly", $id);
					}
				}
			}
		}
	  else
		{
		$query = mysqli_query($con, "SELECT * FROM `committeesboard` WHERE id=$id");
		$row = mysqli_fetch_assoc($query);
		$count = mysqli_num_rows($query);
		if ($count > 0) mysqli_query($con, "DELETE FROM committeesboard where id=$id");
		}

	$nat = isset($_POST['national10']) ? $_POST['national10'] : '';
	$attend = isset($_POST['attend10']) ? $_POST['attend10'] : '';
	$name = isset($_POST['name10']) ? $_POST['name10'] : '';
	$place = isset($_POST['place10']) ? $_POST['place10'] : '';
	$dates = isset($_POST['dates10']) ? $_POST['dates10'] : '';
	$year = isset($_POST['year10']) ? $_POST['year10'] : '';
	$sponsor = isset($_POST['sponsor10']) ? $_POST['sponsor10'] : '';
	$N = count($nat);
	if ($nat != '')
		{
		mysqli_query($con, "DELETE FROM conference where id=$id");
		for ($i = 0; $i < $N; $i++)
			{
			$var2 = $nat[$i];
			$var3 = $attend[$i];
			$var4 = $name[$i];
			$var5 = $place[$i];
			$var8 = $dates[$i];
			$var6 = $year[$i];
			$var7 = $sponsor[$i];
			if (empty($var2))
				{
				}
			  else
				{
				$query = mysqli_query($con, "SELECT * FROM `conference` WHERE id=$id");
				$row = mysqli_fetch_assoc($query);
				$count = mysqli_num_rows($query);
				if ($row['nori'] == $var2 && $row['aoro'] == $var3 && $row['name'] == $var4 && $row['place'] == $var5 && $row['dates'] == $var8 && $row['year'] == $var6 && $row['sponsoringagent'] == $var7)
					{
					}
				  else
					{
					$query = mysqli_query($con, "INSERT INTO conference (id, nori, aoro, name, place, dates, year , sponsoringagent)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var8','$var6','$var7')");
					write_mysql_log("conference changed", "rpunitpoly", $id);
					}
				}
			}
			}
		  else
			{
			$query = mysqli_query($con, "SELECT * FROM `conference` WHERE id=$id");
			$row = mysqli_fetch_assoc($query);
			$count = mysqli_num_rows($query);
			if ($count > 0) mysqli_query($con, "DELETE FROM conference where id=$id");
			}

		$year = isset($_POST['year11']) ? $_POST['year11'] : '';
		$nat = isset($_POST['amount11']) ? $_POST['amount11'] : '';
		$N = count($year);
		if ($year != '')
			{
			mysqli_query($con, "DELETE FROM consulties where id=$id");
			for ($i = 0; $i < $N; $i++)
				{
				$var2 = $year[$i];
				$var3 = $nat[$i];
				if (empty($var2))
					{
					}
				  else
					{
					$query = mysqli_query($con, "SELECT * FROM `consulties` WHERE id=$id");
					$row = mysqli_fetch_assoc($query);
					$count = mysqli_num_rows($query);
					if ($row['year'] == $var2 && $row['amount'] == $var3)
						{
						}
					  else
						{
						$query = mysqli_query($con, "INSERT INTO consulties (id, year, amount)  VALUES ( '$id','$var2','$var3')");
						write_mysql_log("consulties changed", "rpunitpoly", $id);
						}
					}
				}
			}
		  else
			{
			$query = mysqli_query($con, "SELECT * FROM `consulties` WHERE id=$id");
			$row = mysqli_fetch_assoc($query);
			$count = mysqli_num_rows($query);
			if ($count > 0) mysqli_query($con, "DELETE FROM consulties where id=$id");
			}

		$coluniinstt = isset($_POST['coluniinstt12']) ? $_POST['coluniinstt12'] : '';
		$cocurri = isset($_POST['cocurri12']) ? $_POST['cocurri12'] : '';
		$campuslife = isset($_POST['campuslife12']) ? $_POST['campuslife12'] : '';
		$studwelfare = isset($_POST['studwelfare12']) ? $_POST['studwelfare12'] : '';
		$bodcommedu = isset($_POST['bodcommedu12']) ? $_POST['bodcommedu12'] : '';
		$proforgteacher = isset($_POST['proforgteacher12']) ? $_POST['proforgteacher12'] : '';
		$i = 0;
		if ($coluniinstt[$i] != '' || $cocurri[$i] != '' || $campuslife[$i] != '' || $studwelfare[$i] != '' || $bodcommedu[$i] != '' || $proforgteacher[$i] != '')
			{
			mysqli_query($con, "DELETE FROM corporate where id=$id");
			$j = 0;
			$var2 = $coluniinstt[$j];
			$var3 = $cocurri[$j];
			$var4 = $campuslife[$j];
			$var5 = $studwelfare[$j];
			$var6 = $bodcommedu[$j];
			$var7 = $proforgteacher[$j];
			$query = mysqli_query($con, "SELECT * FROM `corporate` WHERE id=$id");
			$row = mysqli_fetch_assoc($query);
			$count = mysqli_num_rows($query);
			if ($row['coluniinstt'] == $var2 && $row['cocurri'] == $var3 && $row['campuslife'] == $var4 && $row['studwelfare'] == $var5 && $row['bodcommedu'] == $var6 && $row['proforgteacher'] == $var7)
				{
				}
			  else
				{
				if ($var2 != '' || $var3 != '' || $var4 != '' || $var5 != '' || $var6 != '' || $var7 != '')
					{
					$query = mysqli_query($con, "INSERT INTO corporate (id, coluniinstt, cocurri, campuslife, studwelfare, bodcommedu, proforgteacher)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var6','$var7')");
					write_mysql_log("corporate changed", "rpunitpoly", $id);
					}
				}
			}
		  else
			{
			$query = mysqli_query($con, "SELECT * FROM `corporate` WHERE id=$id");
			$row = mysqli_fetch_assoc($query);
			$count = mysqli_num_rows($query);
			if ($count > 0) mysqli_query($con, "DELETE FROM corporate where id=$id");
			}

		$title = isset($_POST['mytext13']) ? $_POST['mytext13'] : '';
		$year = isset($_POST['year13']) ? $_POST['year13'] : '';
		$place = isset($_POST['place13']) ? $_POST['place13'] : '';
		$benefit = isset($_POST['benefit13']) ? $_POST['benefit13'] : '';
		$N = count($title);
		if ($title != '')
			{
			mysqli_query($con, "DELETE FROM externalwork where id=$id");
			for ($i = 0; $i < $N; $i++)
				{
				$var2 = $title[$i];
				$var3 = $year[$i];
				$var5 = $place[$i];
				$var4 = $benefit[$i];
				if (empty($var2))
					{
					}
				  else
					{
					$query = mysqli_query($con, "SELECT * FROM `externalwork` WHERE id=$id");
					$row = mysqli_fetch_assoc($query);
					$count = mysqli_num_rows($query);
					if ($row['name'] == $var2 && $row['year'] == $var3&& $row['place'] == $var5 && $row['groupbenefitted'] == $var4)
						{
						}
					  else
						{
						$query = mysqli_query($con, "INSERT INTO externalwork (id, name,year,place,groupbenefitted)  VALUES ( '$id','$var2','$var3','$var5','$var4')");
						write_mysql_log("externalwork changed", "rpunitpoly", $id);
						}
					}
				}
			}
		  else
			{
			$query = mysqli_query($con, "SELECT * FROM `externalwork` WHERE id=$id");
			$row = mysqli_fetch_assoc($query);
			$count = mysqli_num_rows($query);
			if ($count > 0) mysqli_query($con, "DELETE FROM externalwork where id=$id");
			}

		$revdesign14 = isset($_POST['revdesign14']) ? $_POST['revdesign14'] : '';
		$teachingmethods14 = isset($_POST['teachingmethods14']) ? $_POST['teachingmethods14'] : '';
		$labexp14 = isset($_POST['labexp14']) ? $_POST['labexp14'] : '';
		$evalmethods14 = isset($_POST['evalmethods14']) ? $_POST['evalmethods14'] : '';
		$resourcemat14 = isset($_POST['resourcemat14']) ? $_POST['resourcemat14'] : '';
		$remtorstudcounselling14 = isset($_POST['remtorstudcounselling14']) ? $_POST['remtorstudcounselling14'] : '';
		$other14 = isset($_POST['other14']) ? $_POST['other14'] : '';
		$N = count($revdesign14);
		if ($revdesign14 != '')
			{
			mysqli_query($con, "DELETE FROM innovations where id=$id");
			for ($i = 0; $i < $N; $i++)
				{
				$var2 = $revdesign14[$i];
				$var3 = $teachingmethods14[$i];
				$var4 = $labexp14[$i];
				$var5 = $evalmethods14[$i];
				$var6 = $resourcemat14[$i];
				$var7 = $remtorstudcounselling14[$i];
				$var8 = $other14[$i];
				if (empty($var2))
					{
					}
				  else
					{
					$query = mysqli_query($con, "SELECT * FROM `innovations` WHERE id=$id");
					$row = mysqli_fetch_assoc($query);
					$count = mysqli_num_rows($query);
					if ($row['revdesign'] == $var2 && $row['teachingmethods'] == $var3 && $row['labexp'] == $var4 && $row['evalmethods'] == $var5 && $row['resourcemat'] == $var6 && $row['remtorstudcounselling'] == $var7 && $row['other'] == $var8)
						{
						}
					  else
						{
						$query = mysqli_query($con, "INSERT INTO innovations (id, revdesign ,teachingmethods,labexp,evalmethods,resourcemat,remtorstudcounselling,other)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var6','$var7','$var8')");
						write_mysql_log("innovations changed", "rpunitpoly", $id);
						}
					}
				}
			}
		  else
			{
			$query = mysqli_query($con, "SELECT * FROM `innovations` WHERE id=$id");
			$row = mysqli_fetch_assoc($query);
			$count = mysqli_num_rows($query);
			if ($count > 0) mysqli_query($con, "DELETE FROM innovations where id=$id");
			}

		$attend = isset($_POST['attend15']) ? $_POST['attend15'] : '';
		$name = isset($_POST['mytext15']) ? $_POST['mytext15'] : '';
		$year = isset($_POST['year15']) ? $_POST['year15'] : '';
		$duration = isset($_POST['duration15']) ? $_POST['duration15'] : '';
		$place = isset($_POST['place15']) ? $_POST['place15'] : '';
		$N = count($attend);
		if ($attend != '')
			{
			mysqli_query($con, "DELETE FROM recharging where id=$id");
			for ($i = 0; $i < $N; $i++)
				{
				$var2 = $attend[$i];
				$var3 = $name[$i];
				$var4 = $year[$i];
				$var5 = $duration[$i];
				$var6 = $place[$i];
				if (empty($var2))
					{
					}
				  else
					{
					$query = mysqli_query($con, "SELECT * FROM `recharging` WHERE id=$id");
					$row = mysqli_fetch_assoc($query);
					$count = mysqli_num_rows($query);
					if ($row['aoro'] == $var2 && $row['name'] == $var3 && $row['year'] == $var4 && $row['duration'] == $var5 && $row['placeoragency'] == $var6)
						{
						}
					  else
						{
						$query = mysqli_query($con, "INSERT INTO recharging (id, aoro, name,year,duration ,placeoragency)  VALUES ( '$id','$var2','$var3','$var4','$var5','$var6')");
						write_mysql_log("recharging changed", "rpunitpoly", $id);
						}
					}
				}
			}
		  else
			{
			$query = mysqli_query($con, "SELECT * FROM `recharging` WHERE id=$id");
			$row = mysqli_fetch_assoc($query);
			$count = mysqli_num_rows($query);
			if ($count > 0) mysqli_query($con, "DELETE FROM recharging where id=$id");
			}

		$mtechlevel = isset($_POST['mtechlevel']) ? $_POST['mtechlevel'] : '';
		
		$phdlevel = isset($_POST['phdlevel']) ? $_POST['phdlevel'] : '';
		
		$N = count($mtechlevel);
		
		if ($mtechlevel != '')
			{
				
			mysqli_query($con, "DELETE FROM researchguidance where id=$id");
			for ($i = 0; $i < $N; $i++)
				{
					
				$var2 = $mtechlevel[$i];
				
				$var3 = $phdlevel[$i];
				
									
					$query = mysqli_query($con, "SELECT * FROM `researchguidance` WHERE id=$id");
					$row = mysqli_fetch_assoc($query);
				
					if ($row['mtechlevel'] == $var2 && $row['phdlevel'] == $var3)
						{
							
						}
					  else
						{
							
						$query = mysqli_query($con, "INSERT INTO researchguidance (id,mtechlevel, phdlevel  )  VALUES ( '$id','$var2','$var3')");
						write_mysql_log("researchguidance changed", "rpunitpoly", $id);
						}
					
				}
			}
		  else
			{
			$query = mysqli_query($con, "SELECT * FROM `researchguidance` WHERE id=$id");
			$row = mysqli_fetch_assoc($query);
			$count = mysqli_num_rows($query);
			if ($count > 0) mysqli_query($con, "DELETE FROM researchguidance where id=$id");
			}
			 header("Location: filled.php");
		}
}
	catch(PDOException $e){
	echo "error" .$e->getMessage();
	}
	
?>
