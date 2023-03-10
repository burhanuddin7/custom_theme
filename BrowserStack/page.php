<?php get_header();?>

        <section id="content">
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    ?>
			    
                <div id="post-<?php the_ID(); ?>">
                      <div class="slider-container" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.9) 75%), url(/wp-content/uploads/2021/02/slide9-1.jpg;);display: block;text-align: center;">
						<h2 class="custom-section-title custom-bottom-spacing"><?php echo get_the_title(); ?></h2>
						  <div class="slider-info">Instant access to all real mobile and desktop browsers. Easiest way to test websites. Say goodbye to your lab of devices and virtual machines.</div>
					</div>
                    <div class="page-content">
                        <p><?php echo the_content(); ?></p>
                    </div>
                </div>
                
                <?php } ?>
            <?php } ?>
            
        </section>

<?php get_footer();?>