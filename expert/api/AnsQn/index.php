<?php

if (isset($_POST['signup'])) {
    $qnid = $_POST['qnid'];
    $qnphone = $_POST['qnphone'];
    $answer = $_POST['answer'];
    $qn = $_POST['qn'];
    $user_id = $_POST['user_id'];

    $answer = ucwords($answer);

    $user_id_check = mysqli_query($conn, "SELECT * FROM chat WHERE user_id='$user_id'");

    if (mysqli_num_rows($user_id_check)) {
    } else {
        $adduserchat = "INSERT INTO chat (user_id) VALUES('$user_id');";
        $querychat = mysqli_query($conn, $adduserchat);
        if ($querychat);
    }

    $query = "UPDATE expertqn SET answer='$answer',status='1' WHERE id ='$id' ";

    $kaka = mysqli_query($conn, $query);

    if ($kaka) {
        // The Sending SMS Concept
        $api_key = '238b4b0ac1f3fbe1';
        $secret_key = 'NTdjOWFlZTdlNDRhMDk5OWU4ZTU3NzFiYjU2YzMxNGM0MzE0YjViOThkMzM4MTVkOTJlMmQ3NjMwNzk3ZTdmMw==';

        $postData = array(
            'source_addr' => 'PANDA',
            'encoding' => 0,
            'schedule_time' => '',
            'message' => 'Swali: ' . $qn . ' ?' . PHP_EOL  . 'Jibu: ' . $answer,
            'recipients' => [array('recipient_id' => '1', 'dest_addr' => '255' . $qnphone)]
        );

        $Url = 'https://apisms.beem.africa/v1/send';

        $ch = curl_init($Url);
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 2);
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Authorization:Basic ' . base64_encode("$api_key:$secret_key"),
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($postData)
        ));

        $response = curl_exec($ch);
        echo "Swali Limejibiwa Kikamilifu";
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
                        document.location.href = '../ViewQn/';

                        function myFunction() {
                            location.replace("../ViewQn/")
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
