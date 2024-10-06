<?php
include('../../../includes/head.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM questions WHERE id=$id";
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
                        <div class="row mt-sm-4">
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card author-box">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="author-box-description">
                                                <p style="color: #F4AC1A;">
                                                    <tag style="color: #8226C9; font-size: large;">"</tag>Jukwaa la kwanza la kidigitali kwa lugha ya Kiswahili lenye lengo la kuwasaidia wasichana kupata ujuzi na
                                                    rasilimali za kuanza na kuendesha biashara zao ili kunufaika uchumi wa kidigitali.<tag style="color: #8226C9; font-size: large;">"</tag>
                                                </p>
                                            </div>
                                            <div class="mb-2 mt-3">
                                                <div style="color: #8226C9;" class="text-small font-weight-bold">Jukwaa La Panda Digital</div>
                                            </div>

                                            <div class="w-100 d-sm-none"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h4>Majibu Ya Swali la <tag style="color: green;"><?php echo $name; ?> ?</tag>
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="py-4">

                                            <?php
                                            $query = "SELECT * FROM answers WHERE qn_id=$id";
                                            $result = mysqli_query($conn, $query);

                                            $fo = 1;
                                            while ($ret = mysqli_fetch_array($result)) {
                                                $name = $ret['name'];
                                                $status = $ret['status'];
                                            ?>

                                                <p class="clearfix">
                                                    <span class="float-left">
                                                        Jibu Namba

                                                        <?php echo $fo++; ?>
                                                        <?php
                                                        if ($status == "true") { ?>
                                                            <button class="btn btn-success"></button>
                                                        <?php
                                                        } else { ?>
                                                            <button class="btn btn-danger"></button>

                                                        <?php
                                                        }
                                                        ?>
                                                    </span>
                                                    <span class="float-right text-muted">
                                                        <?php echo $name ?>
                                                    </span>
                                                </p>

                                            <?php
                                            }
                                            ?>
                                        </div>

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
