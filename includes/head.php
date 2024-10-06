<?php

session_start();
if (empty($_SESSION['email'])) {
    header('location: ../../../../');
}
include("../../../includes/db/connect.php");
include('../../../../includes/app_name.php');
include('../../../includes/time.php');
$email_value = $_SESSION['email'];

// Logged in user credentials retrival by phone number (query)
$select = "SELECT * FROM users where email = '$email_value';";
$query = mysqli_query($conn, $select);

while ($myqsli = mysqli_fetch_array($query)) {
    $operator_id = $myqsli['id'];
    $operator_password = $myqsli['pass'];
    $phone = $myqsli['phone'];
    $first_name = $myqsli['first_name'];
    $last_name = $myqsli['last_name'];
    $email = $myqsli['email'];
    $region = $myqsli['region'];
    $business = $myqsli['business'];
    $gender = $myqsli['gender'];
    $date_of_birth = $myqsli['date_of_birth'];
    $date_created = $myqsli['date_created'];
    $profile_photo = $myqsli['profile_photo'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C4NSJL24FK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-C4NSJL24FK');
    </script>
    
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $appname_caps ?></title>

    <link rel="stylesheet" href="../../../includes/assets/css/app.min.css">
    <link rel="stylesheet" href="../../../includes/assets/css/style.css">
    <link rel="stylesheet" href="../../../includes/assets/css/components.css">
    <link rel="stylesheet" href="../../../includes/assets/css/custom.css">
    <link rel="stylesheet" href="../../../includes/assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="../../../includes/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="../../../includes/assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../../../includes/assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="../../../includes/assets/bundles/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="../../../includes/assets/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="../../../includes/assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="../../../includes/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel='shortcut icon' type='image/x-icon' href='../../../../images/favicon.png' />
</head>

<?php

$testpassword = 'pandadigital';
$verifypassword = password_hash($testpassword, PASSWORD_DEFAULT);
if (password_verify($testpassword, $operator_password)) { ?>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#subscribe').modal('show').modal({
                backdrop: 'static',
                keyboard: false
            });
        });
    </script>

    <div id="subscribe" class="modal fade" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Tafadhali Badilisha Nywira</h3>
                </div>
                <div class="modal-body">
                    <h6 style="color: green;"><?php include('changepassword.php'); ?></h6>
                    <form method="post" class="needs-validation">
                        <div class="form-group">
                            <input name="pass" required="" type="password" class="form-control" placeholder="Weka Nywira Mpya">
                            <input name="id" readonly type="hidden" value="<?php echo $operator_id; ?>" class="form-control" placeholder="Weka Nywira Mpya">
                        </div>
                        <button name="updatepassword" class="btn btn-primary">Tuma</button>
                        <a style="float: right;" class="btn btn-danger" href="../../api/Logout/">Toka</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
}
?>