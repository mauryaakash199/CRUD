<?php
 $Stu_ID = $_POST['Stu_ID'];
 $Stu_Name = $_POST['Stu_Name'];
 $Stu_Address = $_POST['Stu_Address'];
 $Stu_Class = $_POST['Stu_Class'];
 $Stu_Mobile = $_POST['Stu_Mobile'];

 include'connection.php';
                   
// $sql = "INSERT INTO student(Stu_Name,Stu_Address,Stu_Class,Stu_Mobile) 
//         VALUE('$Stu_Name','$Stu_Address','$Stu_Class','$Stu_Mobile')";

$sql = "UPDATE student SET Stu_Name = '{$Stu_Name}', Stu_Address = '{$Stu_Address}', Stu_Class = '{$Stu_Class}', Stu_Mobile = '{$Stu_Mobile}' WHERE Stu_ID = {$Stu_ID}";
$result = mysqli_query($conn, $sql) or die("Query is Unsuccessful.");

header("Location: http://localhost/php/crud/index.php");

mysqli_close($conn);

?>