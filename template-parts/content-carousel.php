<div id="sakalCarousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#sakalCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#sakalCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#sakalCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="<?php echo get_theme_mod('sakal_carousel_first_product') ?>">
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('sakal_carousel_first_image')) ?>" class="d-block w-100" alt="...">
            </a>
        </div>
        <div class="carousel-item">
            <a href="<?php echo get_theme_mod('sakal_carousel_second_product') ?>">
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('sakal_carousel_second_image')) ?>" class="d-block w-100" alt="...">
            </a>
        </div>
        <div class="carousel-item">
            <a href="<?php echo get_theme_mod('sakal_carousel_third_product') ?>">
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('sakal_carousel_third_image')) ?>" class="d-block w-100" alt="...">
            </a>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#sakalCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#sakalCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>