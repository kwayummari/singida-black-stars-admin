<?php
require("../../../includes/db/connect.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "UPDATE business SET status='approved' WHERE id ='$id' ";

    $kaka = mysqli_query($conn, $query);

    if ($kaka) {
?>
        <script>
            setTimeout(function() {
                window.location.href = '../../routes/Business/';
            }, 500);
        </script>
<?php
    }
}
