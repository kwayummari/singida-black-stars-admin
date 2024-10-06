<?php
include('../../../includes/head.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // $query = "SELECT * FROM chat WHERE id=$id";
    // $result = mysqli_query($conn, $query);

    // while ($ret = mysqli_fetch_array($result)) {
    //     $user_id = $ret['user_id'];
    // }

    // Get Chat Name
    $queryuser = "SELECT * FROM users WHERE id=$id";
    $resultuser = mysqli_query($conn, $queryuser);

    while ($retuser = mysqli_fetch_array($resultuser)) {
        echo $first_name_user = $retuser['first_name'];
        echo $last_name_user = $retuser['last_name'];
        $allname  = $first_name_user . " " . $last_name_user;
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
                                    <div class="card-header">
                                        <h4>Mtiririko wa mawasiliano</h4>
                                    </div>

                                    <head>
                                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
                                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
                                        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
                                        <link rel="stylesheet" href="./thread.css">
                                    </head>

                                    <div class="page-content page-container" id="page-content">
                                        <div class="padding">
                                            <div class="row container d-flex justify-content-center">
                                                <div class="col-md-6">
                                                    <div class="card card-bordered">
                                                        <div class="card-header">
                                                            <button class="btn btn-xs btn-warning">Jukwaa La Panda</button>
                                                            <hr>
                                                            <hr>
                                                            <button style="margin-left: 3cm;" class="btn btn-xs btn-warning"><?php echo $allname ?></button>
                                                        </div>

                                                        <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:400px !important;">

                                                            <?php

                                                            $user_id_check = mysqli_query($conn, "SELECT * FROM expertqn WHERE expert_id='$id' AND status='1'");

                                                            if (mysqli_num_rows($user_id_check)) {


                                                                $re = "SELECT * FROM expertqn where expert_id='$id' AND status='1';";
                                                                $sell = mysqli_query($conn, $re);

                                                                while ($ret = mysqli_fetch_array($sell)) {
                                                                    $qn = $ret['qn'];
                                                                    $answer = $ret['answer'];
                                                                    $user_idx = $ret['user_id'];
                                                                    $expert_idx = $ret['expert_id'];
                                                            ?>

                                                                    <?php
                                                                    if ($operator_id == $user_idx && $expert_idx == $id) { ?>
                                                                        <div class="media media-chat media-chat-reverse">
                                                                            <img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                                                                            <div class="media-body ">
                                                                                <p><?php echo $qn; ?></p>
                                                                                <!-- <p class="meta"><time datetime="2018">23:58</time></p> -->
                                                                            </div>
                                                                        </div>
                                                                    <?php
                                                                    }

                                                                    // Answer Side
                                                                    if ($operator_id == $user_idx && $expert_idx == $id) { ?>
                                                                        <div class="media media-chat">
                                                                            <img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                                                                            <div class="media-body">
                                                                                <p><?php echo $answer; ?></p>
                                                                                <!-- <p class="meta"><time datetime="2018">00:06</time></p> -->
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                    }
                                                                }
                                                            } else { ?>
                                                                <style>
                                                                    .center {
                                                                        display: block;
                                                                        margin-left: auto;
                                                                        margin-right: auto;
                                                                        width: 50%;
                                                                        margin-top: 3cm;
                                                                    }
                                                                </style>
                                                                <img class="center" src="../../../includes/assets/img/banner/no_message.png" alt="">
                                                            <?php
                                                            }
                                                            ?>

                                                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                                                <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                                            </div>
                                                            <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">
                                                                <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div>
                                                            </div>
                                                        </div>

                                                        <div class="publisher bt-1 border-light">
                                                            <img class="avatar avatar-xs" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                                                            <form method="post">
                                                                <?php
                                                                //  include('chat.php');
                                                                ?>
                                                                <input name="name" readonly disabled class="publisher-input" required type="text" placeholder="Write something">
                                                                <input type="hidden" name="value" class="publisher-input" value="<?php echo $amal ?>" required type="text" placeholder="Write something">
                                                                <input type="hidden" name="msg_to" value="<?php echo $username; ?>">
                                                                <button disabled class="btn btn-primary btn-sm" style="margin-left: 5cm;" name="submit">
                                                                    <i data-abc="true" class="fa fa-paper-plane"></i>
                                                                </button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- JavaScript Bundle with Popper -->
                                    <!-- jQuery library -->
                                    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
                                    <!-- Latest compiled JavaScript -->
                                    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</script>
<script src="js.js"></script> -->
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
