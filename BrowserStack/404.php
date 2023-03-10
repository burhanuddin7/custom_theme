<?php get_header();?>

<div class="custom-container" id="dvCustomErrorSection">
        <section id="content" class="custom-row">
			 <div class="col-md-12 col-sm-12">
				<div class="error-page-container">
					<h2>Sorry!</h2>
					<div>404: The page you were looking for wasn't found.</div>
					<div>Please double-check the URL or return <a href="/">home</a>.</div>
					<div>Need help? Contact us at <a href="/">BrowserStack</a> We'll follow up within the hour.</div>
				</div>
			 </div>
        </section>
</div>

<?php get_footer();?>

<script>
	window.onload = function(){
		var headerHeight = document.getElementById('dvCustomHeadSection').clientHeight
		var footerHeight = document.getElementById('dvCustomFooterSection').clientHeight;
		var totalHeight= window.screen.height - (headerHeight + footerHeight);
		document.getElementById('dvCustomErrorSection').style.height = totalHeight + 'px';
	};
	
</script>