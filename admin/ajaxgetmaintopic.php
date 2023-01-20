<?php
include("_includes/config.php");
if(isset($_POST['action']) && $_POST['action'] == "getmaintopic"){
    if(isset($_POST['course_id'])){
        $course_id=$_POST['course_id'];
        $sql=mysqli_query($conn,"select * from maintopic where course_id=$course_id");
        if (mysqli_num_rows($sql)>0){
            echo"<option >Select maintopic</option>";
                while($row=mysqli_fetch_array($sql)){
                    ?>
                    <option value="<?=$row['maintopic_id'];?>"><?=$row['maintopic_name'];?></option>
                    <?php
                }
        }
    }
}
if(isset($_POST['action']) && $_POST['action'] == "getsubtopic"){
    if(isset($_POST['course_id']) && ($_POST['maintopic_id'])){
        $course_id=$_POST['course_id'];
        $maintopic_id=$_POST['maintopic_id'];
        $sql=mysqli_query($conn,"select * from subtopic where course_id=$course_id and maintopic_id=$maintopic_id");
        if(mysqli_num_rows($sql)>0){
            echo"<option>Select Subtopic</option>";
            while($row=mysqli_fetch_array($sql)){
                ?>
                <option value="<?=$row['subtopic_id'];?>"><?=$row['subtopic_name'];?></option>
                <?php
            }
        }
    }
}
 
?>