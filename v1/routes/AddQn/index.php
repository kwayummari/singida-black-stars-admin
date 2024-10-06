<?php
include('../../../includes/head.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $query);

    while ($ret = mysqli_fetch_array($result)) {
        $full_name = $ret['full_name'];
        $address = $ret['address'];
        $phone = $ret['phone'];
        $date_of_birth = $ret['date_of_birth'];
        $pass = $ret['pass'];
        $username = $ret['username'];
        $role = $ret['role'];
    }
}
?>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            <?php
            include('../../../includes/nav.php');
            include('../../includes/sidebar.php');
            ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form method="post" class="needs-validation" novalidate="" enctype="multipart/form-data">
                                            <div class="card-header">
                                                <h4>Ongeza Swali Jipya</h4>
                                                <h6 style="margin-left: 12cm; color: green;"><?php include('../../api/AddQn/index.php') ?></h6>
                                            </div>
                                            <br>
                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <label>Swali Lako</label>
                                                    <!-- <input name="name" type="text" class="form-control" required=""> -->
                                                    <textarea class="form-control" required="" name="name" id="" cols="30" rows="10"></textarea>
                                                    <div class="invalid-feedback">
                                                        Swali ni lazima
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Chagua Video</label>
                                                    <select required="" name="video_id" class="form-control select2">
                                                        <option value="">---</option>
                                                        <?php
                                                        $select_test = "SELECT * FROM video;";
                                                        $sell_test = mysqli_query($conn, $select_test);
                                                        while ($row_test = mysqli_fetch_array($sell_test)) {
                                                            $seller_id = $row_test['id'];
                                                            $description = $row_test['description'];
                                                        ?>
                                                            <option value="<?php echo $seller_id ?>"><?php echo $description ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Video ni lazima
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-footer text-right">
                                                <button name="signup" class="btn btn-primary">Wasilisha</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            </section>

        </div>

        <?php
        include('../../../includes/footer_credit.php');
        ?>

    </div>
    </div>

    <?php
    include('../../../includes/footer.php');
    ?>

</body>

</html>
