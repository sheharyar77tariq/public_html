<?php
header('Content-Type: text/plain; charset=utf-8');

echo "PHP_VERSION=" . PHP_VERSION . PHP_EOL;
echo "LOADED_INI=" . (php_ini_loaded_file() ?: '(none)') . PHP_EOL;
echo "EXTENSION_DIR=" . ini_get('extension_dir') . PHP_EOL;
echo "pdo_mysql_loaded=" . (extension_loaded('pdo_mysql') ? 'yes' : 'no') . PHP_EOL;
echo "mysqli_loaded=" . (extension_loaded('mysqli') ? 'yes' : 'no') . PHP_EOL;
echo "pdo_available_drivers=" . implode(',', PDO::getAvailableDrivers()) . PHP_EOL;
