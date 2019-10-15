<?php
 include 'header.php';
 

 if(isset($_GET['id'])){
  $student_info=$student_obj->view_student_by_student_id($_GET['id']);
  


     
 }else{
  header('Location: index.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content">

       
          
           
             <a  href="index.php"  class="button button-bluestate mt-12 pull-right">See Student List</a> 
     
 <h3>Student Info</h3>
       
    
     <hr/>
   
   
 
      
    <label >Name:</label>
   <?php  if(isset($student_info['student_name'])){echo $student_info['student_name']; }?>

<br/>
    <label>Alamat:</label>
  <?php  if(isset($student_info['Alamat'])){echo $student_info['Alamat'];} ?>
    
    <br/>
    <label >NIM:</label>
      <?php  if(isset($student_info['NIM'])){echo $student_info['NIM'];} ?>
    <br/>

  <label >Gender:</label>
   <?php  if(isset($student_info['gender'])){echo $student_info['gender'];} ?>
  <br/>
    <label >Country:</label>
      <?php  if(isset($student_info['country'])){echo $student_info['country'];} ?>
    <br/>

          

    <a href="<?php echo 'update-student-info.php?id='.$student_info["student_id"] ?>" class="button button-blue">Action</a>

   
  
     
   
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

