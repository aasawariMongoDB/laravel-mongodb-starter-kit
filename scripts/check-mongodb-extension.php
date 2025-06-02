<?php
echo "Checking MongoDB extension...\n";

if (!extension_loaded('mongodb')) {
    echo "MongoDB extension is not installed!\n";
    echo "Please install it using:\n";
    echo "  pecl install mongodb\n";
    echo "  Add 'extension=mongodb' to your php.ini\n";
    echo "  Restart your web server\n";
    exit(1);
}

echo "✅ MongoDB extension is installed!\n";
echo "Extension version: " . phpversion('mongodb') . "\n";