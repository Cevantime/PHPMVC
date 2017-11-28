<?php

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = 'Anonyme';
}

include 'View/home_view.php';
