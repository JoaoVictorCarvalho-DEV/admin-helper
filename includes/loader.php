<?php

if ( ! defined( 'ABSPATH' ) ) exit;

function ah_carregar_modulos() {
    $modulos_path = AH_PLUGIN_PATH . 'modules/';

    if ( ! is_dir( $modulos_path ) ) return;

    foreach ( scandir( $modulos_path ) as $modulo ) {
        if ( $modulo === '.' || $modulo === '..' ) continue;

        $init_file = $modulos_path . $modulo . '/init.php';
        if ( file_exists( $init_file ) ) {
            include_once $init_file;
        }
    }
}

add_action( 'plugins_loaded', 'ah_carregar_modulos' );
