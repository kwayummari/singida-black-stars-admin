<?php

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $maelezo = $_POST['maelezo'];
    $date_created = $_POST['date_created'];
    $current_date = $_POST['current_date'];

    // convert date to words (month)
    // $dateStr = "04-09-1999";

    // Create a DateTime object from the string
    $date = new DateTime($current_date);

    // Define an array of words for months
    $months = [
        1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June',
        7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
    ];

    // Get the day, month, and year as integers
    $day = $date->format('d');
    $month = $date->format('n');
    $year = $date->format('Y');

    // Convert the date to words
    $dateInWords = $months[$month] . ' ' . $day . ', ' . $year;

    // Output the date in words
    $monthInWords = $months[$month];

    $name = ucwords($name);
    $maelezo = ucwords($maelezo);

    $file = $_FILES["photo"]["name"];
    $path = $_FILES['photo']['tmp_name'];
    $folder = "../../../uploads/Fursa/";
    $video = str_replace(" ", "-", $file);

    $adduser = "INSERT INTO fursa (description,date,month,name,image) VALUES('$maelezo','$date_created','$monthInWords','$name','$video');";
    $query = mysqli_query($conn, $adduser);

    if ($query) {
        move_uploaded_file($path, $folder . $video);
        echo "Fursa Imeongezwa Kikamilifu";
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
                        document.location.href = '../AddFursa/';

                        function myFunction() {
                            location.replace("../AddFursa/")
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
