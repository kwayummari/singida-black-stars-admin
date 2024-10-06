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
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                      <img alt="image" src="../../../uploads/ProfilePhotos/<?php echo $profile_photo ?>" class="rounded-circle author-box-picture">
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#"><?php echo $first_name . " " . $last_name ?></a>
                      </div>
                      <div class="author-box-job"><?php echo $business ?></div>
                    </div>
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
                    <h4>Taarifa Binafsi</h4>
                  </div>
                  <div class="card-body">
                    <div class="py-4">
                      <p class="clearfix">
                        <span class="float-left">
                          Kuzaliwa
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $date_of_birth ?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Simu
                        </span>
                        <span class="float-right text-muted">
                          <a class="text-muted" style="text-decoration: none;" href="tel:+255<?php echo $phone ?>">+255 <?php echo $phone ?></a>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Barua Pepe
                        </span>
                        <span class="float-right text-muted">
                          <a class="text-muted" style="text-decoration: none;" href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                        </span>
                      </p>

                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h4>Tarehe Ya Kujiunga</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title"><?php echo $date_created ?></div>
                          <div class="media-title" style="color: #F4AC1A;"><?php echo "Mstari Wa Muda" ?></div>
                        </div>
                        <!-- Algorithm for bar progressing -->
                        <?php
                        $date_progress = date("H");
                        $total_progress = $date_progress * 2 + 54;
                        $total_progress;
                        ?>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-primary" data-toggle="tooltip" title="Mstari unajaa kutokana na muda wa siku" data-width="<?php echo $total_progress ?>%"></div>
                          </div>
                        </div>
                      </li>

                    </ul>
                  </div>
                </div>

              </div>
              <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab" aria-selected="true">Kuhusu</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Hariri Wasifu</a>
                      </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <div class="row">
                          <div class="col-md-3 col-6 b-r">
                            <strong>Jina Kamili</strong>
                            <br>
                            <p class="text-muted"><?php echo $first_name . " " . $last_name ?></p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Simu</strong>
                            <br>
                            <a class="text-muted" style="text-decoration: none;" href="tel:+255<?php echo $phone ?>">+255 <?php echo $phone ?></a>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Barua Pepe</strong>
                            <br>
                            <a class="text-muted" style="text-decoration: none;" href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                          </div>
                          <div class="col-md-3 col-6">
                            <strong>Sehemu</strong>
                            <br>
                            <p class="text-muted"><?php echo $region ?></p>
                          </div>
                        </div>

                      </div>
                      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                        <form method="post" class="needs-validation">
                          <div class="card-header">
                            <h4>Edit Profile</h4>
                            <h6 style="margin-left: 12cm; color: green;"><?php include('../../api/UpdateUser/index.php') ?></h6>
                          </div>
                          <div class="card-body">
                            <div class="row">

                              <div class="form-group col-md-6 col-12">
                                <label>Barua pepe</label>
                                <input name="email" required="" type="email" class="form-control" value="<?php echo $email ?>">
                                <div class="invalid-feedback">
                                  Barua pepe ni lazima
                                </div>
                              </div>

                              <div class="form-group col-md-6 col-12">
                                <label>Namba ya simu</label>
                                <input name="phone" required="" maxlength="9" type="text" class="form-control" value="<?php echo $phone ?>">
                                <div class="invalid-feedback">
                                  Namba ya simu ni lazima
                                </div>
                              </div>

                              <div class="form-group col-md-6 col-12">
                                <label>Nywira</label>
                                <input name="pass" required="" type="password" class="form-control">
                                <div class="invalid-feedback">
                                  Nywira ni lazima
                                </div>
                              </div>

                              <input name="id" type="hidden" value="<?php echo $operator_id ?>">
                            </div>

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
