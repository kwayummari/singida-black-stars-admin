<?php
include('../../../includes/head.php');
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
                                    <div class="card-header">
                                        <h4>Vyeti Vyangu</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Jina</th>
                                                        <th>Tendo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $fo = 1;
                                                    $re = "SELECT * FROM enrolled where user_id='$operator_id';";
                                                    $sell = mysqli_query($conn, $re);
                                                    while ($ret = mysqli_fetch_array($sell)) {
                                                        $course_id = $ret['course_id'];

                                                        $rec = "SELECT * FROM course where id='$course_id';";
                                                        $sellc = mysqli_query($conn, $rec);
                                                        while ($retc = mysqli_fetch_array($sellc)) {
                                                            $namec = $retc['name'];
                                                        }
                                                    ?>

                                                        <tr>
                                                            <td> <?php echo $fo++; ?> </td>
                                                            <td> <?php echo $namec ?> </td>
                                                            <td>
                                                                <a href="../../routes/ViewCertificate/?id=<?php echo $ret['id']; ?>" class="btn btn-success">Ona Cheti</a>
                                                            </td>

                                                        </tr>

                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
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
