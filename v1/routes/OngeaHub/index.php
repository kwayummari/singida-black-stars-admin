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
                                        <h4>Maombi Ya Ongea Hub</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Majina Kamili</th>
                                                        <th>Namba Ya Simu</th>
                                                        <th>Jina La Tukio</th>
                                                        <th>Tarehe Ya Kuripoti</th>
                                                        <th>Msaada</th>
                                                        <th>Maelezo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $fo = 1;
                                                    $re = "SELECT * FROM ongea_hub order by id desc;";
                                                    $sell = mysqli_query($conn, $re);
                                                    while ($ret = mysqli_fetch_array($sell)) {
                                                        $fname = $ret['fname'];
                                                        $sname = $ret['sname'];
                                                        $phone = $ret['phone'];
                                                        $region = $ret['region'];
                                                        $tarehe_ya_tukio = $ret['tarehe_ya_tukio'];
                                                        $msaada = $ret['msaada'];
                                                        $report = $ret['report'];
                                                        $report_date = $ret['report_date'];
                                                    ?>

                                                        <tr>
                                                            <td> <?php echo $fo++; ?> </td>
                                                            <td> <?php echo $fname . " " . $sname ?> </td>
                                                            <td> <?php echo "+255 " . $phone ?></td>
                                                            <td> <?php echo $tarehe_ya_tukio ?></td>
                                                            <td> <?php echo $report_date ?></td>
                                                            <td> <?php echo $msaada ?></td>
                                                            <td>
                                                                <textarea disabled readonly class="form-control" name="" id="" cols="100" rows="4"><?php echo $report ?></textarea>
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
