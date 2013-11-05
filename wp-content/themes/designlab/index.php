<?php
/**

 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header') ); ?>

<!-- start header -->
<header class="home-page">
	<div id="header-wrapper" class="centre-column">
	</div>
</header>
<!-- end header -->

<div id="page-wrapper">
<?php query_posts($query_string . '&cat=-11'); ?>
<?php if ( have_posts() ): ?>
<!-- start content section -->
	<section id="content"> <!-- The ID "content" keeps standard Wordpress naming structure. -->	
		<div class="centre-column-top-padding"></div>
	<!-- start the wordpress loop -->
	<?php while ( have_posts() ) : the_post(); ?>		
		<!-- start article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- Gets all the info about the post. This is standard wordpress naming structure and required for functionality extras, such as the infinite scroll -->
			<div class="centre-column"> <!-- Wraps the article in the centre-column container. This prevents it from expanding into long line lengths on larger screens that reduce readbility -->
				<!-- title of the post -->
				<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3><span class="phone-date"><?php the_date(); ?></span>

				<!-- start article content -->	
				<div class="article-container">	
					<div class="article-content">
					<?php echo the_content(); ?>
					</div>	
				</div>
				<!-- end article content -->
				<!-- start article meta -->
				<section class="article-meta">
					<div class="meta-area viewable">
					<!-- meta tags -->
						<div class="meta-date meta-date-words">	
							<span class="date"><?php echo get_the_date(); ?></span>		
						</div>	
						<div class="meta-tags">
							<span class="tags"><?php the_tags('',' '); ?></span>
						</div>	
					<!-- meta related -->
						<?php related_posts(); ?> <!-- Most of the styling for this is actually done in the YARPP plugin settings in the Wordpress back-end. -->	
					<!-- meta social -->	
						<div class="meta-social">	
							<a data-pin-config="above" href="//pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>				
							<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
							<a href="https://twitter.com/share" class="twitter-share-button twitter-button" data-via="traviswall7">Tweet</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
					</div>					
				</section>
				<!-- end article meta -->	
				<div class="clear"><!-- clear --></div>
			</div> <!-- End the centre-column before the divider so it will run 100% wide. -->
			<div class="article-divider"><!-- divider --></div>				
		</article>	
		<!-- end article -->
	<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
	<!-- none of this is displayed, but required for infinite scroll function -->
	<div id="nav-below" class="navigation">
	<p class="nav-previous"><?php next_posts_link(__( '' )) ?></p>
	<p class="nav-next"><?php previous_posts_link(__( '' )) ?></p>
	</div>
	<!-- none of this is displayed, but required for infinite scroll function -->
	</section>
	<!-- end content section -->
</div>	
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>