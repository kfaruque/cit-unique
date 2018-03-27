<!-- Portfolios Area
		=========================== -->
			<section class="portfolios-area fix" id="portfolios">
				<div class="container_auto">
					<!-- Section Title -->
					<div class="section-title text-center">
						<h2>OUR RECENT POROJECTS</h2>
						<div class="line-centered"></div>
					</div>
					
					

					
                <?php
                  //Dynamic portfolio menu
                    $terms = get_terms('portfolios_cat');
                    if( !empty ($terms) && !is_wp_error($terms) ){
                        echo '<ul class="filters-tab clearfix">';
                        echo '<li class="filter" data-filter="all">All</li>';
                        foreach($terms as $term){
                            echo '<li class="filter" data-filter=".'.$term->slug.'">'.$term->name.'</li>';
                        }
                        echo '</ul>';
                    }
                ?>
					
					

					<!-- Images Container -->
					<div class="images-container wow fadeInUp">
						<div class="filter-list clearfix">
						
						
					
            <?php 
                global $post;
                $args = array('post_type' => 'unique-portfolio', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC');
                $myposts = get_posts($args);
                foreach($myposts as $post) : setup_postdata($post);
                $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
            ?>
					
					
            <?php
                $terms = get_the_terms( $post->ID, 'portfolios_cat');
                    
                if($terms && !is_wp_error($terms)):

                    $portfolio_cat_slug = array();
                    foreach( $terms as $term ){
                        $portfolio_cat_slug[] = $term->slug;
                    }

                    $portfolio_cat_array = join(", ", $portfolio_cat_slug);
                    $portfolio_class_array = join(" ", $portfolio_cat_slug);
                endif;
            ?>
                <div class="single-portfolio mix <?php echo $portfolio_class_array; ?>">
                    <figure class="image">
                       
                        <img src="<?php echo esc_url($image[0]); ?>" alt="<?php the_title(); ?>" />
                            
                        <div class="portfolio-hover">
                            <div class="hover-table">
                                <div class="hover-tablecell">
                                    <a href="<?php echo esc_url($image[0]); ?>" class="lightbox"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div><!-- Single Portfolio Item End -->
				<?php endforeach; ?>
							
							
							

						</div>
					</div>
				</div>
			</section>
		<!-- Portfolios Area End -->