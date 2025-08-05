<?php

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'wp_footer', 'ah_popup_exibir' );

function ah_popup_exibir() {
    if ( ! is_admin() && get_option( 'ah_popup_ativo' ) ) {
        $titulo = esc_html( get_option( 'ah_popup_titulo' ) );
        $conteudo = wp_kses_post( get_option( 'ah_popup_conteudo' ) );
        ?>
        <style>
            #ah-popup-overlay {
                position: fixed;
                top: 0; left: 0; right: 0; bottom: 0;
                background: rgba(0,0,0,0.6);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
            }
            #ah-popup-box {
                background: #fff;
                padding: 20px;
                max-width: 400px;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.2);
                text-align: center;
                position: relative;
            }
            #ah-popup-close {
                position: absolute;
                top: 8px; right: 10px;
                cursor: pointer;
                font-size: 18px;
                color: #888;
            }
        </style>
        <div id="ah-popup-overlay">
            <div id="ah-popup-box">
                <span id="ah-popup-close" onclick="document.getElementById('ah-popup-overlay').remove()">×</span>
                <h2><?php echo $titulo; ?></h2>
                <div><?php echo $conteudo; ?></div>
            </div>
        </div>
        <?php
    }
}
