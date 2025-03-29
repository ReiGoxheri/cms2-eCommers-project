<?php

// enqueue block editor assets
function cms2_deliverables2_enqueue_block_editor_assets() {
    wp_enqueue_script(
        'cms2-deliverables2-block-editor',
        get_theme_file_uri( 'assets/js/block-editor.js' ),
        array( 
            'wp-blocks', 
            'wp-dom-ready', 
            'wp-edit-post' 
        )
    );
}

add_action( 'enqueue_block_editor_assets', 'cms2_deliverables2_enqueue_block_editor_assets' );

// enqueue block assets
function cms2_deliverables2_enqueue_block_assets() {
    wp_enqueue_style(
        'cms2-deliverables2-block-styles',
        get_theme_file_uri( 'assets/css/block-styles.css' )
    );
}

add_action( 'enqueue_block_assets', 'cms2_deliverables2_enqueue_block_assets' );