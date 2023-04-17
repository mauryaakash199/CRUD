<?php

echo $Stu_Name = $_POST['Stu_Name'];
echo $Stu_Address = $_POST['Stu_Address'];
echo $Stu_Class = $_POST['class'];
echo $Stu_Mobile = $_POST['Stu_Mobile'];

include'connection.php';
                    
$sql = "INSERT INTO student(Stu_Name,Stu_Address,Stu_Class,Stu_Mobile) VALUE('{$Stu_Name}','{$Stu_Address}','{$Stu_Class}','{$Stu_Mobile}')"; 

$result = mysqli_query($conn, $sql) or die("Query is Unsuccessful.");

header("Location: http://localhost/php/crud/index.php");

mysqli_close($conn);



?>