<?php
    $q = new WP_Query(array(
        'post_type'         => 'unique-slider',
        'posts_per_page'    => -1,
    ));
?>
<div class="swiper-container">
    <div class="swiper-wrapper">
       
       <?php
            while($q->have_posts()) : $q->the_post();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
        ?>
        <div class="swiper-slide slide_one" style="background-image:url(<?php echo esc_url($image[0]); ?>)">
            <div class="slide-text">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile; ?>
        
        
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
</header><!-- Top Area End -->