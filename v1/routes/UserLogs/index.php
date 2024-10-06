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
                                        <h4>Shughuli Za Mfumo</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Tendo</th>
                                                        <th>Muda</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $fo = 1;
                                                    $re = "SELECT * FROM logs order by id desc;";
                                                    $sell = mysqli_query($conn, $re);
                                                    while ($ret = mysqli_fetch_array($sell)) {
                                                        $activity_name = $ret['activity_name'];
                                                        $date_created = $ret['date_created'];
                                                    ?>

                                                        <tr>
                                                            <td> <?php echo $fo++; ?> </td>
                                                            <td> <?php echo $activity_name ?> </td>
                                                            <td> <?php echo $date_created ?> </td>

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
