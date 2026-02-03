<?php
/**
 * Testimonial Meta Boxes
 *
 * Add custom fields for testimonials
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add Meta Boxes for Testimonials
 */
function edun_add_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        __('Testimonial Details', 'astra-child'),
        'edun_testimonial_details_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'edun_add_testimonial_meta_boxes');

/**
 * Meta Box Callback Function
 */
function edun_testimonial_details_callback($post) {
    // Add nonce for security
    wp_nonce_field('edun_testimonial_meta_box', 'edun_testimonial_meta_box_nonce');

    // Retrieve existing values
    $customer_name = get_post_meta($post->ID, '_testimonial_customer_name', true);
    $customer_role = get_post_meta($post->ID, '_testimonial_customer_role', true);
    $rating = get_post_meta($post->ID, '_testimonial_rating', true);
    $testimonial_text = get_post_meta($post->ID, '_testimonial_text', true);

    // Default to 5 stars if not set
    if (empty($rating)) {
        $rating = 5;
    }
    ?>
    <style>
        .testimonial-meta-box {
            max-width: 800px;
        }
        .testimonial-field {
            margin-bottom: 20px;
        }
        .testimonial-field label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #1d2327;
        }
        .testimonial-field input[type="text"],
        .testimonial-field select,
        .testimonial-field textarea {
            width: 100%;
            max-width: 700px;
            padding: 8px 12px;
            border: 1px solid #8c8f94;
            border-radius: 4px;
            font-size: 14px;
        }
        .testimonial-field textarea {
            min-height: 150px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            line-height: 1.6;
            resize: vertical;
        }
        .testimonial-field input[type="text"]:focus,
        .testimonial-field select:focus,
        .testimonial-field textarea:focus {
            border-color: #2271b1;
            outline: none;
            box-shadow: 0 0 0 1px #2271b1;
        }
        .testimonial-field .description {
            margin-top: 6px;
            color: #646970;
            font-size: 13px;
        }
        .testimonial-stars {
            font-size: 24px;
            color: #dba617;
        }
    </style>

    <div class="testimonial-meta-box">
        <!-- Customer Name -->
        <div class="testimonial-field">
            <label for="testimonial_customer_name">
                <?php _e('Customer Name', 'astra-child'); ?> <span style="color: red;">*</span>
            </label>
            <input
                type="text"
                id="testimonial_customer_name"
                name="testimonial_customer_name"
                value="<?php echo esc_attr($customer_name); ?>"
                placeholder="e.g., Cassie"
                required
            />
            <p class="description">
                <?php _e('Enter the name of the customer giving the testimonial.', 'astra-child'); ?>
            </p>
        </div>

        <!-- Customer Role -->
        <div class="testimonial-field">
            <label for="testimonial_customer_role">
                <?php _e('Customer Role/Company', 'astra-child'); ?>
            </label>
            <input
                type="text"
                id="testimonial_customer_role"
                name="testimonial_customer_role"
                value="<?php echo esc_attr($customer_role); ?>"
                placeholder="e.g., edun customer"
            />
            <p class="description">
                <?php _e('Enter the customer\'s role or company (e.g., "edun customer", "CEO at Company").', 'astra-child'); ?>
            </p>
        </div>

        <!-- Rating -->
        <div class="testimonial-field">
            <label for="testimonial_rating">
                <?php _e('Rating', 'astra-child'); ?> <span style="color: red;">*</span>
            </label>
            <select id="testimonial_rating" name="testimonial_rating" required>
                <option value="5" <?php selected($rating, 5); ?>>⭐⭐⭐⭐⭐ (5 stars)</option>
                <option value="4" <?php selected($rating, 4); ?>>⭐⭐⭐⭐ (4 stars)</option>
                <option value="3" <?php selected($rating, 3); ?>>⭐⭐⭐ (3 stars)</option>
                <option value="2" <?php selected($rating, 2); ?>>⭐⭐ (2 stars)</option>
                <option value="1" <?php selected($rating, 1); ?>>⭐ (1 star)</option>
            </select>
            <p class="description">
                <?php _e('Select the star rating for this testimonial.', 'astra-child'); ?>
            </p>
        </div>

        <!-- Testimonial Text -->
        <div class="testimonial-field">
            <label for="testimonial_text">
                <?php _e('Testimonial Text', 'astra-child'); ?> <span style="color: red;">*</span>
            </label>
            <textarea
                id="testimonial_text"
                name="testimonial_text"
                rows="6"
                placeholder="Enter the customer's testimonial quote here..."
                required
            ><?php echo esc_textarea($testimonial_text); ?></textarea>
            <p class="description">
                <?php _e('Enter the full testimonial quote. It will be automatically wrapped in quotation marks on the frontend.', 'astra-child'); ?>
            </p>
        </div>
    </div>
    <?php
}

