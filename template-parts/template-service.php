<?php
    $q = new WP_Query(array(
        'post_type'         => 'unique-service',
        'posts_per_page'    => 6,
    ));
?>


<!-- Services Area 
======================= -->
<section class="services-area wow fadeInUp" id="services">
    <div class="container">
        <div class="row">
           
        <?php
            while($q->have_posts()) : $q->the_post();
            $icon = get_post_meta(get_the_ID(), 'service_icon', true);
        ?>
            <div class="col-md-4 col-sm-6"><!-- Single Service -->
                <div class="single-service fix">
                   
                   <?php if($icon) : ?>
                    <div class="service-icon pull-left">
                        <i class="fa fa-<?php echo esc_attr($icon); ?>"></i>
                    </div>
                    <?php endif; ?>
                    
                    <?php the_title('<h2 class="service-title">', '</h2>'); ?>
                    <?php the_excerpt(); ?>
                </div>
            </div><!-- Single Service End -->
        <?php endwhile; ?>
            
 
        </div>
    </div>
</section><!-- Services Area End -->