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
                                        <h4>Majibu Yangu</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Swali Uliloulizwa</th>
                                                        <th>Jibu Ulilotoa</th>
                                                        <th>Jibu Sahihi</th>
                                                        <th>Hali</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $fo = 1;
                                                    $re = "SELECT * FROM algorithm where user_id='$operator_id';";
                                                    $sell = mysqli_query($conn, $re);
                                                    while ($ret = mysqli_fetch_array($sell)) {
                                                        $qn_id = $ret['qn_id'];
                                                        $ans_id = $ret['ans_id'];

                                                        $rec = "SELECT * FROM questions where id='$qn_id';";
                                                        $sellc = mysqli_query($conn, $rec);
                                                        while ($retc = mysqli_fetch_array($sellc)) {
                                                            $namec = $retc['name'];
                                                            $idc = $retc['id'];
                                                        }

                                                        $rej = "SELECT * FROM answers where id='$ans_id';";
                                                        $sellj = mysqli_query($conn, $rej);
                                                        while ($retj = mysqli_fetch_array($sellj)) {
                                                            $namej = $retj['name'];
                                                            $statusj = $retj['status'];
                                                        }
                                                    ?>

                                                        <tr>
                                                            <td> <?php echo $fo++; ?> </td>
                                                            <td> <?php echo $namec . " ?" ?> </td>
                                                            <td> <?php echo $namej ?> </td>
                                                            <td>
                                                                <?php
                                                                $rejx = "SELECT * FROM answers where qn_id='$idc' and status='true';";
                                                                $selljx = mysqli_query($conn, $rejx);
                                                                while ($retjx = mysqli_fetch_array($selljx)) {
                                                                    echo  $namejx = $retjx['name'];
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                if ($statusj == "true") {
                                                                ?>
                                                                    <button class="btn btn-success">Umepata</button>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <button class="btn btn-danger">Umekosa</button>
                                                                <?php
                                                                }
                                                                ?>
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
