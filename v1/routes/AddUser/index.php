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

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form method="post" class="needs-validation" novalidate="">
                                            <div class="card-header">
                                                <h4>Sajili Mtumiaji Mpya</h4>
                                                <h6 style="margin-left: 12cm; color: green;"><?php include('../../api/AddUser/index.php') ?></h6>
                                            </div>
                                            <br>
                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <label>Jina la kwanza</label>
                                                    <input name="first_name" type="text" class="form-control" required="">
                                                    <div class="invalid-feedback">
                                                        Jina la kwanza nilazima
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Jina la mwisho</label>
                                                    <input name="last_name" type="text" class="form-control" required="">
                                                    <div class="invalid-feedback">
                                                        Jina la mwisho nilazima
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Jina la kutumia</label>
                                                    <input name="username" type="text" class="form-control" required="">
                                                    <div class="invalid-feedback">
                                                        Jina la kutumia nilazima
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Barua pepe</label>
                                                    <input name="email" type="text" class="form-control" required="">
                                                    <div class="invalid-feedback">
                                                        Barua pepe nilazima
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Namba ya simu</label>
                                                    <input name="phone" maxlength="9" type="text" class="form-control" required="">
                                                    <div class="invalid-feedback">
                                                        Namba ya simu nilazima
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Mkoa</label>
                                                    <input name="region" type="text" class="form-control" required="">
                                                    <div class="invalid-feedback">
                                                        Mkoa nilazima
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Biashara</label>
                                                    <input name="business" type="text" class="form-control" required="">
                                                    <div class="invalid-feedback">
                                                        Biashara nilazima
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Chagua Jinsia</label>
                                                    <select required="" name="gender" class="form-control select2" id="">
                                                        <option value="">---</option>
                                                        <option value="mwanaume">Mwanaume</option>
                                                        <option value="mwanamke">Mwanamke</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Jinsia nilazima
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <tag>
                                                        <label>Tarehe ya kuzaliwa</label>
                                                        <input name="date_of_birth" type="date" class="form-control" required="">
                                                        <div class="invalid-feedback">
                                                            Tarehe ya kuzaliwa nilazima
                                                        </div>
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
