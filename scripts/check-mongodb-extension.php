<?php

echo "🚀 MongoDB Laravel Starter Kit Setup\n";
echo "=====================================\n\n";

echo "🔍 Checking MongoDB PHP extension...\n";

if (!extension_loaded('mongodb')) {
    echo "❌ MongoDB PHP extension is not installed.\n\n";
    echo "📋 Installation Instructions:\n";
    echo "==========================================\n";
    
    $os = PHP_OS_FAMILY;
    
    switch ($os) {
        case 'Linux':
            echo "🐧 Ubuntu/Debian:\n";
            echo "  sudo apt-get update\n";
            echo "  sudo apt-get install php-mongodb\n";
            echo "  # OR using PECL:\n";
            echo "  sudo pecl install mongodb\n\n";
            
            echo "🎩 CentOS/RHEL/Fedora:\n";
            echo "  sudo yum install php-mongodb\n";
            echo "  # OR using PECL:\n";
            echo "  sudo pecl install mongodb\n\n";
            break;
            
        case 'Darwin':
            echo "🍎 macOS:\n";
            echo "  # Using Homebrew:\n";
            echo "  brew install mongodb/brew/mongodb-community\n";
            echo "  # Install PHP extension:\n";
            echo "  sudo pecl install mongodb\n\n";
            break;
            
        case 'Windows':
            echo "🪟 Windows:\n";
            echo "  1. Download from: https://pecl.php.net/package/mongodb\n";
            echo "  2. Extract php_mongodb.dll to your PHP ext/ directory\n";
            echo "  3. Add 'extension=mongodb' to php.ini\n";
            echo "  4. Restart your web server\n\n";
            break;
            
        default:
            echo "Generic installation:\n";
            echo "  sudo pecl install mongodb\n\n";
    }
    
    echo "⚙️  After installation:\n";
    echo "  1. Add 'extension=mongodb' to your php.ini file\n";
    echo "  2. Restart your web server/PHP-FPM\n";
    echo "  3. Verify: php -m | grep mongodb\n\n";
    
    echo "🔗 More info: https://www.php.net/manual/en/mongodb.installation.php\n\n";
    
    exit(1);
}

echo "✅ MongoDB PHP extension is installed!\n";
echo "📦 Extension version: " . phpversion('mongodb') . "\n\n";

echo "🎉 Your Laravel MongoDB starter kit is ready!\n\n";

echo "📝 Next Steps:\n";
echo "==============\n";
echo "1. Update your .env file:\n";
echo "   MONGODB_URI=mongodb://username:password@localhost:27017\n";
echo "   MONGODB_DB=your_database_name\n\n";
echo "2. Start your application:\n";
echo "   php artisan serve\n\n";
echo "3. Create your first MongoDB model:\n";
echo "   php artisan make:model User --mongodb\n\n";

echo "📚 Documentation:\n";
echo "  Laravel MongoDB: https://github.com/mongodb/laravel-mongodb\n";
echo "  MongoDB PHP: https://www.mongodb.com/docs/php-library/\n\n";

echo "🚀 Happy coding with Laravel + MongoDB!\n";