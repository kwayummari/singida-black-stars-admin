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
                                        <h4>Wanafunzi Wote</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Majina Kamili</th>
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <th>Tendo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    $fo = 1;
                                                    $re = "SELECT * FROM users where role='user' order by id desc;";
                                                    $sell = mysqli_query($conn, $re);
                                                    while ($ret = mysqli_fetch_array($sell)) {
                                                        $first_name = $ret['first_name'];
                                                        $last_name = $ret['last_name'];
                                                        $phone = $ret['phone'];
                                                        $email = $ret['email'];
                                                    ?>

                                                        <tr>
                                                            <td> <?php echo $fo++; ?> </td>
                                                            <td> <?php echo $first_name . " " . $last_name ?> </td>
                                                            <td> <?php echo "+255 " . $phone ?> </td>
                                                            <td> <?php echo $email ?> </td>
                                                            <td>
                                                                <!-- <a href="../FinishedRequestDetails/?id=<?php
                                                                                                            // echo $ret['id'];
                                                                                                            ?>" class="btn btn-info">More Details</a> -->
                                                                <button class="btn btn-sm btn-primary">Ona</button>
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
