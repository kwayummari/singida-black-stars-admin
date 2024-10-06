<?php
include('../../../includes/head.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM enrolled WHERE id=$id";
    $result = mysqli_query($conn, $query);

    while ($ret = mysqli_fetch_array($result)) {
        $course_id = $ret['course_id'];
    }

    $query = "SELECT * FROM course WHERE id=$course_id";
    $result = mysqli_query($conn, $query);

    while ($ret = mysqli_fetch_array($result)) {
        $course_name = $ret['name'];
        $course_description = $ret['description'];
        $course_photo = $ret['photo'];
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
                                        <h4>Kuhusu Kozi <?php echo $course_name; ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="py-4">
                                            <p class="clearfix">
                                                <span class="float-left">
                                                    Jina
                                                </span>
                                                <span class="float-right text-muted">
                                                    <?php echo $course_name; ?>
                                                </span>
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <?php
                                $queryv = "SELECT * FROM video where course_id=$course_id";
                                $resultv = mysqli_query($conn, $queryv);
                                $foo = 1;
                                while ($retv = mysqli_fetch_array($resultv)) {
                                    $video_name = $retv['name'];
                                    $idv = $retv['id'];
                                ?>
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Video Namba <?php echo $foo++; ?></h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="py-4">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe src="<?php echo $video_name; ?>" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                                                </div>
                                            </div>
                                            <a href="../../routes/AnsQn/?id=<?php echo $retv['id']; ?>" class="btn btn-info">Jibu Maswali</a>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>

                            <div class="col-12 col-md-12 col-lg-8">
                                <div class="card">
                                    <div class="padding-20">
                                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab" aria-selected="true">Kuhusu Kozi</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content tab-bordered" id="myTab3Content">
                                            <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                                                <h6 style="color: #8226C9;"> <b> Maelezo kuhusu kozi ya <?php echo $course_name; ?> </b> </h6>
                                                <p class="m-t-30"><?php echo $course_description; ?></p>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Picha kuhusu kozi ya <?php echo $course_name ?></h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="py-4">
                                                            <img class="img-fluid" src="../../../uploads/IntroPhoto/<?php echo $course_photo; ?>" alt="" srcset="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
