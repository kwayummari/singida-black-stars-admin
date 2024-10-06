<?php

if (isset($_POST['updatepassword'])) {
    $id = $_POST['id'];
    $pass = $_POST['pass'];

    // $password = 'pandadigital';
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    $query = "UPDATE users SET pass='$hashedPassword' WHERE id ='$id' ";

    $kaka = mysqli_query($conn, $query);

    if ($kaka) {
        echo "Imebadili Nywira";
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
                        document.location.href = '../Dashboard/';

                        function myFunction() {
                            location.replace("../Dashboard/")
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
        echo "Haiwezi Kubadili Nywira";
    }
}
