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
                                        <h4>Majibu Yote</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Swali</th>
                                                        <th>Jibu</th>
                                                        <th>Hali</th>
                                                        <th>Tendo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $fo = 1;
                                                    $re = "SELECT * FROM answers order by id desc;";
                                                    $sell = mysqli_query($conn, $re);
                                                    while ($ret = mysqli_fetch_array($sell)) {
                                                        $name = $ret['name'];
                                                        $qn_id = $ret['qn_id'];
                                                        $status = $ret['status'];

                                                        // select from course
                                                        $rezx = "SELECT * FROM questions where id='$qn_id';";
                                                        $sellzx = mysqli_query($conn, $rezx);
                                                        while ($retzx = mysqli_fetch_array($sellzx)) {
                                                            $nametz = $retzx['name'];
                                                        }
                                                    ?>

                                                        <tr>
                                                            <td> <?php echo $fo++; ?> </td>
                                                            <td> <?php echo $nametz . " ?"; ?> </td>
                                                            <td> <?php echo $name; ?> </td>
                                                            <td>
                                                                <?php
                                                                if ($status == "false") { ?>
                                                                    <button class="btn btn-danger">Sio Kweli</button>
                                                                <?php
                                                                } else { ?>
                                                                    <button class="btn btn-success">Kweli</button>
                                                                <?php
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="../../api/DeleteAns/?id=<?php echo $ret['id']; ?>" class="btn btn-danger">Futa</a>
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
