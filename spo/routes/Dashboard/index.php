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

            <!-- Kozi Zote -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../ViewCourses/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15"> Kozi Zote</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from course";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from course";
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
                            <img class="urefucard" src="../../../includes/assets/img/banner/Courses-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Kozi Zangu -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../MyCourses/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15"> Kozi Zangu</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from enrolled where user_id='$operator_id'";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from enrolled where user_id='$operator_id'";
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
                            <img class="urefucard" src="../../../includes/assets/img/banner/Courses-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Majibu Yangu -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../MyAns/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15"> Majibu Yangu</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from algorithm where user_id='$operator_id'";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from algorithm where user_id='$operator_id'";
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
                            <img class="urefucard" src="../../../includes/assets/img/banner/Courses-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Vyeti Yangu -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../Certificate/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15"> Vyeti Yangu</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from enrolled where user_id='$operator_id'";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from enrolled where user_id='$operator_id'";
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
                            <img class="urefucard" src="../../../includes/assets/img/banner/Courses-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Tangaza Biashara -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../Business/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Tangaza Biashara</h5>
                            <h2 class="mb-3 font-18">
                              <i class="fa fa-plus"></i>
                            </h2>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Courses-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Ona Biashara -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../ViewBusiness/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Ona Biashara</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from business where user_id='$operator_id'";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from business where user_id='$operator_id'";
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
                            <img class="urefucard" src="../../../includes/assets/img/banner/Courses-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Uliza Maswali -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../AskQn/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Uliza Maswali</h5>
                            <h2 class="mb-3 font-18">
                              <i class="fa fa-plus"></i>
                            </h2>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Add Question Icon-01-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Ona Meseji -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../Thread/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Ona Meseji</h5>
                            <h2 class="mb-3 font-18">
                              <i class="fa fa-eye"></i>
                            </h2>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Add Question Icon-01-01.png" alt="">
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
