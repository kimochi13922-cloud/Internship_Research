<?php
// functions/common.php

// A simple function to safely output text
function escape_html($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>