/**
 * Save Meta Box Data
 */
function edun_save_testimonial_meta_box($post_id) {
    // Check if nonce is set
    if (!isset($_POST['edun_testimonial_meta_box_nonce'])) {
        return;
    }

    // Verify nonce
    if (!wp_verify_nonce($_POST['edun_testimonial_meta_box_nonce'], 'edun_testimonial_meta_box')) {
        return;
    }

    // Check if autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check user permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save Customer Name
    if (isset($_POST['testimonial_customer_name'])) {
        update_post_meta(
            $post_id,
            '_testimonial_customer_name',
            sanitize_text_field($_POST['testimonial_customer_name'])
        );
    }

    // Save Customer Role
    if (isset($_POST['testimonial_customer_role'])) {
        update_post_meta(
            $post_id,
            '_testimonial_customer_role',
            sanitize_text_field($_POST['testimonial_customer_role'])
        );
    }

    // Save Rating
    if (isset($_POST['testimonial_rating'])) {
        $rating = intval($_POST['testimonial_rating']);
        if ($rating >= 1 && $rating <= 5) {
            update_post_meta($post_id, '_testimonial_rating', $rating);
        }
    }

    // Save Testimonial Text
    if (isset($_POST['testimonial_text'])) {
        update_post_meta(
            $post_id,
            '_testimonial_text',
            wp_kses_post($_POST['testimonial_text'])
        );
    }
}
add_action('save_post_testimonial', 'edun_save_testimonial_meta_box');

/**
 * Add custom columns to testimonials list
 */
function edun_testimonial_columns($columns) {
    $new_columns = array();
    $new_columns['cb'] = $columns['cb'];
    $new_columns['title'] = $columns['title'];
    $new_columns['customer_name'] = __('Customer Name', 'astra-child');
    $new_columns['rating'] = __('Rating', 'astra-child');
    $new_columns['date'] = $columns['date'];
    return $new_columns;
}
add_filter('manage_testimonial_posts_columns', 'edun_testimonial_columns');

/**
 * Display custom column content
 */
function edun_testimonial_column_content($column, $post_id) {
    switch ($column) {
        case 'customer_name':
            $customer_name = get_post_meta($post_id, '_testimonial_customer_name', true);
            $customer_role = get_post_meta($post_id, '_testimonial_customer_role', true);
            echo esc_html($customer_name);
            if ($customer_role) {
                echo '<br><small style="color: #646970;">' . esc_html($customer_role) . '</small>';
            }
            break;

        case 'rating':
            $rating = get_post_meta($post_id, '_testimonial_rating', true);
            if ($rating) {
                echo '<span style="color: #dba617; font-size: 16px;">' . str_repeat('⭐', intval($rating)) . '</span>';
            }
            break;
    }
}
add_action('manage_testimonial_posts_custom_column', 'edun_testimonial_column_content', 10, 2);

/**
 * Make custom columns sortable
 */
function edun_testimonial_sortable_columns($columns) {
    $columns['customer_name'] = 'customer_name';
    $columns['rating'] = 'rating';
    return $columns;
}
add_filter('manage_edit-testimonial_sortable_columns', 'edun_testimonial_sortable_columns');
