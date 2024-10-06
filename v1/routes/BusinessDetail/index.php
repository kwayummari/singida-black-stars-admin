<?php
include('../../../includes/head.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $queryk = "SELECT * FROM business where id=$id";
    $resultk = mysqli_query($conn, $queryk);
    while ($retk = mysqli_fetch_array($resultk)) {
        $user_idk = $retk['user_id'];
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
                            <div class="col-12 col-lg-12 col-lg-4">
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

                                <?php
                                $queryv = "SELECT * FROM business_photo where user_id=$user_idk";
                                $resultv = mysqli_query($conn, $queryv);
                                $foo = 1;
                                while ($retv = mysqli_fetch_array($resultv)) {
                                    $photo = $retv['photo'];
                                ?>
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Picha Namba <?php echo $foo++; ?></h4>
                                        </div>
                                        <div class="card-body">
                                            <img src="../../../uploads/Business/<?php echo $photo; ?>" alt="">
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>

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
