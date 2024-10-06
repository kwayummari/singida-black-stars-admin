<?php
include('../../../includes/head.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $query);

    while ($ret = mysqli_fetch_array($result)) {
        $full_name = $ret['full_name'];
        $address = $ret['address'];
        $phone = $ret['phone'];
        $date_of_birth = $ret['date_of_birth'];
        $pass = $ret['pass'];
        $username = $ret['username'];
        $role = $ret['role'];
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

                                        <section class="section-sm">

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="d-flex align-items-center section-title justify-content-between">
                                                            <h2 class="mb-0 text-nowrap mr-3">Wataalamu wetu</h2>
                                                            <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row justify-content-center">

                                                    <?php

                                                    $queryqn = "SELECT * FROM users where role='expert'";
                                                    $resultqn = mysqli_query($conn, $queryqn);

                                                    while ($retqn = mysqli_fetch_array($resultqn)) {
                                                        $first_name = $retqn['first_name'];
                                                        $last_name = $retqn['last_name'];
                                                        $profile_photo = $retqn['profile_photo'];
                                                        $status = $retqn['status'];
                                                    ?>
                                                        <div class="col-lg-4 col-sm-6 mb-5">
                                                            <style>
                                                                .free {
                                                                    position: absolute;
                                                                    top: 0cm;
                                                                    left: 280px;
                                                                }

                                                                .nolink {
                                                                    text-decoration: none;
                                                                }
                                                            </style>
                                                            <div class="card p-0 border-primary rounded-0 hover-shadow">
                                                                <img class="card-img-top rounded-0" src="../../../uploads/ProfilePhotos/<?php echo $profile_photo; ?>" alt="<?php echo "Photo Of " . $first_name . " " . $last_name ?>">
                                                                <?php
                                                                if ($status == "free") { ?>

                                                                    <img class="free" src="../../../../images/icon/free.png" style="width: 1.6cm;" alt="Chapa Ya Bure">
                                                                <?php

                                                                } else {
                                                                ?>
                                                                    <img class="free" src="../../../../images/icon/premium.png" style="width: 1.6cm;" alt="Chapa Ya Kulipia">
                                                                <?php
                                                                }
                                                                ?>
                                                                <div class="card-body">
                                                                    <a style="text-decoration: none;" href="../ExpertDetails/?id=<?php echo $retqn['id']; ?>">
                                                                        <h4 class="card-title"><?php echo $first_name . " " . $last_name; ?></h4>
                                                                        <button class="btn btn-sm btn-warning">Ongea na <?php echo $first_name . " " . $last_name ?></button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    }

                                                    ?>

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
