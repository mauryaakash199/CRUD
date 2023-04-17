<?php

echo $Stu_ID = $_GET['id'];

include'connection.php';

$sql = "DELETE FROM student WHERE Stu_ID = {$Stu_ID}";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful...?");

header("Location: http://localhost/php/crud/index.php");

mysqli_close($conn);

?>
