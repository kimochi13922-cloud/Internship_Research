<?php
session_start();

// Determine base URL dynamically
$base_dir = dirname(__FILE__);
define('ROOT_DIR', $base_dir);
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$script_name = $_SERVER['SCRIPT_NAME']; // e.g. /intern_research/index.php
$base_path = rtrim(dirname($script_name), '/\\'); // e.g. /intern_research
define('BASE_URL', $protocol . "://" . $host . $base_path . '/');

// Delegate to router
require_once ROOT_DIR . '/core/router.php';
