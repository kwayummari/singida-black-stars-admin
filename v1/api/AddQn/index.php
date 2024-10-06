<?php
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $video_id = $_POST['video_id'];

    // capitalization
    $name = ucwords($name);

    $adduser = "INSERT INTO questions (name,video_id) VALUES('$name','$video_id');";

    $query = mysqli_query($conn, $adduser);

    if ($query) {
        echo "Swali Limeongezwa kikamilifu";
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
        echo "Imefeli Kuongeza Swali";
    }
}
?>
