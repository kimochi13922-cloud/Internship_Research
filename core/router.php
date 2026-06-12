<?php
// core/router.php

// Parse URL
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';
$url = filter_var($url, FILTER_SANITIZE_URL);

$route = $url;

if (empty($route)) {
    $route = 'user/index';
}

// Security: Prevent directory traversal
$view_path = realpath(ROOT_DIR . '/views/' . $route . '.php');
$views_dir = realpath(ROOT_DIR . '/views');

if ($view_path && strpos($view_path, $views_dir) === 0 && file_exists($view_path)) {
    // Valid route
    define('CURRENT_ROUTE', $route);
    require_once $view_path;
} else {
    // 404
    header("HTTP/1.0 404 Not Found");
    echo "<div style='text-align:center; padding: 50px; font-family: sans-serif;'>";
    echo "<h1>404 Not Found</h1>";
    echo "<p>The page you requested ('" . htmlspecialchars($route) . "') could not be found.</p>";
    echo "<a href='" . BASE_URL . "'>Go Home</a>";
    echo "</div>";
}
?>
