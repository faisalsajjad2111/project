<!DOCTYPE html>
<html>
<title>
<head>
Fetch data fromdatabse</head>
</title>
<body>
<table align="center" border="1px" style="width:600px; line-height:40px;">
<tr>
<th colspan="4"><h2>Student Record </h2></th>
</tr>
<tr>
<th>id</th>
<th>name</th>
<th>age</th>

</tr>
<?php
$con = mysqli_connect('localhost', 'root', '', 'app');

$query = "select * from user";
$result = mysqli_query($con, $query);
while ($rows = mysqli_fetch_assoc($result)) {
	?>
    <tr>

    <td><?php echo $rows['id']; ?></td>
    <td><?php echo $rows['name']; ?></td>
    <td><?php echo $rows['age']; ?></td>

    echo "<td><a href="delete.php? id=<?php echo $rows['id']; ?>"> Delete </a></td>";
</tr>
<?php

}
?>
</table>
</body>
</html>