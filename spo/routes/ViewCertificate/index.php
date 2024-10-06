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
        // $course_description = $ret['description'];
        // $course_photo = $ret['photo'];
        // $course_category = $ret['category_id'];
    }

    $query = "SELECT * FROM questions";
    $result = mysqli_query($conn, $query);

    while ($ret = mysqli_fetch_array($result)) {
        $video_id = $ret['video_id'];
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

            <style>
                @import url('https://fonts.googleapis.com/css?family=Open+Sans|Pinyon+Script|Rochester');

                @media print {

                    .no-print,
                    .no-print * {
                        display: none !important;
                    }

                    .print-m-0 {
                        margin: 0 !important;
                    }
                }

                .btn {
                    padding: 10px 17px;
                    border-radius: 3px;
                    background: #f4b71a;
                    border: none;
                    font-size: 12px;
                    margin: 10px 5px;
                }

                .toolbar {
                    background: #333;
                    width: 100vw;
                    position: fixed;
                    left: 0;
                    top: 0;
                    text-align: center;
                }

                .certificate-container {
                    text-align: center;
                }

                .card {
                    position: relative;
                }

                .logo-image {
                    height: 100px;
                }

                .line-image {
                    height: 70px;
                    align-items: center;
                    justify-content: center;
                }

                .tag-image {
                    height: 150px;
                }

                .other-font {
                    font-family: Cambria, Georgia, serif;
                    color: black;
                    font-size: 70px;
                    padding-top: 50px;
                    padding-bottom: 20px;
                    text-align: center;
                }

                .line {
                    width: 100px;
                    height: 1px;
                    background-color: #e1c224;
                    margin: 10px;
                    text-align: center;
                }

                .line-container {
                    justify-content: center;
                    display: flex;
                    align-items: center;
                    text-align: center;
                    margin-top: 20px;
                    margin-bottom: 20px;
                }

                .other-font2 {
                    font-family: Cambria, Georgia, serif;
                    text-align: center;
                    color: #000;
                }

                .other-font3 {
                    font-family: Cambria, Georgia, serif;
                    font-size: 20px;
                    text-align: center;
                    color: #000;
                    padding-bottom: 50px;
                }

                .other-font4 {
                    font-family: Cambria, Georgia, serif;
                    font-weight: bold;
                    font-size: 20px;
                    text-align: center;
                    color: #000;
                    padding-bottom: 0px;
                }

                .other-font5 {
                    font-family: Cambria, Georgia, serif;
                    text-decoration: underline dotted;
                    font-size: 20px;
                    text-align: center;
                    color: #000;
                    padding-bottom: 0px;
                    padding-left: 20px;
                }

                .other-font6 {
                    font-family: Cambria, Georgia, serif;
                    font-weight: bold;
                    font-size: 20px;
                    color: #000;
                    padding-bottom: 0px;
                }

                .other-font7 {
                    font-family: Cambria, Georgia, serif;
                    text-decoration: underline dotted;
                    font-size: 20px;
                    text-align: center;
                    color: #000;
                    padding-bottom: 0px;
                }

                .other-font8 {
                    font-family: Cambria, Georgia, serif;
                    font-weight: bold;
                    font-size: 20px;
                    color: #000;
                    padding-bottom: 0px;
                }

                .other-font9 {
                    height: 20px;
                    width: 20px;
                    padding-bottom: 0px;
                }

                .signRight img {
                    width: 70px;
                    margin-bottom: 10px;
                }

                .signRight {
                    float: right;
                    justify-content: left;
                }

                .signRight h3 {
                    font-family: Cambria, Georgia, serif;
                    font-weight: bold;
                    color: #000;
                    margin: 0px;
                    margin-bottom: 5px;
                    font-size: 16px;

                }


                .top-gray {
                    overflow: hidden;
                    position: absolute;
                    left: 0;
                    top: 120px;
                    width: 150px;
                    height: 70px;
                    background: linear-gradient(to right, #662d90, #74cbc811);
                    transform-origin: top left;
                    transform: skewY(-45deg);
                }

                .top-blue {
                    overflow: hidden;
                    position: absolute;
                    top: 150px;
                    left: 0;
                    width: 150px;
                    height: 70px;
                    background: linear-gradient(to right, #dbbf40, #74cbc811);
                    transform-origin: top left;
                    transform: skewY(-45deg);
                }

                .top-blue1 {
                    overflow: hidden;
                    position: absolute;
                    top: 170px;
                    left: 0;
                    width: 150px;
                    height: 70px;
                    background: linear-gradient(to right, #dbbf40, #74cbc811);
                    transform-origin: top left;
                    transform: skewY(-45deg);
                }

                #top-overlay {
                    overflow: hidden;
                    width: 900px;
                    position: absolute;
                    transform-origin: 50% 250px;
                    transform: translate(-50%, 0) rotate(-45deg);
                }
            </style>

            <script type="text/javascript">
                function lprint(el) {
                    var getFullContent = document.body.innerHTML;
                    var lprint = document.getElementById(el).innerHTML;
                    document.body.innerHTML = lprint;
                    window.print();
                    document.body.innerHTML = getFullContent;
                }
            </script>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="row mt-sm-4">
                            <div class="col-12 col-md-12 col-lg-12">
                                <!-- <div class="toolbar"> -->
                                <!-- <button class="btn" onclick="window.print('certificate')">Print Certificate</button> -->
                                <button onclick="lprint('ud')" class="btn btn-warning"><b>Print Certificate</b></button>


                                <!-- algorithm for marking -->
                                <br><br><br>
                                <?php
                                // echo $course_id;
                                $query = "SELECT * FROM video WHERE course_id=$course_id";
                                $result = mysqli_query($conn, $query);

                                while ($ret = mysqli_fetch_array($result)) {
                                    $video_ids = $ret['id'];

                                    $queryzzz = "SELECT * FROM questions WHERE video_id=$video_ids";
                                    $resultzzz = mysqli_query($conn, $queryzzz);

                                    while ($retzzz = mysqli_fetch_array($resultzzz)) {
                                        $question_namezzz = $retzzz['name'];
                                        $question_id = $retzzz['id'];

                                        // the counting
                                        // $query = "select count(id) from algorithm where user_id='$operator_id'";
                                        // $userid = mysqli_query($conn, $query);
                                        // if ($userid) {
                                        //     while ($row = mysqli_fetch_assoc($userid)) {
                                        //     }

                                        //     $query2 = "select count(id) from algorithm where user_id='$operator_id'";
                                        //     $job = mysqli_query($conn, $query2);

                                        //     if ($job) {
                                        //         $row2 = mysqli_fetch_array($job);

                                        //         if ($row2) {
                                        //             echo number_format($row2[0]);
                                        //         } else {
                                        //             echo "No User";
                                        //         }
                                        //     } else {
                                        //         echo "Query failed";
                                        //     }
                                        // }
                                ?>
                                        <br><?php
                                        }
                                    }
                                            ?>


                                <!-- <button class="btn" id="downloadPDF">Download PDF</button> -->
                                <!-- </div> -->

                                <div class="card" id="ud" style="border: solid 1px #007FA3; background-color: #f7f7f7; padding-left: 40px; padding-right: 40px;">
                                    <!-- <div class="container" id="ud"></div> -->
                                    <div class="top-gray"></div>
                                    <div class="top-blue"></div>
                                    <div class="top-gray"></div>
                                    <div class="top-blue1"></div>
                                    <div class="card-body">
                                        <div id="top" style="display: flex; justify-content: space-between; align-items: center;">
                                            <div></div>
                                            <img src="logo.jpg" alt="Logo" class="logo-image">
                                            <img src="tag.png" alt="Logo" class="tag-image">
                                        </div>
                                        <div id="top" style="display: flex; justify-content: space-between; align-items: center;">
                                            <div></div>
                                            <img src="line.png" alt="lines" class="line-image">
                                            <div></div>
                                        </div>
                                        <h1 class="other-font">CERTIFICATE</h1>
                                        <div class="line-container">
                                            <div class="line"></div>
                                            <h2 class="other-font2">OF COMPLETION</h2>
                                            <div class="line"></div>
                                        </div>
                                        <h3 class="other-font3">PROUDLY PRESENTED TO</h3>
                                        <h2 class="other-font3"><?php echo $first_name . " " . $last_name ?></h2>
                                        <p class="other-font4">Congratulations on your completion of<span class="other-font5"><?php echo $course_name; ?></span></p>
                                        <p class="other-font4">By completing this course you have improved your DEVELOPMENT SKILLS</p>
                                        <p class="other-font4">And your ability to make use of Business Model Canvas innovation tool to approach business <br> challenge or opportunity</p>
                                        <p class="other-font6">COMPLETED ON: <span class="other-font7"> <?php echo $current_date; ?></span></p>
                                        <p class="other-font8">IMPLEMENTERS: <span class="other-font9"><img src="her.png" alt="her.png"></span></p>
                                        <p class="other-font8">SUPPORTED BY: <span class="other-font9"><img src="women.png" alt="women.png"></span></p>
                                        <div class="signRight">
                                            <img src="sign.png" alt="sign.png">
                                            <div class="line"></div>
                                            <h3>LYDIA CHARLES MOYO</h3>
                                            <h3>EXECUTIVE DIRECTOR</h3>
                                            <h3>HER INITIATIVE</h3>
                                        </div>
                                        <div class="curve-line-bottom"></div>
                                    </div>


                                    <!-- End of Certificate Sample -->

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
