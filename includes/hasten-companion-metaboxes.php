<?php if (!function_exists('hasten_conpanion_essentials_add_metabox')) {
    function hasten_conpanion_essentials_add_metabox()
    {
        add_meta_box(
            'hasten_companion_services_breadcrumb_metas',
            __('Check For Enable Breadcrumb','hasten-companion'),
            'hasten_companion_essentials_breadcrumb_meta_box',
            'page',
            'side'
        );

    }
    add_action('add_meta_boxes', 'hasten_conpanion_essentials_add_metabox');

}

//for breadcrumb elable disable option
function hasten_companion_essentials_breadcrumb_meta_box()
{
    $post_id = get_the_ID();

    if (get_post_type($post_id) != 'page') {
        return;
    }


    $value = get_post_meta($post_id, 'check_breadcrumb', true);
    $checked = '';
    if(!$value || '1' == $value )
        $checked = 'checked="checked"';

    wp_nonce_field('check_breadcrumb_nonce'.$post_id, 'check_breadcrumb_nonce');
    ?>
    <div class="misc-pub-section misc-pub-section-last">
        <label><input type="checkbox" value="1" <?php echo $checked; ?> name="check_breadcrumb" /> <?php _e('Show Breadcrumb', 'hasten-companion'); ?></label>
    </div>
    <?php
}

function saveCustomField($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (
        !isset($_POST['check_breadcrumb_nonce']) ||
        !wp_verify_nonce($_POST['check_breadcrumb_nonce'], 'check_breadcrumb_nonce'.$post_id)
    ) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_POST['check_breadcrumb'])) {
        update_post_meta($post_id, 'check_breadcrumb', $_POST['check_breadcrumb']);
    } else {
        update_post_meta($post_id, 'check_breadcrumb', 'unchecked');

    }
}
add_action('save_post', 'saveCustomField');

