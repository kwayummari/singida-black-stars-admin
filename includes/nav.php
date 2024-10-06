<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li>
                <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                    <i data-feather="align-justify"></i>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a>
            </li>

        </ul>
    </div>

    <ul class="navbar-nav navbar-right">

        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="../../../uploads/ProfilePhotos/<?php echo $profile_photo ?>" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
                <div class="dropdown-title">Habari <?php echo $first_name . " " . $last_name; ?></div>
                <a href="../../routes/Profile/" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Wasifu
                </a>

                <div class="dropdown-divider"></div>
                <a href="../../api/Logout/" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                    Ondoka
                </a>
            </div>
        </li>
    </ul>
</nav>
