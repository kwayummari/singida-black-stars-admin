<?php
session_start();
include '../connection/index.php';

if (isset($_POST['delete_image'])) {
    $imageId = intval($_POST['delete_image']);
    $productId = intval($_POST['productId']);
    $query = "SELECT image FROM gallery WHERE id = ?";
    $stmt = $connect->prepare($query);
    $stmt->bind_param("i", $imageId);
    $stmt->execute();
    $stmt->bind_result($imageName);
    $stmt->fetch();
    $stmt->close();
    $query = "DELETE FROM gallery WHERE id = ?";
    $stmt = $connect->prepare($query);
    $stmt->bind_param("i", $imageId);
    if ($stmt->execute()) {
        $imagePath = "../../assets/images/" . $imageName;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }
    $stmt->close();
    header("Location: update_gallery.php?productId=" . $productId);
    exit();
}
$productId = intval($_GET['productId']);
$query = "SELECT * FROM gallery WHERE productId = '$productId'";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<?php include "../head/head2.php"; ?>
<body>
  <?php include "../header/header2.php"; ?>
  <?php include "../aside/aside2.php"; ?>
  <main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Update Product Gallery</h5>
            <form method="POST" action="updates_gallery.php" enctype="multipart/form-data">
              <div class="row mb-3">
                <label for="inputFiles" class="col-sm-2 col-form-label">Select Images</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" name="gallery_images[]" id="gallery_images" multiple accept="image/*" onchange="previewImages();">
                  <div id="image_preview" style="margin-top: 10px;"></div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                  <button type="submit" name="upload" class="btn btn-primary">Upload Images</button>
                </div>
              </div>
              <input type="hidden" name="productId" value="<?php echo $productId; ?>">
            </form>

            <hr>

            <h5 class="card-title">Existing Images</h5>
            <form method="POST" action="update_gallery.php">
              <?php
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="row mb-3">';
                echo '<div class="col-sm-2">';
                echo '<img src="../../assets/images/' . htmlspecialchars($row['image']) . '" style="width: 100px; height: 100px; margin: 10px;">';
                echo '</div>';
                echo '<div class="col-sm-8">';
                echo '<button type="submit" name="delete_image" value="' . htmlspecialchars($row['id']) . '" class="btn btn-danger">Delete</button>';
                echo '</div>';
                echo '</div>';
              }
              ?>
              <input type="hidden" name="productId" value="<?php echo $productId; ?>">
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include "../footer/footer.php"; ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script>
    function previewImages() {
      var preview = document.getElementById('image_preview');
      preview.innerHTML = '';
      var files = document.getElementById('gallery_images').files;
      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var img = document.createElement("img");
        img.classList.add("img-preview");
        img.src = URL.createObjectURL(file);
        img.style.width = "100px";
        img.style.height = "100px";
        img.style.margin = "10px";
        preview.appendChild(img);
      }
    }
  </script>
  <style>
    .img-preview {
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 5px;
    }
  </style>
</body>
</html>
