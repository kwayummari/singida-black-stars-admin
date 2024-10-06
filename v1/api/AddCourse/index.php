<?php
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $video = $_POST['video'];
    $description = $_POST['description'];

    // For capitalization
    $name = ucwords($name);
    $description = ucwords($description);

    // This's for the photo
    $filep = $_FILES["photo"]["name"];
    $pathp = $_FILES['photo']['tmp_name'];
    $folderp = "../../../uploads/IntroPhoto/";
    $videop = str_replace(" ", "-", $filep);

    // If exist data queries
    $videocheck = mysqli_query($conn, "SELECT * FROM course WHERE video='$video'");
    $namecheck = mysqli_query($conn, "SELECT * FROM course WHERE name='$name'");

    if (mysqli_num_rows($videocheck)) {
        echo "Video Yenye Usimbo Huu Ishatumika. Tafadhali Jaribu Msimbo Mwingine";
    } else if (mysqli_num_rows($namecheck)) {
        echo "Jina Hili La Kozi Lishatumika. Tafadhali Jaribu Jina Lingine";
    } else {

        $adduser = "INSERT INTO course (name,description,video,photo) VALUES('$name','$description','$video','$videop');";

        $query = mysqli_query($conn, $adduser);

        if ($query) {
            move_uploaded_file($pathp, $folderp . $videop);
            echo "Kozi imesajiiwa kikamilifu";
?>

            <!-- For Redirection -->
            <p id="time"></p>
            <script>
                function startTimer(duration, display) {
                    var timer = duration,
                        seconds;
                    setInterval(function() {
                        seconds = parseInt(timer % 60, 10);

                        seconds = seconds < 10 ? "0" + seconds : seconds;

                        display.textContent = "Inaelekeza ndani ya sekunde ... " + seconds + "Secs";

                        if (--timer < 0) {
                            timer = duration;
                            document.location.href = './';

                            function myFunction() {
                                location.replace("./")
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
            echo "Imefeli Kusajili Kozi";
        }
    }
}
?>
