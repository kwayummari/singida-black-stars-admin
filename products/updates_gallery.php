<?php
session_start();
include '../connection/index.php';
if (isset($_POST['upload'])) {
    $productId = intval($_POST['productId']);
    $folder = "../../assets/images/";
    $allowed_types = array('jpg', 'jpeg', 'png', 'gif', 'webp');
    $query = "SELECT COUNT(*) as count FROM gallery WHERE productId = '$productId'";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_assoc($result);
    $currentImageCount = $data['count'];
    if ($currentImageCount < 4) {
        foreach ($_FILES['gallery_images']['tmp_name'] as $key => $tmp_name) {
            $file_name = $_FILES['gallery_images']['name'][$key];
            $file_tmp = $_FILES['gallery_images']['tmp_name'][$key];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            if (in_array($file_ext, $allowed_types)) {
                $final_name = str_replace(" ", "-", $file_name);
                $upload_path = $folder . $final_name;

                if (move_uploaded_file($file_tmp, $upload_path)) {
                    $query = "INSERT INTO gallery (productId, image) VALUES ('$productId', '$final_name')";
                    mysqli_query($connect, $query);
                    echo "Uploaded successful";
                    header("Location: update_gallery.php?productId=" . $productId);
                } else {
                    echo "Failed to upload $file_name.";
                }
            } else {
                echo "File type not allowed: $file_name.";
            }
        }
    } else {
        echo "Maximum number of images (4) reached.";
    }
}
if (isset($_POST['delete_image'])) {
    $imageName = mysqli_real_escape_string($connect, $_POST['delete_image']);
    $productId = intval($_GET['productId']);
        $query = "SELECT image FROM gallery WHERE image = '$imageName' AND productId = '$productId'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        $file_path = "../../assets/images/" . $imageName;
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        $query = "DELETE FROM gallery WHERE image = '$imageName' AND productId = '$productId'";
        mysqli_query($connect, $query);
    }
    header("Location: update_gallery.php?productId=" . $productId);
    exit;
}

