
<?php
require_once 'config/config.php';


function Autoloader($class) {
    $paths = [
        APPROOT."/libraries/",
        APPROOT."/models/",
        APPROOT."/services/interfaces/",
        APPROOT."/services/implementation/",
    ];

    foreach ($paths as $path) {
        $file = $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }
}


spl_autoload_register('Autoloader');

$init = new Core();
?>