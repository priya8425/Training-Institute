<?php
include("_includes/config.php");
//  session_start();
//  if(!isset($_SESSION['id'])){
//      header("location:index.php");
//  }?>
<?php
if(isset($_POST['dnk'])){
  $query=mysqli_query($conn,"select * from property where id='".$_POST['dnk']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Building Name  <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="propertyid" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="building_name" name="building_name" type="text" value="'.$row['building_name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

    <div class="row">
              <div class="col-md-12">
        <div class="form-group">
          <label for="clock_in">
          flat <span class="text-danger">*</span>
          </label>
          <div class="input-group">
            <input class="form-control" placeholder="flat" name="flat" type="text" value="'.$row['flat'].'"  data-dtp="dtp_qHHzf">
            
          </div>
        </div>
      </div>
              
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Location <span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" placeholder="Location" name="location" type="text" value="'.$row['location'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
  </div>


  <div class="row">
  <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Build-up Area   <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control" placeholder="built-up area" name="builtup_area" type="text" value="'.$row['builtup_area'].'"  data-dtp="dtp_qHHzf">

</div>
</div>
</div>
  
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  carpet Area <span class="text-danger">*</span>
  </label>
  <div class="input-group">
    <input class="form-control" placeholder="carpet_area" name="carpet_area" type="text" value="'.$row['carpet_area'].'" data-dtp="dtp_dl6pL">
    
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="clock_in">
property  <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control" placeholder="property" name="property" type="text" value="'.$row['property'].'"  data-dtp="dtp_qHHzf">

</div>
</div>
</div>

</div>
</div>

  </div>
</div>
';
}


?>


<?php
if(isset($_POST['dnkk'])){
  $query=mysqli_query($conn,"select * from property where id='".$_POST['dnkk']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Building Name  <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="propertyid" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="building_name" name="building_name" type="text" value="'.$row['building_name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

    <div class="row">
              <div class="col-md-12">
        <div class="form-group">
          <label for="clock_in">
          flat   <span class="text-danger">*</span>
          </label>
          <div class="input-group">
            <input class="form-control" placeholder="flat" name="flat" type="text" value="'.$row['flat'].'"  data-dtp="dtp_qHHzf">
            
          </div>
        </div>
      </div>
              
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Location <span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" placeholder="Location" name="location" type="text" value="'.$row['location'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
  </div>


  <div class="row">
  <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Build-up Area   <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control" placeholder="built-up area" name="builtup_area" type="text" value="'.$row['builtup_area'].'"  data-dtp="dtp_qHHzf">

</div>
</div>
</div>
  
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  carpet Area <span class="text-danger">*</span>
  </label>
  <div class="input-group">
    <input class="form-control" placeholder="carpet_area" name="carpet_area" type="text" value="'.$row['carpet_area'].'" data-dtp="dtp_dl6pL">
    
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="clock_in">
property  <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control" placeholder="property" name="property" type="text" value="'.$row['property'].'"  data-dtp="dtp_qHHzf">

</div>
</div>
</div>

</div>
</div>

  </div>
</div>
';
}


?>


<?php
if(isset($_POST['dnk1'])){
  $query=mysqli_query($conn,"select * from property where id='".$_POST['dnk1']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Building Name  <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="propertyid" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="building_name" name="building_name" type="text" value="'.$row['building_name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

    <div class="row">
              <div class="col-md-12">
        <div class="form-group">
          <label for="clock_in">
          flat   <span class="text-danger">*</span>
          </label>
          <div class="input-group">
            <input class="form-control" placeholder="flat" name="flat" type="text" value="'.$row['flat'].'"  data-dtp="dtp_qHHzf">
            
          </div>
        </div>
      </div>
              
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Location <span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" placeholder="Location" name="location" type="text" value="'.$row['location'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
  </div>


  <div class="row">
  <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Build-up Area   <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control" placeholder="built-up area" name="builtup_area" type="text" value="'.$row['builtup_area'].'"  data-dtp="dtp_qHHzf">

</div>
</div>
</div>
  
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  carpet Area <span class="text-danger">*</span>
  </label>
  <div class="input-group">
    <input class="form-control" placeholder="carpet_area" name="carpet_area" type="text" value="'.$row['carpet_area'].'" data-dtp="dtp_dl6pL">
    
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="clock_in">
property  <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control" placeholder="property" name="property" type="text" value="'.$row['property'].'"  data-dtp="dtp_qHHzf">

</div>
</div>
</div>

</div>
</div>

  </div>
</div>
';
}


?>




<?php
if(isset($_POST['dnk2'])){
  $query=mysqli_query($conn,"select * from about where id='".$_POST['dnk2']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Name  <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="id" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="name" name="name" type="text" value="'.$row['name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Description <span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" placeholder="description" name="description" type="text" value="'.$row['description'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

 <div class="row">
 <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Image   <span class="text-danger">*</span>
</label>
<div class="input-group">
<input type="file" class="form-control" value="'.$row['image'].'" name="image" >

</div>
</div>
</div>
 
</div>
';
}


?>



<?php
if(isset($_POST['dnk4'])){
  $query=mysqli_query($conn,"select * from bg_image where id='".$_POST['dnk4']."'");
  $row=mysqli_fetch_array($query);
  echo ' 

 <div class="row">
 <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Image:<span class="text-danger">*</span>
</label>
<div class="input-group">
<input type="hidden" name="id" value="'.$row['id'].'">
<input type="file" class="form-control" value="'.$row['image'].'" name="image" >

</div>
</div>
</div>
 
</div>
';
}


?>
<?php
if(isset($_POST['dnkk4'])){
  $query=mysqli_query($conn,"select * from bg_image where id='".$_POST['dnkk4']."'");
  $row=mysqli_fetch_array($query);
  echo ' 

  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
     No: <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="id" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="name" name="no" type="text" value="'.$row['no'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
     Heading: <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      
        <input class="form-control" placeholder="name" name="heading" type="text" value="'.$row['heading'].'" data-       dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>
';
}


?>


<?php
if(isset($_POST['dnk5'])){
  $query=mysqli_query($conn,"select * from home_page where id='".$_POST['dnk5']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
     Service Name: <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="id" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="name" name="service_name" type="text" value="'.$row['service_name'].'" data-       dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Service Content<span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" placeholder="description" name="service_content" type="text" value="'.$row['service_content'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

 <div class="row">
 <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Image   <span class="text-danger">*</span>
</label>
<div class="input-group">
<input type="file" class="form-control" value="'.$row['image'].'" name="image" >

</div>
</div>
</div>
 
</div>

';
}
?>

<?php
if(isset($_POST['dnk6'])){
  $query=mysqli_query($conn,"select * from course_schedule where id='".$_POST['dnk6']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
     Course Name  <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="id" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="course name" name="course_name" type="text" value="'.$row['course_name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Faculty Name <span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" placeholder="faculty_name" name="faculty_name" type="text" value="'.$row['faculty_name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

 
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Date <span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" placeholder="Enter date" name="date" type="date" value="'.$row['date'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Time<span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" placeholder="enter time" name="time" type="time" value="'.$row['time'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>
';
}
?>


<?php
if(isset($_POST['dnk7'])){
  $query=mysqli_query($conn,"select * from placement where id='".$_POST['dnk7']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
     date <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="id" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="" name="date" type="date" value="'.$row['date'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Company Name<span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" placeholder="company_name" name="company_name" type="text" value="'.$row['company_name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>
 
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Technology <span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" placeholder="Technology" name="tech" type="text" value="'.$row['tech'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Location <span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" placeholder="Enter location" name="location" type="text" value="'.$row['location'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      placed <span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" placeholder="" name="placed" type="text" value="'.$row['placed'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>
';
}
?>


<?php
if(isset($_POST['dnk9'])){
  $query=mysqli_query($conn,"select * from course where course_id='".$_POST['dnk9']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Course Name  <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="course_id" value="'.$row['course_id'].'">
         
        <input class="form-control" placeholder="Enter course name" name="course_name" type="text" value="'.$row['course_name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  Course Description <span class="text-danger">*</span>
  </label>
  <div class="input-group">
   
    <textarea class="form-control" placeholder="Enter Description" name="course_description">'.$row['course_description'].'</textarea>
    
  </div>
</div>
</div>
</div>
 <div class="row">
 <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Image   <span class="text-danger">*</span>
</label>
<div class="input-group">
<input type="file" class="form-control" value="'.$row['image'].'" name="image" >

</div>
</div>
</div>
 
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  price<span class="text-danger">*</span>
  </label>
  <div class="input-group">
   
  <input class="form-control" placeholder="Enter price" name="price" type="text" value="'.$row['price'].'" data-dtp="dtp_dl6pL">    
  </div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  instructor <span class="text-danger">*</span>
  </label>
  <div class="input-group">
   
  <input class="form-control" placeholder="Enter instructor name" name="instructor" type="text" value="'.$row['instructor'].'" data-dtp="dtp_dl6pL">    
  </div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  about_course<span class="text-danger">*</span>
  </label>
  <div class="input-group">
   
  <input class="form-control" placeholder="Enter about_course" name="about_course" type="text" value="'.$row['about_course'].'" data-dtp="dtp_dl6pL">    
  </div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  paragraph <span class="text-danger">*</span>
  </label>
  <div class="input-group">
  <textarea class="form-control" placeholder="" name="paragraph">'.$row['paragraph'].'</textarea>    
  </div>
</div>
</div>
</div>
';
}


?>
<?php
if(isset($_POST['dnkk9'])){
  $query=mysqli_query($conn,"select * from maintopic where course_id='".$_POST['dnkk9']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  Maintopic Name<span class="text-danger">*</span>
  </label>
  <div class="input-group">
  <input type="hidden" name="course_id" value="'.$row['course_id'].'">
  <input class="form-control" placeholder="" name="maintopic_name" type="text" value="'.$row['maintopic_name'].'" data-dtp="dtp_dl6pL">    
  </div>
</div>
</div>
</div>
';
}


?>
<?php
if(isset($_POST['dnkk8'])){
  $query=mysqli_query($conn,"select * from subtopic where course_id='".$_POST['dnkk8']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
 
 

<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  subtopic_name<span class="text-danger">*</span>
  </label>
  <div class="input-group">
  <input type="hidden" name="course_id" value="'.$row['course_id'].'">
  <input class="form-control" placeholder="Enter  name" name="subtopic_name" type="text" value="'.$row['subtopic_name'].'" data-dtp="dtp_dl6pL">    
  </div>
</div>
</div>
</div>
';
}


?>

<?php
if(isset($_POST['dnkk7'])){
  $query=mysqli_query($conn,"select * from subtopic_sub where course_id='".$_POST['dnkk7']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
 sub-Subtopic name<span class="text-danger">*</span>
  </label>
  <div class="input-group">
  <input type="hidden" name="course_id" value="'.$row['course_id'].'">
  <input class="form-control" placeholder="Enter sub-subtopic name" name="subtopicsub_name" type="text" value="'.$row['subtopicsub_name'].'" data-dtp="dtp_dl6pL">    
  </div>
</div>
</div>
</div>
';
}


?>

<?php
if(isset($_POST['dnkk2'])){
  $query=mysqli_query($conn,"select * from trainers where id='".$_POST['dnkk2']."'");
  $row=mysqli_fetch_array($query);
  
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Trainer Name  <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="id" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="name" name="trainer_name" type="text" value="'.$row['trainer_name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      about <span class="text-danger">*</span>
      </label>
      <div class="input-group">

         
        <input class="form-control" placeholder="name" name="about" type="text" value="'.$row['about'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
     Experience<span class="text-danger">*</span>
      </label>
      <div class="input-group">

         
        <input class="form-control" placeholder="name" name="experience" type="text" value="'.$row['experience'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

 <div class="row">
 <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Image   <span class="text-danger">*</span>
</label>
<div class="input-group">
<input type="file" class="form-control" value="'.$row['image'].'" name="image" " data-dtp="dtp_dl6pL">

</div>
</div>
</div>
 
</div>
';

}


?>
<?php
if(isset($_POST['dnkk3'])){
  $query=mysqli_query($conn,"select * from trainning where id='".$_POST['dnkk3']."'");
  $row=mysqli_fetch_array($query);
  
  echo ' 
  <div class="row">
 
  
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      description <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="id" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="name" name="description" type="text" value="'.$row['description'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      name <span class="text-danger">*</span>
      </label>
      <div class="input-group">

         
        <input class="form-control" placeholder="name" name="name" type="text" value="'.$row['name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

 <div class="row">
 <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Image   <span class="text-danger">*</span>
</label>
<div class="input-group">
<input type="file" class="form-control" value="'.$row['image'].'" name="image" " data-dtp="dtp_dl6pL">

</div>
</div>
</div>
 
</div>
';
}


?>

