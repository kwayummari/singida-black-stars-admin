<?php
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $maelezo = $_POST['maelezo'];
    $user_id = $_POST['user_id'];

    // Capitalization
    $name = ucwords($name);
    $location = ucwords($location);
    $maelezo = ucwords($maelezo);

    if (str_word_count($maelezo) > 150) {
        echo "Andika Maelezo Mafupi";
    } else {

        // Counts number of images to be uploaded
        $num_of_imgs = count($_FILES['photo']['name']);

        $user_id_check = mysqli_query($conn, "SELECT * FROM business WHERE user_id='$user_id'");

        if (mysqli_num_rows($user_id_check)) {
            echo "Hauwezi Kusajili Biashara Yako Mara Mbili";
        } else {

            if ($num_of_imgs > 3) {
                echo "Weka Picha Tatu Tuu";
            } else {

                $adduser = "INSERT INTO business (name,location,maelezo,user_id) VALUES('$name','$location','$maelezo','$user_id');";

                $query = mysqli_query($conn, $adduser);

                foreach ($_FILES['photo']['name'] as $key => $val) {

                    move_uploaded_file($_FILES['photo']['tmp_name'][$key], '../../../uploads/Business/' . $val);

                    $adduserx = "INSERT INTO business_photo (photo,user_id) VALUES('$val','$user_id');";

                    $queryx = mysqli_query($conn, $adduserx);
                }


                if ($query && $queryx) {
                    echo "Ombi Lako La Biashara Limetumwa Kikamilifu";
?>
                    <p id="time"></p>
                    <script>
                        function startTimer(duration, display) {
                            var timer = duration,
                                seconds;
                            setInterval(function() {
                                seconds = parseInt(timer % 60, 10);

                                seconds = seconds < 10 ? "0" + seconds : seconds;

                                display.textContent = "Inaelekeza Ndani Ya Sekunde ... " + seconds;

                                if (--timer < 0) {
                                    timer = duration;
                                    document.location.href = '../Business/';

                                    function myFunction() {
                                        location.replace("../Business/")
                                    }
                                }
                            }, 1000);
                        }

                        window.onload = function() {
                            var fiveMinutes = 1,
                                display = document.querySelector('#time');
                            startTimer(fiveMinutes, display);
                        };
                    </script>
<?php

                } else {
                    echo "Imefeli";
                }
            }
        }
    }
}

?>
