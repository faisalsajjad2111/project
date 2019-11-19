<?php
$con = mysqli_connect('localhost', 'root', '', 'app');
$sql = "DELETE FROM user WHERE id= '$_GET[id]'";

if (mysqli_query($con, $sql)) {
	header("refresh:1; url=index.php");
} else {
	echo "Not Deleted";
}

?>