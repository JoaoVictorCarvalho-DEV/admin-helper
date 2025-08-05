<?php

if (! defined('ABSPATH')) exit;

add_action('admin_menu', 'ah_adicionar_menu_admin');

function ah_adicionar_menu_admin()
{
    add_menu_page(
        'Admin Helper',
        'Admin Helper',
        'manage_options',
        'admin-helper',
        'ah_render_pagina_admin',
        'dashicons-admin-tools',
        60
    );
}

function ah_render_pagina_admin()
{
?>

    <div class="wrap">
        <h1>Admin Helper</h1>
        <p>Utilitários de administração do seu site.</p>

        <h2>Ferramentas disponíveis</h2>
        <ul>
            <li><a href="<?php echo admin_url('admin.php?page=admin-helper-popup'); ?>" class="button button-primary">🧩Configurar Pop-up</a></li>
        </ul>
    </div>

<?php
}
