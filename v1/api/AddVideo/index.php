<?php
if (isset($_POST['signup'])) {
    $course_id = $_POST['course_id'];
    $video = $_POST['video'];
    $description = $_POST['description'];

    // capitalization
    $description = ucwords($description);

    // If exist data queries
    $videocheck = mysqli_query($conn, "SELECT * FROM video WHERE name='$video'");

    if (mysqli_num_rows($videocheck)) {
        echo "Video Yenye Usimbo Huu Ishatumika. Tafadhali Jaribu Msimbo Mwingine";
    } else {

        $adduser = "INSERT INTO video (name,course_id,description) VALUES('$video','$course_id','$description');";

        $query = mysqli_query($conn, $adduser);

        if ($query) {
            echo "Video Imepakiwa kikamilifu";
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
            echo "Imefeli Kupakia Video";
        }
    }
}
?>
