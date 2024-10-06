<?php
include('../../../includes/head.php');
require("../../../includes/db/connect.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // To check if the selected course was enrolled before by the same user
    $coursecheck = mysqli_query($conn, "SELECT * FROM enrolled WHERE course_id='$id' AND user_id='$operator_id'");

    if (mysqli_num_rows($coursecheck)) {
        echo "<script>alert('Huwezi kujiandikisha kozi mara mbili')</script>";
?>
        <script>
            setTimeout(function() {
                window.location.href = '../../routes/ViewCourses/';
            }, 500);
        </script>
        <?php
    } else {
        $adduser = "INSERT INTO enrolled (course_id,user_id) VALUES('$id','$operator_id');";

        $query = mysqli_query($conn, $adduser);

        if ($query) {
            echo "<script>alert('Umefanikiwa kujiandikisha na kozi hii')</script>";
        ?>
            <script>
                setTimeout(function() {
                    window.location.href = '../../routes/ViewCourses/';
                }, 500);
            </script>
<?php
        } else {
            echo "Imefeli Kuongeza Kategoria";
        }
    }
}
