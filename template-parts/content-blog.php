<a href="<?php echo get_permalink(the_ID()) ?>">

    <div class="container">
        <div class="row sakal-blog-container">
            <div class="col-12 col-lg-3 d-flex justify-content-center justify-content-lg-end align-items-center">
                <div class="sakal-blog-thumbnail-container">
                    <?php the_post_thumbnail() ?>
                </div>
            </div>

            <div class="col-12 text-center col-lg-9 text-lg-start px-5">
                <div class="h3">
                    <?php the_title() ?>
                </div>

                <div class="sakal-blog-date-line">
                    <i class="bi bi-calendar3 me-2"></i>
                    <?php the_date() ?>
                </div>

                <div class="sakal-blog-excerpt">
                    <?php the_excerpt() ?>
                </div>

                <div class="sakal-blog-readmore">
                    Read More
                </div>
            </div>
        </div>
    </div>

</a>