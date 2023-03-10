<?php get_header();?>

<div class="custom-container">
        <section id="content" class="custom-row">
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    ?>
                <div id="post-<?php the_ID(); ?>" class="custom-section-wrapper">
                      <div class="section-title-top">
                             <h2 class="custom-section-title"><?php echo get_the_title(); ?></h2>
                      </div>
                    <div class="page-content">
                        <p><?php echo the_content(); ?></p>
                    </div>
                </div>
                
                <?php } ?>
            <?php } ?>
            
        </section>
</div>

<?php get_footer();?>