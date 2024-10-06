<?php
require("../../../includes/db/connect.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = "DELETE FROM answers WHERE id='$id'";
    $query = mysqli_query($conn, $delete);

    if ($query) {
        header("location: ../../routes/ViewAns/");
    } else {
        echo "Haiwezi Kufuta Jibu";
    }
}
