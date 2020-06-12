<table>
 <?php
 require 'db.php';
$query=mysqli_query($con,"SELECT * FROM my_log");
while($row=mysqli_fetch_assoc($query))
{
    echo "<tr>";

    echo "<td>$row[message]</td>";
    echo "<td>$row[faculty_id]</td>";
	echo "<td>$row[log_date]</td>";
    echo "</tr>\n";
}
?>
</table>