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
                                        <h4>Blogi Zilizochapishwa</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Kichwa Cha Habari</th>
                                                        <th>Maelezo</th>
                                                        <th>Picha</th>
                                                        <th>Muda</th>
                                                        <th>Tendo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $fo = 1;
                                                    $re = "SELECT * FROM blog order by id desc;";
                                                    $sell = mysqli_query($conn, $re);
                                                    while ($ret = mysqli_fetch_array($sell)) {
                                                        $name = $ret['name'];
                                                        $maelezo = $ret['maelezo'];
                                                        $photo = $ret['photo'];
                                                        $date_created = $ret['date_created'];
                                                    ?>

                                                        <tr>
                                                            <td> <?php echo $fo++; ?> </td>
                                                            <td> <?php echo $name ?> </td>
                                                            <td> <?php echo $maelezo ?></td>
                                                            <td> <img style="width: min-content; height: min-content;" src="../../../uploads/Blog/<?php echo $photo; ?>" alt="" srcset=""> </td>
                                                            <td> <?php echo $date_created ?></td>
                                                            <td>
                                                                <a href="../../api/DeleteBlog/?id=<?php echo $ret['id']; ?>" class="btn btn-danger">Futa</a>
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
