<?php
// inc/autoload.php
spl_autoload_register(function ($class) {
    $prefix = 'MyTheme\\';
    $base_dir = __DIR__ . '/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
        error_log("Autoloader: Loaded class $class from $file");
    } else {
        error_log("Autoloader: Class file not found - $file");
    }
});

// Test the autoloader
error_log('Autoloader is registered');
