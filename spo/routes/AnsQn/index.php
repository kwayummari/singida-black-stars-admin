<?php
include('../../../includes/head.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM video WHERE id=$id";
    $result = mysqli_query($conn, $query);

    while ($ret = mysqli_fetch_array($result)) {
        $name = $ret['name'];
        $video_id = $ret['id'];
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

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form method="post" class="needs-validation" novalidate="" enctype="multipart/form-data">
                                            <div class="card-header">
                                                <h4>Jibu Maswali</h4>
                                                <h6 style="margin-left: 12cm; color: green;"><?php include('../../api/AnsQn/index.php') ?></h6>
                                            </div>
                                            <br>
                                            <div class="row">

                                                <?php
                                                $re = "SELECT * FROM questions where video_id='$video_id';";
                                                $sell = mysqli_query($conn, $re);
                                                while ($row = mysqli_fetch_array($sell)) {
                                                    $name = $row['name'];
                                                    $qn_id = $row['id'];
                                                ?>

                                                    <input type="hidden" name="qn_id[]" value="<?php echo $qn_id; ?>">
                                                    <div class="form-group col-md-6">
                                                        <label>Chagua Jibu La <tag style="color: #8226C9;"> <?php echo $name . " ?"; ?> </tag> </label>
                                                        <select name="ans_id[]" required="" class="form-control select2" required="">
                                                            <option value="">---</option>
                                                            <?php
                                                            $select_test = "SELECT * FROM answers where qn_id='$qn_id';";
                                                            $sell_test = mysqli_query($conn, $select_test);
                                                            while ($row_test = mysqli_fetch_array($sell_test)) {
                                                                $id_test = $row_test['id'];
                                                                $name_test = $row_test['name'];
                                                            ?>
                                                                <option value="<?php echo $id_test ?>"><?php echo $name_test ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Lazima Kuchagua Jibu
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="user_id[]" readonly value="<?php echo $operator_id; ?>">
                                                <?php
                                                }
                                                ?>


                                            </div>
                                            <div class="card-footer text-right">
                                                <button name="signup" class="btn btn-primary">Wasilisha</button>
                                            </div>

                                        </form>
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
