<?php
/**
 * Plugin Name: Admin Helper
 * Description: Plugin feito para ajudar os administradores de sites em Wordpress.
 * Version: 1.0.0
 * Author: João Víctor Miranda Carvalho
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Evita acesso direto
}

// Define constantes
define( 'AH_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'AH_PLUGIN_URL', plugin_dir_url( __FILE__ ) );


// Arquivos principais
require_once AH_PLUGIN_PATH . 'includes/admin-menu.php';
require_once AH_PLUGIN_PATH . 'includes/loader.php';