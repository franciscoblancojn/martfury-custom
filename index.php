<?php
/*
Plugin Name: Martfury Custom
Plugin URI: https://github.com/franciscoblancojn/martfury-custom
Description: Este plugin agrega customizaciones para el tema Martfury.
Version: 1.0.35
Author: franciscoblancojn
Author URI: https://franciscoblanco.vercel.app/
License: GPL2+
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wc-martfury-custom
*/

if (!function_exists('is_plugin_active'))
    require_once(ABSPATH . '/wp-admin/includes/plugin.php');

require_once __DIR__ . '/libs/autoload.php';

//MACU_
define("MACU_KEY", 'MACU');
define("MACU_MODE_DEV", in_array($_SERVER['HTTP_HOST'] ?? '', ['wordpress.local', 'localhost', '127.0.0.1',]));
define("MACU_KEY_SEPARETE", '____MACU____');
define("MACU_CONFIG", 'MACU_CONFIG');
define("MACU_CONTENT", 'MACU_CONTENT');
define("MACU_LOG", true);
define("MACU_LOG_KEY", "MACU_LOG");
define("MACU_LOG_COUNT", 100);
define("MACU_BASENAME", plugin_basename(__FILE__));
define("MACU_DIR", plugin_dir_path(__FILE__));
define("MACU_URL", plugin_dir_url(__FILE__));

function MACU_get_version()
{
    $plugin_data = get_plugin_data(__FILE__);
    $plugin_version = $plugin_data['Version'];
    return $plugin_version;
}

use franciscoblancojn\wordpress_utils\FWUUpdate;

FWUUpdate::init([
    'basename' => MACU_BASENAME,
    'dir' => MACU_DIR,
    'file' => "index.php",
    'path_repository' => 'franciscoblancojn/martfury-custom',
    'branch' => 'master',
    'token_array_split' => [
        "g",
        "h",
        "p",
        "_",
        "G",
        "4",
        "W",
        "E",
        "W",
        "F",
        "p",
        "V",
        "U",
        "E",
        "F",
        "V",
        "x",
        "F",
        "U",
        "n",
        "b",
        "M",
        "k",
        "P",
        "R",
        "x",
        "o",
        "f",
        "t",
        "Y",
        "8",
        "z",
        "j",
        "t",
        "4",
        "E",
        "x",
        "b",
        "i",
        "9"
    ]
]);

use franciscoblancojn\wordpress_utils\FWUSystemLog;

if (is_admin()) {
    FWUSystemLog::init(MACU_KEY);
}

require_once MACU_DIR . 'src/_.php';
