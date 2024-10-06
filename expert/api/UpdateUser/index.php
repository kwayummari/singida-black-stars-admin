<?php

if (isset($_POST['signup'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];

    // $password = 'pandadigital';
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    $query = "UPDATE users SET email='$email',phone='$phone',pass='$hashedPassword' WHERE id ='$id' ";

    $kaka = mysqli_query($conn, $query);

    if ($kaka) {
        echo "Wasifu Wako Umehaririwa";
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
                        document.location.href = '../Profile/';

                        function myFunction() {
                            location.replace("../Profile/")
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
        echo "Haiwezi Kuhariri Wasifu";
    }
}
