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
                                        <h4>Maswali Ambayo Hayajajibiwa</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Jina</th>
                                                        <th>Swali</th>
                                                        <th>Simu</th>
                                                        <th>Tendo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $fo = 1;
                                                    $re = "SELECT * FROM expertqn where expert_id='$operator_id' AND status='0';";
                                                    $sell = mysqli_query($conn, $re);
                                                    while ($ret = mysqli_fetch_array($sell)) {
                                                        $user_id = $ret['user_id'];
                                                        $qn = $ret['qn'];
                                                        $phone = $ret['phone'];
                                                        $user_idqw = $ret['user_id'];
                                                        $expert_idqw = $ret['expert_id'];

                                                    ?>

                                                        <tr>
                                                            <td> <?php echo $fo++; ?> </td>
                                                            <td>
                                                                <?php
                                                                $reqm = "SELECT * FROM users where id='$user_idqw';";
                                                                $sellqm = mysqli_query($conn, $reqm);
                                                                while ($retqm = mysqli_fetch_array($sellqm)) {
                                                                    $firstqm = $retqm['first_name'];
                                                                    $lastqm = $retqm['last_name'];
                                                                    echo $firstqm . " " . $lastqm;
                                                                }
                                                                ?>
                                                            </td>
                                                            <td> <?php echo $qn ?> </td>
                                                            <td> <?php echo "+255" . $phone ?> </td>
                                                            <td>
                                                                <a href="../../routes/AnsQn/?id=<?php echo $ret['id']; ?>" class="btn btn-info">Jibu Swali</a>
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
