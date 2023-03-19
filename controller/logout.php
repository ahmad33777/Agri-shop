<?php
if (isset($_POST['logout'])) {
    session_destroy();
    session_unset();
    header("Location: ../view/login_buyer.php");
}