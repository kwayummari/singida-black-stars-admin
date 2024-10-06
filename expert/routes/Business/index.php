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
                                                <h4>Tuma Ombi La Biashara</h4>
                                                <h6 style="margin-left: 12cm; color: green;"><?php include('../../api/AddBusiness/index.php') ?></h6>
                                            </div>
                                            <br>
                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <label>Jina La Biashara</label>
                                                    <input name="name" type="text" class="form-control" required="">
                                                    <div class="invalid-feedback">
                                                        Jina La Biashara ni lazima
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Eneo La Biashara</label>
                                                    <input name="location" type="text" class="form-control" required="">
                                                    <div class="invalid-feedback">
                                                        Eneo La Biashara ni lazima
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Maelezo Kuhusu Biashara</label>
                                                    <textarea required="" maxlength="1000" name="maelezo" cols="50" rows="10" class="form-control" placeholder="Yasizidi Maneno 150"></textarea>
                                                    <div class="invalid-feedback">
                                                        Maelezo Kuhusu Biashara ni lazima
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Picha Za Matangazo <tag style="color: red;">(Zisizidi 3)<tag></label>
                                                    <input name="photo[]" type="file" multiple class="form-control" required="">
                                                    <div class="invalid-feedback">
                                                        Picha Za Matangazo ni lazima
                                                    </div>
                                                </div>

                                                <input type="hidden" name="user_id" readonly value="<?php echo $operator_id; ?>">

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
