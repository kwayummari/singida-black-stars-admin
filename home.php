<?php
session_start();
$user_id = $_SESSION['userId'];
$role = $_SESSION['role'];
$userFullName = $_SESSION['userFullName'];
$userEmail = $_SESSION['userEmail'];
$userPhone = $_SESSION['userPhone'];
$isSeller = $_SESSION['isSeller'];
include 'connection/index.php';

// Fetch total registered products
$query = "SELECT * FROM products WHERE sellerId = '$user_id'";
$result = mysqli_query($connect, $query);
$total_products = mysqli_num_rows($result);

// Fetch total sales and total sales amount where status = 1 and sellerId matches the logged-in user
$query_sales = "
  SELECT COUNT(*) as total_sales, SUM(sales.amount) as total_sales_amount
  FROM sales 
  JOIN products ON sales.productId = products.id 
  WHERE sales.status = 1 AND products.sellerId = '$user_id'";
$sales_result = mysqli_query($connect, $query_sales);
$sales_data = mysqli_fetch_assoc($sales_result);
$total_sales = $sales_data['total_sales'];
$total_sales_amount = $sales_data['total_sales_amount'];

// Fetch most sold product
$query_most_sold = "
  SELECT products.name, COUNT(sales.productId) as total_sold
  FROM sales 
  JOIN products ON sales.productId = products.id 
  WHERE sales.status = 1 AND products.sellerId = '$user_id'
  GROUP BY sales.productId
  ORDER BY total_sold DESC
  LIMIT 1";
$most_sold_result = mysqli_query($connect, $query_most_sold);
$most_sold_data = mysqli_fetch_assoc($most_sold_result);
$most_sold_product = $most_sold_data['name'];
$most_sold_count = $most_sold_data['total_sold'];

// Fetch most rated product based on average rating
$query_most_rated = "
  SELECT products.name, AVG(ratings.rating) as avg_rating
  FROM ratings
  JOIN products ON ratings.productId = products.id
  WHERE products.sellerId = '$user_id'
  GROUP BY ratings.productId
  ORDER BY avg_rating DESC
  LIMIT 1";
$most_rated_result = mysqli_query($connect, $query_most_rated);
$most_rated_data = mysqli_fetch_assoc($most_rated_result);
$most_rated_product = $most_rated_data['name'];
$most_rated_avg = $most_rated_data['avg_rating'];

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
          <!-- Total Registered Products Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Total <span>| Registered Products</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h5><?php echo $total_products ?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Sales Total Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Total <span>| Sales</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-list"></i>
                  </div>
                  <div class="ps-3">
                    <h5><?php echo $total_sales ?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Total Sales Amount Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Total <span>| Sales Amount</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <p>Tsh.</p>
                  </div>
                  <div class="ps-3">
                    <h5>TSh. <?php echo number_format($total_sales_amount, 2); ?>/=</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Most Sold Product Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Most <span>| Sold Product</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-bag-check"></i>
                  </div>
                  <div class="ps-3">
                    <h5><?php echo $most_sold_product; ?> (<?php echo $most_sold_count; ?> sold)</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Most Rated Product Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Most <span>| Rated Product</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-star"></i>
                  </div>
                  <div class="ps-3">
                    <h5><?php echo $most_rated_product; ?> (Avg Rating: <?php echo number_format($most_rated_avg, 2); ?>)</h5>
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
