<?php
include('../../../includes/head.php');
// if ($pass == "pandadigital") {
//   // echo "Change Password";
//   header('location: ../Profile/#settings');
//   // exit();
// } else {
//   echo "OK";
// }
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

          <div class="row ">

            <!-- Maswali -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../ViewQn/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Maswali</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from expertqn where expert_id='$operator_id' AND status='0'";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from expertqn where expert_id='$operator_id' AND status='0'";
                                $job = mysqli_query($conn, $query2);

                                if ($job) {
                                  $row2 = mysqli_fetch_array($job);

                                  if ($row2) {
                                    echo number_format($row2[0]);
                                  } else {
                                    echo "No User";
                                  }
                                } else {
                                  echo "Query failed";
                                }
                              }
                              ?>
                            </h2>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Users-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Waliojibiwa -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../Answered/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Waliojibiwa</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from chat";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from chat";
                                $job = mysqli_query($conn, $query2);

                                if ($job) {
                                  $row2 = mysqli_fetch_array($job);

                                  if ($row2) {
                                    echo number_format($row2[0]);
                                  } else {
                                    echo "No User";
                                  }
                                } else {
                                  echo "Query failed";
                                }
                              }
                              ?>
                            </h2>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Users-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          </div>

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
