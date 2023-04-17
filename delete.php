<?php include 'header.php'; 

if(isset($_POST['deletebtn'])){

    include'connection.php';
    $Stu_ID = $_POST['Stu_ID'];
    
    $sql = "DELETE FROM student WHERE Stu_ID = {$Stu_ID}";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful...?");

    header("Location: http://localhost/php/crud/index.php");

    mysqli_close($conn);

}
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="Stu_ID" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
