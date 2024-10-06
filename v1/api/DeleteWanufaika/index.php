<?php
require("../../../includes/db/connect.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = "DELETE FROM wanufaika WHERE id='$id'";
    $query = mysqli_query($conn, $delete);

    if ($query) {
        header("location: ../../routes/ViewWanufaika/");
    } else {
        echo "Imefeli";
    }
}
