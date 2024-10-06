<?php
include('../../../includes/head.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM expertqn WHERE id=$id";
    $result = mysqli_query($conn, $query);

    while ($ret = mysqli_fetch_array($result)) {
        $qnid = $ret['id'];
        $qn = $ret['qn'];
        $qnphone = $ret['phone'];
        $user_id = $ret['user_id'];
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
                                                <h4>Jibu Swali la <?php echo $qn ?></h4>
                                                <h6 style="margin-left: 12cm; color: green;"><?php include('../../api/AnsQn/index.php') ?></h6>
                                            </div>
                                            <br>

                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <textarea name="answer" required="" class="form-control" cols="30" placeholder="Andika Jibu Hapa" rows="10"></textarea>
                                                </div>

                                                <input type="hidden" name="user_id" readonly value="<?php echo $user_id; ?>">
                                                <input type="hidden" name="qnid" readonly value="<?php echo $qnid; ?>">
                                                <input type="hidden" name="qnphone" readonly value="<?php echo $qnphone; ?>">
                                                <input type="hidden" name="qn" readonly value="<?php echo $qn; ?>">

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
