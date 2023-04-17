<?php
include 'header.php';
?>
<div id="main-content">
    <!-- <h2> All Records Show </h2> -->
    <marquee class="blink"> <h2>👨🏻‍💻 All Records Show 👨🏻‍💻</h2></marquee>


<?php
include'connection.php';

$sql = "SELECT * FROM student JOIN student_class WHERE student.Stu_Class = student_class.Class_ID";

$result = mysqli_query($conn, $sql) or die("Query is Unsuccessful.");

if(mysqli_num_rows($result) > 0)
{
  
?>
    <table cellpadding="7px"> 
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
                while($row=mysqli_fetch_assoc($result))
                {
            ?>
            <tr>
                <td><?php echo $row['Stu_ID']; ?></td>
                <td><?php echo $row['Stu_Name']; ?></td>
                <td><?php echo $row['Stu_Address']; ?></td>
                <td><?php echo $row['Class_Name']; ?></td>
                <td><?php echo $row['Stu_Mobile']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['Stu_ID']; ?>'>Edit</a>
                    <a href='datadelete.php?id=<?php echo $row['Stu_ID']; ?>'>Delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <?php } else
    {
        echo"<h1>No Record Found...? </h1>";
    }
    mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>
