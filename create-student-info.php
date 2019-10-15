<?php
include 'header.php';
if (isset($_POST['create_student'])) {
    $student_obj->create_student_info($_POST);
}
?>
<div class="container"> 
    <div class="row content">
        <a  href="index.php"  class="button button-bluestate mt-12 pull-right">See Student List</a> 
        <h3>Sign In New Student</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="student_name">Name:</label>
                <input type="text" name="student_name" id="student_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat:</label>
                <input type="text" class="form-control" name="Alamat" id="Alamat" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="NIM">NIM:</label>
                <input type="text" class="form-control" name="NIM" id="NIM"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="" selected>Choose your gender </option>
                    <option value="Laki - Laki" >Male</option>
                    <option value="Perempuan" >Female</option>
                </select>
            </div> 
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" name="country" id="country" class="form-control"  maxlength="50">
            </div>
            <input type="submit" class="button button-green  pull-right" name="create_student" value="Submit"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

