<?php
spl_autoload_register(function ($className) {
    $className = str_replace("\\", "/", $className);
    // Convert first letter of each directory to lowercase for Linux compatibility
    $parts = explode("/", $className);
    if (count($parts) > 1) {
        $parts[0] = strtolower($parts[0]); // controllers or models
        $className = implode("/", $parts);
    }
    require_once("libraries/$className.php");
});
