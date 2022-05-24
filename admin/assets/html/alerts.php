<?php
if (isset($_GET['alert'])) {
    $alert = $_GET['alert'];
    echo "<p class='alert'>$alert</p>";
}
if (isset($_GET['notify'])) {
    $notify = $_GET['notify'];
    echo "<p class='notify'>$notify</p>";
}
?>