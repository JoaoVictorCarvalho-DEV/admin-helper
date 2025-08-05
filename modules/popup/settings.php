<?php

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'admin_menu', 'ah_popup_adicionar_submenu' );
add_action( 'admin_init', 'ah_popup_registrar_opcoes' );

function ah_popup_adicionar_submenu() {
    add_submenu_page(
        'admin-helper',
        'Pop-up',
        'Pop-up',
        'manage_options',
        'admin-helper-popup',
        'ah_popup_render_configuracoes'
    );
}

function ah_popup_registrar_opcoes() {
    register_setting( 'ah_popup_opcoes', 'ah_popup_ativo' );
    register_setting( 'ah_popup_opcoes', 'ah_popup_titulo' );
    register_setting( 'ah_popup_opcoes', 'ah_popup_conteudo' );
}

function ah_popup_render_configuracoes() {
    ?>
    <div class="wrap">
        <h1>Configurações do Pop-up</h1>
        <form method="post" action="options.php">
            <?php settings_fields( 'ah_popup_opcoes' ); ?>
            <?php do_settings_sections( 'ah_popup_opcoes' ); ?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Ativar pop-up</th>
                    <td><input type="checkbox" name="ah_popup_ativo" value="1" <?php checked( get_option( 'ah_popup_ativo' ), 1 ); ?>></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Título do Pop-up</th>
                    <td><input type="text" name="ah_popup_titulo" value="<?php echo esc_attr( get_option( 'ah_popup_titulo', '' ) ); ?>" class="regular-text"></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Conteúdo do Pop-up</th>
                    <td>
                        <textarea name="ah_popup_conteudo" rows="5" class="large-text"><?php echo esc_textarea( get_option( 'ah_popup_conteudo', '' ) ); ?></textarea>
                    </td>
                </tr>
            </table>

            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
