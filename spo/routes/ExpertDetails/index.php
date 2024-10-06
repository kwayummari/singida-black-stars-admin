<?php
include('../../../includes/head.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $query);

    while ($ret = mysqli_fetch_array($result)) {
        $phonew = $ret['phone'];
        $date_of_birth = $ret['date_of_birth'];
        $pass = $ret['pass'];
        $username = $ret['username'];
        $role = $ret['role'];
    }
}

if (isset($_GET['id'])) {
    $ids = $_GET['id'];
    $querys = "SELECT * FROM users WHERE id=$ids";
    $results = mysqli_query($conn, $querys);

    while ($rets = mysqli_fetch_array($results)) {
        $first_names = $rets['first_name'];
        $last_names = $rets['last_name'];
        $profile_photos = $rets['profile_photo'];
        $phones = $rets['phone'];
        $emails = $rets['email'];
        $bios = $rets['bio'];
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

            <div class="main-content">
                <section class="section">
                    <div class="section-body">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <section class="section-sm bg-gray">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 mb-4">
                                                        <img src="../../../uploads/ProfilePhotos/<?php echo $profile_photos; ?>" alt="Picha" class="img-fluid w-100">
                                                    </div>

                                                    <div class="col-12 mt-4">
                                                        <div class="border-bottom border-primary"></div>
                                                        <b>
                                                            <u>
                                                                <h2 style="font-size: medium;">Wasifu</h2>
                                                            </u>
                                                        </b>
                                                        <b><?php echo $bios; ?></b>
                                                    </div>

                                                    <div class="col-12 mb-5">
                                                        <br>
                                                        <h2><?php echo $first_names . " " . $last_names; ?> </h2>
                                                    </div>

                                                    <div class="col-12">
                                                        <h5 style="color: green;"><?php include('../../api/AskQn/index.php'); ?> </h5>
                                                        <form method="post" class="row">

                                                            <div class="col-sm-6">
                                                                <input type="text" value="<?php echo $first_name . " " . $last_name ?>" class="form-control mb-4" readonly disabled>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <input type="text" value="<?php echo "+255 " . $phones ?>" class="form-control mb-4" readonly disabled>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <textarea required="" name="qn" class="form-control mb-4" placeholder="Swali Lako" id="" cols="30" rows="10"></textarea>
                                                            </div>
                                                            <input type="hidden" value="<?php echo $phones; ?>" name="phone">
                                                            <input type="hidden" value="<?php echo $operator_id; ?>" name="user_id">
                                                            <input type="hidden" value="<?php echo $id; ?>" name="expert_id">
                                                            <div class="col-12">
                                                                <button name="signup" class="btn btn-primary">Tuma</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </section>

                                        <section class="section">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12"> <br>
                                                        <h2 class="section-title">Wataalamu Wengine</h2>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">

                                                    <?php
                                                    $queryqn = "SELECT * FROM users where role='expert' && id != '$id'";
                                                    $resultqn = mysqli_query($conn, $queryqn);

                                                    while ($retqn = mysqli_fetch_array($resultqn)) {
                                                        $first_namex = $retqn['first_name'];
                                                        $last_namex = $retqn['last_name'];
                                                        $phonex = $retqn['phone'];
                                                        $profile_photox = $retqn['profile_photo'];
                                                        $emailx = $retqn['email'];
                                                        $biox = $retqn['bio'];
                                                    ?>

                                                        <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                                                            <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                                                                <img class="card-img-top rounded-0" src="../../../uploads/ProfilePhotos/<?php echo $profile_photox; ?>" alt="Post thumb">
                                                                <div class="card-body">
                                                                    <ul class="list-inline mb-3">
                                                                    </ul>
                                                                    <a href="">
                                                                        <h4 class="card-title"><?php echo $first_namex . " " . $last_namex; ?></h4>
                                                                    </a>
                                                                    <p class="card-text">
                                                                        <?php
                                                                        if (strlen($biox) > 150) {
                                                                            echo $biox = substr($biox, 0, 150) . ' [...]';
                                                                        } else {
                                                                            echo $biox;
                                                                        }
                                                                        ?>
                                                                    </p>
                                                                    <a href="../ExpertDetails/?id=<?php echo $retqn['id']; ?>" class="btn btn-primary btn-sm">Soma Zaidi</a>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </section>
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
