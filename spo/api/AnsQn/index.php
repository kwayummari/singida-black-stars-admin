<?php
if (isset($_POST['signup'])) {
    $ans_id = $_POST['ans_id'];
    $qn_id = $_POST['qn_id'];
    $user_id = $_POST['user_id'];

    foreach ($ans_id as $index => $ans_ids) {
        $ans_id_x = $ans_ids;
        $qn_id_x = $qn_id[$index];
        $user_id_x = $user_id[$index];

        $queryqn = "SELECT * FROM questions WHERE id=$qn_id_x";
        $resultqn = mysqli_query($conn, $queryqn);

        while ($retqn = mysqli_fetch_array($resultqn)) {
            $video_idqn = $retqn['video_id'];
        }

        $queryvd = "SELECT * FROM video WHERE id=$video_idqn";
        $resultvd = mysqli_query($conn, $queryvd);

        while ($retvd = mysqli_fetch_array($resultvd)) {
            $course_idvd = $retvd['course_id'];
        }

        $queryen = "SELECT * FROM enrolled WHERE course_id=$course_idvd";
        $resulten = mysqli_query($conn, $queryen);

        while ($reten = mysqli_fetch_array($resulten)) {
            $course_iden = $reten['id'];
        }


        $qncheck = mysqli_query($conn, "SELECT * FROM algorithm WHERE qn_id='$qn_id_x' AND user_id='$user_id_x'");

        $adduser = "INSERT INTO algorithm (qn_id,ans_id,user_id) VALUES('$qn_id_x','$ans_id_x','$user_id_x');";

        if (mysqli_num_rows($qncheck)) {
        } else {
            $query = mysqli_query($conn, $adduser);
        }
    }

    if (mysqli_num_rows($qncheck)) {
        echo "Ushajibu Maswali Haya, Tafadhali Chagua Video Nyingine.";
    } else {
        if ($query) {
            echo "Majibu Yamekusanywa Kikamilifu !";
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

                        display.textContent = "Inaelekeza Ndani Ya Sekunde ... " + seconds + "Secs";

                        if (--timer < 0) {
                            timer = duration;
                            document.location.href = '../Learn/<?php echo "?id=" . $course_iden ?>';

                            function myFunction() {
                                location.replace("../Learn/<?php echo "?id=" . $course_iden ?>")
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
            echo "Haiwezi Kukusanya Majibu";
        }
    }
}

?>
