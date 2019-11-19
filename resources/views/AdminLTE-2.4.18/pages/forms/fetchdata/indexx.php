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
<th>Title</th>
<th>Category</th>
<th>Brand</th>
<th>Avalibility</th>
<th>KeyFeatures</th>
<th>Descriptions</th>
<th>Used</th>
<th>Precautions</th>
<th>Storage</th>
<th>Whennottouse</th>
<th>Howtosetit</th>
<th>Delete</th>
</tr>
<?php
$con = mysqli_connect('localhost', 'root', '', 'app');

$query = "select * from product";
$result = mysqli_query($con, $query);
while ($rows = mysqli_fetch_assoc($result)) {
	?>
    <tr>

    <td><?php echo $rows['id']; ?></td>
    <td><?php echo $rows['Title']; ?></td>
    <td><?php echo $rows['Category']; ?></td>
    <td><?php echo $rows['Brand']; ?></td>
    <td><?php echo $rows['Avalibility']; ?></td>
    <td><?php echo $rows['KeyFeatures']; ?></td>
    <td><?php echo $rows['Descriptions']; ?></td>
    <td><?php echo $rows['Used']; ?></td>
    <td><?php echo $rows['Precautions']; ?></td>
    <td><?php echo $rows['Storage']; ?></td>
    <td><?php echo $rows['Whennottouse']; ?></td>
    <td><?php echo $rows['Howtosetit']; ?></td>
    echo "<td><a href="delete.php? id=<?php echo $rows['id']; ?>"> Delete </a></td>";
</tr>
<?php

}
?>
</table>
</body>
</html>