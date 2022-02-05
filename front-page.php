<?php
get_header();

get_template_part('template-parts/content', 'carousel');
get_template_part('template-parts/content', 'carousel-mobile');

?>

<div class="container">
    <?php the_content() ?>
</div>

<?php
get_sidebar();
get_footer();
