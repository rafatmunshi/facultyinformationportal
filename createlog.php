 <?php
require 'db.php';
function write_mysql_log($message, $db, $faculty_id)
{
global $con;

  // Construct query
  $sql = "INSERT INTO my_log (message, faculty_id) VALUES('$message', '$faculty_id')";
 
 $query=mysqli_query($con, $sql);
  // Execute query and save data

 
  if($query) {
   echo '';  
  }
  else {
    echo '';
  }

}

?>