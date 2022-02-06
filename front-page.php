<?php
get_header();

get_template_part('template-parts/content', 'carousel');
get_template_part('template-parts/content', 'carousel-mobile');

?>

<div class="container">
    <div class="pt-5 h3">Featured Products</div>
    <div class="pb-3">These are the featured products</div>
    <?php echo do_shortcode('[featured_products limit="4" orderby="popularity"]') ?>

    <div class="pt-5 h3">Products on Sale</div>
    <div class="pb-3">Products Currently on Sale</div>
    <?php echo do_shortcode('[sale_products limit="4"]') ?>

    <div class="pt-5 h3">Recent Products</div>
    <div class="pb-3">Products Currently on Sale</div>
    <?php echo do_shortcode('[recent_products limit="4"]') ?>
</div>

<?php
get_sidebar();
get_footer();
