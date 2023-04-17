<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
         include'connection.php';

         $Stu_ID = $_GET['id'];

         $sql = "SELECT * FROM student WHERE Stu_ID={$Stu_ID}";

         $result = mysqli_query($conn, $sql) or die("Query is Unsuccessful.");
         
         if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_assoc($result)){

    ?>
    <form class="post-form" action="dataupdate.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="Stu_ID" value="<?php echo $row['Stu_ID']; ?>"/>
          <input type="text" name="Stu_Name" value="<?php echo $row['Stu_Name']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="Stu_Address" value="<?php echo $row['Stu_Address']; ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>

          <?php
             $sql1 = "SELECT * FROM student_class";
             $result1 = mysqli_query($conn, $sql1) or die("Query is Unsuccessful.");
             
             if(mysqli_num_rows($result1) > 0)
             {
                echo'<select name="Stu_Class">';             
                while($row1 = mysqli_fetch_assoc($result1))
                {
                    if($row['Stu_Class'] == $row1['Class_ID'])
                    {
                        $select = "selected";
                    }else{
                        $select = "";
                    }
                
            echo "<option {$select} value='{$row1['Class_ID']}'>{$row1['Class_Name']}</option>";
             } 
          echo "</select>";
            }

          ?>  
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="Stu_Mobile" value="<?php echo $row['Stu_Mobile']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
     }
    }
    ?>
</div>
</div>
</body>
</html>
