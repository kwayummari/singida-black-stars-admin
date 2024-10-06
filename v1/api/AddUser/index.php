<?php
if (isset($_POST['signup'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $region = $_POST['region'];
    $business = $_POST['business'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['date_of_birth'];

    $password = 'pandadigital';
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $adduser = "INSERT INTO users (first_name,last_name,username,email,region,business,gender,date_of_birth,phone,pass) VALUES('$first_name','$last_name','$username','$email','$region','$business','$gender','$date_of_birth','$phone','$hashedPassword');";

    $query = mysqli_query($conn, $adduser);

    if ($query) {
        echo "Mtumiaji amesajiliwa kikamilifu";
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
        echo "Imefeli Kusajili Mtumiaji";
    }
}
?>
