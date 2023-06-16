<?php

/**
 * Registers block pattern categories.
 *
 * @since 1.0.0
 *
 * @package inc 
 */

/**
 * Registers block pattern categories.
 *
 * @since 1.0.0
 *
 * @return void
 */
function dui_register_block_pattern_categories()
{
    register_block_pattern_category(
        'dreams-ui',
        array(
        'label'       => __('Dreams UI', 'dreams-ui'),
        'description' => __('All the Block Patterns Related to Dreams UI', 'dreams-ui'),
        )
    );
}
add_action('init', 'dui_register_block_pattern_categories');
