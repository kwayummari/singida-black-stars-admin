<?php
include('../../../includes/head.php');
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

            <!-- Sajili Mtumiaji Mpya -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../AddUser/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Sajili Mtumiaji Mpya</h5>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Add user-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Watumiaji Wote -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../AllUsers/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Watumiaji Wote</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from users";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from users";
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

            <!-- Utawala -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../UserAdmin/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Utawala</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from users where role='admin'";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from users where role='admin'";
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

            <!-- Wanafunzi -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../Students/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Wanafunzi</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from users where role='user'";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from users where role='user'";
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
                            <img class="urefucard" src="../../../includes/assets/img/banner/Students-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Wataalamu -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../Expert/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Wataalamu</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from users where role='expert'";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from users where role='expert'";
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

            <!-- Sajili Kozi Mpya -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../AddCourse/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Sajili Kozi Mpya</h5>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Add Courses Icon-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Kozi Zote -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../ViewCourse/" style="text-decoration: none;">
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

            <!-- Ongeza Video Mpya -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../AddVideo/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Ongeza Video Mpya</h5>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Add Video Icon-01-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Video Zote -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../ViewVideo/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15"> Video Zote</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from video";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from video";
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
                            <img class="urefucard" src="../../../includes/assets/img/banner/Video Icon-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Ongeza Swali Jipya  -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../AddQn/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Ongeza Swali Jipya </h5>
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

            <!-- Ona Maswali -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../ViewQn/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15"> Ona Maswali</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from questions";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from questions";
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
                            <img class="urefucard" src="../../../includes/assets/img/banner/View Question Icon-01-01-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Ongeza Jibu -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../AddAns/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Ongeza Jibu</h5>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Add Answers Icon-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Ona Majibu -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../ViewAns/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15"> Ona Majibu</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from answers";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from answers";
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
                            <img class="urefucard" src="../../../includes/assets/img/banner/View Answers Icon-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Ongea Hub Maombi -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../OngeaHub/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15"> Ongea Hub Maombi</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from ongea_hub";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from ongea_hub";
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
                            <img class="urefucard" src="../../../includes/assets/img/banner/Advert Icon Panda-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!--Maombi Ya Biashara -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../Business/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Maombi Ya Biashara</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from business where status='pending'";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from business where status='pending'";
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
                            <img class="urefucard" src="../../../includes/assets/img/banner/Advert Icon Panda-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!--Andika Blogi -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../Blog/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Andika Blogi</h5>
                            <h2 class="mb-3 font-18">
                              <i class="fa fa-plus"></i>
                            </h2>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Advert Icon Panda-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!--Ona Blogi -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../ViewBlog/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Ona Blogi</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from blog";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from blog";
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
                            <img class="urefucard" src="../../../includes/assets/img/banner/Advert Icon Panda-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Andika Fursa -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../AddFursa/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Andika Fursa</h5>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Opportunity-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!--Ona Fursa -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../ViewFursa/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Ona Fursa</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from fursa";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from fursa";
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
                            <img class="urefucard" src="../../../includes/assets/img/banner/Opportunity-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Ongeza Wanufaika -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../AddWanufaika/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Ongeza Wanufaika</h5>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Beneficiary-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Ona Wanufaika -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../ViewWanufaika/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Ona Wanufaika</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $sql = "SELECT * from wanufaika";
                              if ($result = mysqli_query($conn, $sql)) {
                              $rowcount = mysqli_num_rows($result);
                              echo $rowcount;
                              }
                              ?>
                            </h2>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Beneficiary-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!--Ona Wateja -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../Subscribers/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Ona Wateja</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $sql = "SELECT * from subscribers";

                              if ($result = mysqli_query($conn, $sql)) {

                                // Return the number of rows in result set
                                echo $rowcount = mysqli_num_rows($result);
                              }
                              ?>
                            </h2>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Advert Icon Panda-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!--Andika Ujumbe -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../NewsLetter/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Andika Ujumbe</h5>
                            <h2 class="mb-3 font-18">
                              <i class="fa fa-plus"></i>
                            </h2>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Advert Icon Panda-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!--Ona Jumbe Zote -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../SeeNewsLetter/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Ona Jumbe Zote</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $sql = "SELECT * from newsletter";

                              if ($result = mysqli_query($conn, $sql)) {

                                // Return the number of rows in result set
                                echo $rowcount = mysqli_num_rows($result);
                              }
                              ?>
                            </h2>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Advert Icon Panda-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Shuguli Za Mfumo -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="../UserLogs/" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Shughuli Za Mfumo</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $query = "select count(id) from logs";
                              $userid = mysqli_query($conn, $query);
                              if ($userid) {
                                while ($row = mysqli_fetch_assoc($userid)) {
                                }

                                $query2 = "select count(id) from logs";
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
                            <img class="urefucard" src="../../../includes/assets/img/banner/Danger 2-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Salio la Meseji -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Salio la Meseji</h5>
                            <h2 class="mb-3 font-18">
                              <?php
                              $username = '238b4b0ac1f3fbe1';
                              $password = 'NTdjOWFlZTdlNDRhMDk5OWU4ZTU3NzFiYjU2YzMxNGM0MzE0YjViOThkMzM4MTVkOTJlMmQ3NjMwNzk3ZTdmMw==';

                              $Url = 'https://apisms.beem.africa/public/v1/vendors/balance';

                              $ch = curl_init($Url);
                              // error_reporting(E_ALL);
                              // ini_set('display_errors', 0);
                              curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                              curl_setopt_array($ch, array(
                                CURLOPT_HTTPGET => TRUE,
                                CURLOPT_RETURNTRANSFER => TRUE,
                                CURLOPT_HTTPHEADER => array(
                                  'Authorization:Basic ' . base64_encode("$username:$password"),
                                  'Content-Type: application/json'
                                ),
                              ));
                              // Send the request
                              echo $response = curl_exec($ch);

                              if ($response)

                                // if ($response === FALSE) {
                                //   // echo $response;

                                //   die(curl_error($ch));
                                // }
                                // echo $response;
                                // var_dump($response);
                              ?>
                            </h2>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Danger 2-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Walengwa -->
            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <a href="" style="text-decoration: none;">
                <div class="card juu">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Walengwa</h5>
                            <h2 class="mb-3 font-18">89</h2>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img class="urefucard" src="../../../includes/assets/img/banner/Beneficiary-01.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div> -->





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
