<?php
class middleware
{
    function checkLogin()
    {
        $baseUrl = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $route = $baseUrl && strpos($path, $baseUrl) === 0 ? substr($path, strlen($baseUrl)) : $path;
        $route = '/' . trim($route, '/');
        $publicPage = ['/home/login', '/auth/login'];

        if (!isset($_SESSION['username']) && !in_array($route, $publicPage)) {
            header('Location: ' . $baseUrl . '/home/login');
            exit();
        }
    }
}
?>