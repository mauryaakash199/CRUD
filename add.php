<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="datasave.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="Stu_Name" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="Stu_Address" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <?php
                    include'connection.php';
                    
                    $sql = "SELECT * FROM student_class";
                    
                    $result = mysqli_query($conn, $sql) or die("Query is Unsuccessful.");
                    
                    while($row = mysqli_fetch_assoc($result)){

                ?>
                 
                <option value="<?php echo $row['Class_ID']; ?>"><?php echo $row['Class_Name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="Stu_Mobile" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
