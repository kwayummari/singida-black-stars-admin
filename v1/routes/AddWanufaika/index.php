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
                                                <h4>Ongeza Wanufaika</h4>
                                                <h6 style="margin-left: 12cm; color: green;"><?php include('../../api/AddWanufaika/index.php') ?></h6>
                                            </div>
                                            <br>
                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <label>Jina la mnufaika </label>
                                                    <input name="name" type="text" class="form-control" required="">
                                                    <div class="invalid-feedback">
                                                        Jina la mnufaika ni lazima
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Kichwa Cha Habari </label>
                                                    <input name="title" type="text" class="form-control" required="">
                                                    <div class="invalid-feedback">
                                                        Kichwa Cha Habari ni lazima
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Maelezo Kuhusu Mnufaika</label>
                                                    <textarea required="" id="editorwanufaika" maxlength="1000" name="description" cols="50" rows="10" class="form-control" placeholder="Yasizidi Maneno 150"></textarea>
                                                    <div class="invalid-feedback">
                                                        Maelezo Kuhusu Biashara ni lazima
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Picha </label>
                                                    <input name="photo" type="file" class="form-control" required="">
                                                    <div class="invalid-feedback">
                                                        Picha ni lazima
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
