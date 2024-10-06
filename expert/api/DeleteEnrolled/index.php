<?php
require("../../../includes/db/connect.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = "DELETE FROM enrolled WHERE id='$id'";
    $query = mysqli_query($conn, $delete);

    if ($query) {
        echo "<script>alert('Umefanikiwa kufuta kozi')</script>";
?>
        <script>
            setTimeout(function() {
                window.location.href = '../../routes/MyCourses/';
            }, 500);
        </script>
<?php
        // header("location: ../../routes/MyCourses/");
    } else {
        echo "Haiwezi Kufuta Kozi";
    }
}
