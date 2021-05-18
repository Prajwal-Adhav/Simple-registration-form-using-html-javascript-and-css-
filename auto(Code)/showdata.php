<!-- ****** This File is just for reference -->


<!-- ********** -->
<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM info3 ORDER BY id DESC"); // Code line to display the record which appeared recently in the database.
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <link rel='stylesheet' type='text/css' href='style.css' /></head>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Name</td>
    <td>Email</td>
    <td>Phone Number</td>
    <td>Address</td>
	<td>House Number</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["pnum"]; ?></td>
    <td><?php echo $row["addr"]; ?></td>
	<td><?php echo $row["hnum"]; ?></td>

</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>

<!-- Link to home page -->
<br>
<a href="index.html">Home</a>


