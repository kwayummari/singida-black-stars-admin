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
                                        <h4>Video Zote</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Jina la kozi</th>
                                                        <th>Video</th>
                                                        <th>Tendo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $fo = 1;
                                                    $re = "SELECT * FROM video order by id desc;";
                                                    $sell = mysqli_query($conn, $re);
                                                    while ($ret = mysqli_fetch_array($sell)) {
                                                        $name = $ret['name'];
                                                        $course_id = $ret['course_id'];

                                                        // select from course
                                                        $rezx = "SELECT * FROM course where id='$course_id';";
                                                        $sellzx = mysqli_query($conn, $rezx);
                                                        while ($retzx = mysqli_fetch_array($sellzx)) {
                                                            $nametz = $retzx['name'];
                                                        }
                                                    ?>

                                                        <tr>
                                                            <td> <?php echo $fo++; ?> </td>
                                                            <td> <?php echo $nametz; ?> </td>
                                                            <td>
                                                                <iframe width="100%" style="height: 10cm;" src="<?php echo $name; ?>" frameborder="0"></iframe>
                                                            </td>
                                                            <td>
                                                                <a href="../../api/DeleteVideo/?id=<?php echo $ret['id']; ?>" class="btn btn-danger">Futa</a>
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
