<?php
session_start();
$user_id = $_SESSION['userId'];
$role = $_SESSION['role'];
$userFullName = $_SESSION['userFullName'];
$userEmail = $_SESSION['userEmail'];
$userPhone = $_SESSION['userPhone'];
$isSeller = $_SESSION['isSeller'];
include 'connection/index.php';

$query = "SELECT * FROM categories";
$result = mysqli_query($connect, $query);
$total_categories = mysqli_num_rows($result);

$query = "SELECT * FROM news";
$result = mysqli_query($connect, $query);
$total_news = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">

<?php include "head/head.php" ?>

<body>
  <!-- ======= Header ======= -->
  <?php include "header/header.php" ?>
  <!-- ======= Sidebar ======= -->
  <?php include "aside/aside.php" ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">
        <div class="row">
          <!-- Total Categories Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Total <span>| Registered News Categories</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-list"></i>
                  </div>
                  <div class="ps-3">
                    <h5><?php echo $total_categories ?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Total Categories Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Total <span>| Registered News</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-list"></i>
                  </div>
                  <div class="ps-3">
                    <h5><?php echo $total_news ?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <?php include "footer/footer.php" ?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>
