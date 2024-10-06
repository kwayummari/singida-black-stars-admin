<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../../../vendor/autoload.php';

$mail = new PHPMailer(true);

if (isset($_POST['signup'])) {
    $name = $_POST['name'];

    $name = ucwords($name);

    $user_id_check = mysqli_query($conn, "SELECT * FROM subscribers WHERE status='1'");

    if (mysqli_num_rows($user_id_check)) {

        $queryqn = "SELECT * FROM subscribers where status='1'";
        $resultqn = mysqli_query($conn, $queryqn);

        while ($retqn = mysqli_fetch_array($resultqn)) {
            $email_sub = $retqn['email'];


            try {
                // The SMTPDebug status zero (0) means debug informations won't show up. If two(2) then debugging informations shows up
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host     = 'smtp.titan.email;';
                $mail->SMTPAuth = true;
                $mail->Username = 'info@pandadigital.co.tz';
                $mail->Password = 'PandaDigital.2020';
                $mail->SMTPSecure = 'tls';
                $mail->Port     = 587;

                $mail->setFrom('info@pandadigital.co.tz', 'Panda Digital');
                $mail->addAddress($email_sub, 'Mtumiaji ');
                // $mail->addAddress('jastonruggy@icloud.com');

                $mail->isHTML(true);
                $mail->Subject = 'Ndugu Mtumiaji';
                $mail->Body = $name;
                // $mail->AltBody = 'This Is A Good Practice';
                $mail->send();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }

        $adduser = "INSERT INTO newsletter (name) VALUES('$name');";

        $query = mysqli_query($conn, $adduser);
        if ($query) {
            echo "Ujumbe Umetumwa Kikamilifu";
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
                            document.location.href = '../NewsLetter/';

                            function myFunction() {
                                location.replace("../NewsLetter/")
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
        }
    } else {
        echo "Hakuna Mteja";
    }
}
