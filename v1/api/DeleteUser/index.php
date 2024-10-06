<?php
require("../../../includes/db/connect.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = "DELETE FROM users WHERE id='$id'";
    $query = mysqli_query($conn, $delete);

    if ($query) {
        header("location: ../../routes/AllUsers/");
    } else {
        echo "Haiwezi Kufuta Kategoria";
    }
}
