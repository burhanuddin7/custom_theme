<?php 
/* Template Name: Custom Layout*/
get_header();
?>
<!-- Banner Slider Section -->
<section class="custom-banner-section">
	<?php 
		$banner = SCF::get('Banner');
		foreach ($banner as $banner_slide) :
	?>
	<div class="slider-container" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, .9) 75%), url(<?php echo wp_get_attachment_url($banner_slide['banner_image']);?>)">
		<div class="slider-title"><?php echo $banner_slide['banner_title'];?></div>
		<div class="slider-info"><?php echo $banner_slide['banner_description'];?></div>
		<div class="signup-wrapper">
			<a href="<?php echo $banner_slide['banner_btn_url'];?>" class="primary-btn"><?php echo $banner_slide['banner_btn_text'];?></a>
		</div>
	</div>
	
	<?php 
		endforeach;
	?>
	<!--<div class="slider-container" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, .9) 75%), url('/wp-content/uploads/2021/02/slide2.jpg')">
		<div class="slider-title">LIVE, WEB-BASED, REAL BROWSER TESTING</div>
		<div class="slider-info">Instant access to all real mobile and desktop browsers. Easiest way to test websites. Say goodbye to your lab of devices and virtual machines.</div>
		<div class="signup-wrapper">
			<a href="#" class="primary-btn">Sign Up</a>
		</div>
	</div>
	
	<div class="slider-container" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, .9) 75%), url('/wp-content/uploads/2021/02/slide3.jpg')">
		<div class="slider-title">LIVE, WEB-BASED, REAL BROWSER TESTING</div>
		<div class="slider-info">Instant access to all real mobile and desktop browsers. Easiest way to test websites. Say goodbye to your lab of devices and virtual machines.</div>
		<div class="signup-wrapper">
			<a href="#" class="primary-btn">Sign Up</a>
		</div>
	</div> -->
	

</section>

<!-- Banner Slider section -->

<!-- About us Section -->
<section class="custom-section-wrapper primary-bg primary-color">
	
	<!-- Below condition checks the filed value whether it is empty or filled and display h2 tags acc -->
	<?php if ( !empty(SCF::get('about_us_title')) ): ?>
		<h2 class="custom-section-title"><?php echo SCF::get('about_us_title');?></h2>
	<?php endif; ?>
	
	<?php if ( !empty(SCF::get('about_us_info')) ): ?>
		<div class="custom-section-info"><?php echo SCF::get('about_us_info');?></div>
	<?php endif; ?>
	
	<a href="<?php echo SCF::get('about_us_btn_url');?>" class="secondary-btn custom-top-spacing"><?php echo SCF::get('about_us_btn');?></a>
</section>
<!-- About us ends here-->

<!-- Feature Section -->
<section class="custom-section-wrapper custom-feature-section secondary-color">
	<?php if ( !empty(SCF::get('custom_feature_title')) ): ?>
		<h2 class="custom-section-title"><?php echo SCF::get('custom_feature_title');?></h2>
	<?php endif; ?>
	
	<div class="custom-container">
		<div class="custom-row">
			<?php 
				$feature = SCF::get('Feature Cards');
				foreach ($feature as $feature_cards) :
			?>
			<div class="custom-col-4">
				<div class="custom-feature-icon">
					<i class="<?php echo $feature_cards['feature_card_icon_class'];?>" aria-hidden="true"></i>
				</div>
				<div class="custom-feature-title"><?php echo $feature_cards['feature_card_title'];?></div>
				<div class="custom-feature-desc">
					<?php echo $feature_cards['feature_card_content'];?>
				</div>
			</div>
			<?php 
				endforeach;
			?>
		</div>
	</div>
</section>
<!-- Feature Section ends here -->

<!-- Signup Section -->
<section class="custom-section-wrapper custom-signup-section primary-color">
	<?php if ( !empty(SCF::get('sign_up_section_title')) ): ?>
		<h2 class="custom-section-title"><?php echo SCF::get('sign_up_section_title');?></h2>
	<?php endif; ?>
	
	<a href="<?php echo SCF::get('sign_up_section_btn_url');?>" class="primary-btn"><?php echo SCF::get('sign_up_section_btn');?></a>
</section>
<!-- Signup Section ends here -->


<script>
var initialSlide = 0;
slideShow();

function slideShow() {
  var i;
  var slides = document.querySelectorAll(".slider-container");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  initialSlide++;
  if (initialSlide > slides.length) {initialSlide = 1}
  slides[initialSlide-1].style.display = "block";
  setTimeout(slideShow, <?php if ( !empty(SCF::get('slider_timer')) ){ ?>
		<?php echo SCF::get('slider_timer');?>
	<?php }else { ?> 4000 <?php } ?>);
}

</script>

<?php get_footer(); ?>