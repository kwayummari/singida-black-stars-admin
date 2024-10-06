<?php

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $name = ucwords($name);
    $title = ucwords($title);
    $description = ucwords($description);

    $file = $_FILES["photo"]["name"];
    $path = $_FILES['photo']['tmp_name'];
    $folder = "../../../uploads/Wanufaika/";
    $video = str_replace(" ", "-", $file);

    $adduser = "INSERT INTO wanufaika (name,title,description,photo) VALUES('$name','$title','$description','$video');";
    $query = mysqli_query($conn, $adduser);

    if ($query) {
        move_uploaded_file($path, $folder . $video);
        echo "Mnufaika Ameongezwa Kikamilifu";
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
                        document.location.href = '../AddWanufaika/';

                        function myFunction() {
                            location.replace("../AddWanufaika/")
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
