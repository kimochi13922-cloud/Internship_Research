<?php
// functions/auth.php

// Ensure session is started
if (session_id() == '') {
    session_start();
}

function is_logged_in() {
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}

function require_login() {
    if (!is_logged_in()) {
        header('Location: ' . BASE_URL . 'login');
        exit;
    }
}
