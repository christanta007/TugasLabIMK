<?php
include 'header.php';
$student_list = $student_obj->student_list();
?>
<div class="container " > 
    <div class="row content">
        <a  href="create-student-info.php"  class="button button-orange mt-12 pull-right">Sign In New Student</a> 
        <h3>Our Student</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>&emsp;&emsp;&emsp;&emsp;&emsp;Name</th>
                    <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Alamat</th>
                    <th>&emsp;&emsp;&emsp;&emsp;&emsp;NIM</th>
                    <th>&emsp;&emsp;&emsp;Gender</th>
                    <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Action</th>
                </tr>
            </thead>
            <tbody>
<?php
if ($student_list->num_rows > 0) {
  while ($row = $student_list->fetch_assoc()) {
     ?>
             <tr align="center">
                <td><?php echo $row["student_name"] ?></td>
                <td><?php echo $row["Alamat"] ?></td>
                <td><?php echo $row["NIM"] ?></td>
                <td><?php echo $row["gender"] ?></td>
                <td class="text-right">
                    <a  href="<?php echo 'delete-student-info.php?id=' . $row["student_id"] ?>" class="button button-red">Delete</a>  
                    <a  href="<?php echo 'update-student-info.php?id=' . $row["student_id"] ?>" class="button button-blue">Edit</a>  
                    <a href="<?php echo 'read-student-info.php?id=' . $row["student_id"] ?>" class="button button-green">View</a>
                </td>
            </tr>
    <?php
    }
}
?>
           </tbody>
        </table>

    </div>
</div>
<?php
include 'footer.php';
?>  

