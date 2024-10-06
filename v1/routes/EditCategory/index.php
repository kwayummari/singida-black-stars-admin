<?php
include('../../../includes/head.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM category WHERE id=$id";
    $result = mysqli_query($conn, $query);

    while ($ret = mysqli_fetch_array($result)) {
        $name = $ret['name'];
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

                                        <form method="post" class="needs-validation" novalidate="">
                                            <div class="card-header">
                                                <h4>Hariri Kategoria</h4>
                                                <h6 style="margin-left: 12cm; color: green;"><?php include('../../api/UpdateCategory/index.php') ?></h6>
                                            </div>
                                            <br>
                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <label>Jina la Kategoria</label>
                                                    <input name="name" value="<?php echo $name ?>" type="text" class="form-control" required="">
                                                    <input name="id" readonly value="<?php echo $id ?>" type="hidden" class="form-control" required="">
                                                    <div class="invalid-feedback">
                                                        Kategoria Inahitajika
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-footer text-right">
                                                <button name="signup" class="btn btn-primary">Tuma</button>
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
