<?php
$conn = mysqli_connect('localhost', 'root', '', 'eventhse');
if (mysqli_errno($conn)) {
    echo "Galat Sambungan Database";
}
