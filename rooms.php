<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <a href="book.php">book a room</a>; 

<?php
mysql_connect("localhost","cms","adediperhema");
mysql_select_db("Ocean_Green");
$res=mysql_query("select * from Rooms2");

echo "<table>";
while($row=mysql_fetch_array($res)){
echo "<tr>";

echo "<td >"; ?> <img src="<?php echo $row["RoomImage"];?>" height="200px" width="200px"><?php echo "</td>";
echo "<td>";echo"</td>";
echo "<td>";echo"</td>";
echo "<td>";echo"</td>";
echo "<td>";echo"</td>";
echo "<td>";echo"</td>";
echo "<td>";echo"</td>";
echo "<td>";echo $row["RoomType"];echo "</td>";
echo "<td>";echo"</td>";
echo "<td>";echo"</td>";
echo "<td>";echo"</td>";
echo "<td>";echo"</td>";
echo "<td>";echo"</td>";
echo "<td>";echo"</td>";
echo "<td>";echo $row["RoomNumber"];echo "</td>";
echo "<td>";echo"</td>";
echo "<td>";echo"</td>";
echo "<td>";echo"</td>";
echo "<td>";echo"</td>";
echo "<td>";echo"</td>";
echo "<td>";echo"</td>";
echo "<td>";echo $row["RoomPrice"];echo "</td>";


echo "</tr>";
}

echo"</table>";
?>

</body>
</html>