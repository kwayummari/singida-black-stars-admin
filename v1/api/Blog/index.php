<?php

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $maelezo = $_POST['maelezo'];
    $date_created = $_POST['date_created'];

    $name = ucwords($name);
    $maelezo = ucwords($maelezo);

    $file = $_FILES["photo"]["name"];
    $path = $_FILES['photo']['tmp_name'];
    $folder = "../../../uploads/Blog/";
    $video = str_replace(" ", "-", $file);

    $adduser = "INSERT INTO blog (name,maelezo,photo,date_created) VALUES('$name','$maelezo','$video','$date_created');";
    $query = mysqli_query($conn, $adduser);

    if ($query) {
        move_uploaded_file($path, $folder . $video);
        echo "Chapisho Limewekwa Kikamilifu";
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

                    display.textContent = "Redirecting in ... " + seconds + "Secs";

                    if (--timer < 0) {
                        timer = duration;
                        document.location.href = '../Blog/';

                        function myFunction() {
                            location.replace("../Blog/")
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
        echo "Failed";
    }
}
