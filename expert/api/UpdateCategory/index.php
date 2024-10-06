<?php

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];

    $query = "UPDATE category SET name='$name' WHERE id ='$id' ";

    $kaka = mysqli_query($conn, $query);

    if ($kaka) {
        echo "Kategoria Imehaririwa Kikamilifu";
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
                        document.location.href = './<?php echo "?id=" . $id ?>';

                        function myFunction() {
                            location.replace("./<?php echo "?id=" . $id ?>")
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
        echo "Imefeli Kuhariri Kategoria";
    }
}
