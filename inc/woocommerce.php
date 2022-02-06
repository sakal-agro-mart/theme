<?php

/**
 * 
 * Woocommerce
 */
function sakal_add_woocommerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'sakal_add_woocommerce_support');

/**
 * Show cart contents / total Ajax
 */
add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
function woocommerce_header_add_to_cart_fragment($fragments)
{
    global $woocommerce;

    ob_start();

?>
    <a class="cart-customlocation me-3" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
        <i class="bi bi-cart3"></i>
        <div class="no-of-items">
            <div>
                <?php echo sprintf('%d', $woocommerce->cart->cart_contents_count) ?>
            </div>
        </div>
    </a>
<?php
    $fragments['a.cart-customlocation'] = ob_get_clean();
    return $fragments;
}

// for the entire site
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'sakal_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'sakal_wrapper_end', 10);

function sakal_wrapper_start()
{
    echo '<div class="container">';
}

function sakal_wrapper_end()
{
    echo '</div>';
}

// add_filter('woocommerce_enqueue_styles', '__return_false');

// for the single-product page

add_action('woocommerce_product_meta_start', 'sakal_cat_and_tags_wrapper_start', 10);
add_action('woocommerce_product_meta_end', 'sakal_cat_and_tags_wrapper_end', 10);

function sakal_cat_and_tags_wrapper_start()
{
    echo '<div class="d-flex flex-column">';
}
function sakal_cat_and_tags_wrapper_end()
{
    echo '</div>';
}


// for the cart page

add_action('woocommerce_before_cart', 'sakal_wrapper_start', 10);
add_action('woocommerce_after_cart', 'sakal_wrapper_end', 10);
