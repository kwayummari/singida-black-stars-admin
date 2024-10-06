<?php
session_start();
if (!isset($_SESSION['userEmail'], $_SESSION['userPhone'], $_SESSION['userFullName'], $_SESSION['isSeller'], $_SESSION['userId'])) {
    header("Location: ../../../../index.php");
    exit();
}
include '../connection/index.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$query = "
    SELECT 
        sales.id, 
        sales.date, 
        sales.amount, 
        sales.phone, 
        sales.reference_no, 
        sales.mobile_type,
        sales.status,
        products.name AS productName,
        CONCAT(users.first_name, ' ', users.last_name) AS buyerName
    FROM sales
    JOIN products ON sales.productId = products.id
    JOIN users ON sales.buyersId = users.id
    ORDER BY sales.id DESC
";
$result = mysqli_query($connect, $query);
$total_query = "SELECT SUM(amount) AS grand_total FROM sales";
$total_result = mysqli_query($connect, $total_query);
$total_row = mysqli_fetch_assoc($total_result);
$grand_total = $total_row['grand_total'] ?? 0;
mysqli_free_result($total_result);
?>
<!DOCTYPE html>
<html lang="en">
<?php include "../head/head2.php"; ?>
<body>
    <?php include "../header/header2.php"; ?>
    <?php include "../aside/aside2.php"; ?>
    <main id="main" class="main">
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">All Sales <span>| Today</span></h5>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Buyer</th>
                                <th scope="col">Product</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Reference No</th>
                                <th scope="col">Mobile Type</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['date']); ?></td>
                                    <td><?php echo htmlspecialchars($row['buyerName']); ?></td>
                                    <td><?php echo htmlspecialchars($row['productName']); ?></td>
                                    <td><?php echo htmlspecialchars($row['amount']); ?></td>
                                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                    <td><?php echo htmlspecialchars($row['reference_no']); ?></td>
                                    <td><?php echo htmlspecialchars($row['mobile_type']); ?></td>
                                    <td style="color: <?php echo $row['status'] == 0 ? 'red' : 'green' ?>;"><?php echo $row['status'] == 0 ? 'Not Received' : 'Received'; ?></td>
                                </tr>
                            <?php
                            }
                            mysqli_free_result($result);
                            ?>
                        </tbody>
                    </table>
                    <div class="grand-total">
                        <h6>Grand Total: <?php echo number_format($grand_total, 2); ?> TZS</h6>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "../footer/footer.php" ?>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.min.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>
<?php
mysqli_close($connect);
?>