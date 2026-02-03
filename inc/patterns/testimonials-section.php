<?php
/**
 * Testimonials Section Template
 *
 * Dynamic pattern for displaying customer testimonials
 * Use shortcode: [edun_testimonials]
 *
 * @package Edun_Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Testimonials Section Shortcode
 */
function edun_testimonials_section_shortcode($atts) {
    // Extract attributes
    $atts = shortcode_atts(array(
        'autoplay' => 'false',
    ), $atts);

    // Start output buffering
    ob_start();

// Query testimonials
$testimonials_query = new WP_Query(array(
    'post_type'      => 'testimonial',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC'
));

$has_testimonials = $testimonials_query->have_posts();
$testimonials_count = $testimonials_query->post_count;
?>

<!-- Testimonials Section -->
<section class="testimonials-section" id="testimonials-section">
    <div class="testimonials-container">

        <?php if ($has_testimonials) : ?>

            <!-- Testimonials Slider -->
            <div class="testimonials-slider" data-testimonial-count="<?php echo esc_attr($testimonials_count); ?>">

                <!-- Header -->
                <div class="testimonials-header">
                    <h2 class="testimonials-title">What customers say</h2>
                </div>

                <!-- Slides Container -->
                <div class="testimonials-slides">
                    <?php
                    $slide_index = 0;
                    while ($testimonials_query->have_posts()) :
                        $testimonials_query->the_post();

                        // Get meta data
                        $customer_name = get_post_meta(get_the_ID(), '_testimonial_customer_name', true);
                        $customer_role = get_post_meta(get_the_ID(), '_testimonial_customer_role', true);
                        $rating = get_post_meta(get_the_ID(), '_testimonial_rating', true);
                        $testimonial_text = get_post_meta(get_the_ID(), '_testimonial_text', true);

                        // Default to 5 if no rating
                        if (empty($rating)) {
                            $rating = 5;
                        }

                        // Create star rating
                        $stars = str_repeat('⭐', intval($rating));

                        // Active class for first slide
                        $active_class = ($slide_index === 0) ? 'active' : '';
                        $slide_index++;
                    ?>

                    <div class="testimonial-slide <?php echo esc_attr($active_class); ?>">
                        <!-- Star Rating -->
                        <div class="testimonial-rating">
                            <?php echo $stars; ?>
                        </div>

                        <!-- Testimonial Text -->
                        <div class="testimonial-text">
                            <p>"<?php echo wp_kses_post($testimonial_text); ?>"</p>
                        </div>

                        <!-- Customer Info -->
                        <div class="testimonial-customer">
                            <?php if ($customer_name) : ?>
                                <p class="customer-name"><?php echo esc_html($customer_name); ?></p>
                            <?php endif; ?>

                            <?php if ($customer_role) : ?>
                                <p class="customer-role"><?php echo esc_html($customer_role); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php endwhile; ?>
                </div>

                <!-- Navigation Arrows -->
                <?php if ($testimonials_count > 1) : ?>
                <div class="testimonials-navigation">
                    <button class="testimonial-arrow prev-arrow" aria-label="Previous testimonial">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.375 23.25L11.625 15.5L19.375 7.75" stroke="#294338" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="testimonial-arrow next-arrow" aria-label="Next testimonial">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.625 7.75L19.375 15.5L11.625 23.25" stroke="#F7F6F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <?php endif; ?>

            </div>

        <?php else : ?>

            <!-- No Testimonials Message (Only shown to logged-in admins) -->
            <?php if (current_user_can('edit_posts')) : ?>
                <div class="testimonials-empty">
                    <div class="testimonials-header">
                        <h2 class="testimonials-title">What customers say</h2>
                    </div>
                    <div class="testimonial-slide active">
                        <div class="testimonial-text">
                            <p class="testimonial-empty-message">
                                <em>No testimonials yet. Add your first testimonial from the WordPress admin panel.</em>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        <?php endif; ?>

    </div>
</section>

<?php
    // Reset post data
    wp_reset_postdata();

    // Return buffered content
    return ob_get_clean();
}
add_shortcode('edun_testimonials', 'edun_testimonials_section_shortcode');
