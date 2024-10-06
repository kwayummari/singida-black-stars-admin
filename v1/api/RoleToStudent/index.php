<?php
require("../../../includes/db/connect.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "UPDATE users SET role='user' WHERE id ='$id' ";

    $kaka = mysqli_query($conn, $query);

    if ($query) {
        header("location: ../../routes/AllUsers/");
    } else {
        echo "Haiwezi Kufuta Kategoria";
    }
}
