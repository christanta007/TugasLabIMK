<?php
include 'header.php';
if (isset($_GET['id'])) {
    $student_info = $student_obj->view_student_by_student_id($_GET['id']);
    if (isset($_POST['update_student']) && $_GET['id'] === $_POST['id']) {
        $student_obj->update_student_info($_POST);
    }
} else {
    header('Location: index.php');
}
?>
<div class="container " > 
    <div class="row content">
        <a href="index.php"  class="button button-bluestate mt-12 pull-right">See Student List</a> 
        <h3>Edit Student Info</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php if (isset($student_info['student_id'])) {
            echo $student_info['student_id'];
        } ?>" id=""  >
            <div class="form-group">
                <label for="student_name">Name:</label>
                <input type="text" name="student_name" value="<?php if (isset($student_info['student_name'])) {
                   echo $student_info['student_name'];
        } ?>" id="student_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat:</label>
                <input type="text" class="form-control" value="<?php if (isset($student_info['Alamat'])) {
            echo $student_info['Alamat'];
        } ?>" name="Alamat" id="Alamat" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="NIM">NIM:</label>
                <input type="text" class="form-control" value="<?php if (isset($student_info['NIM'])) {
            echo $student_info['NIM'];
        } ?>" name="NIM" id="NIM"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="">Choose your gender</option>
                    <option value="Male" <?php if (isset($student_info['gender']) && $student_info['gender'] == 'Male') {
            echo 'selected';
        } ?>>Male</option>
                    <option value="Female" <?php if (isset($student_info['gender']) && $student_info['gender'] == 'Female') {
            echo 'selected';
        } ?>>Female</option>

                </select>

            </div> 
            <div class="form-group">
                <label for="country">country:</label>
                <input type="text" name="country" value="<?php if (isset($student_info['country'])) {
            echo $student_info['country'];
        } ?>" id="country" class="form-control"  maxlength="50">
            </div>
            <input type="submit" class="button button-green  pull-right" name="update_student" value="Update"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

