<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_header(); ?>

	<body>
<?php include('navbar.php'); ?>
	
		<!-- Title banner -->
		<div class="container-fluid title-bg">
			<div class="container">	
				<h1 class="heavy uppercase white">Resources<br /><span class="light h1-small">for design and development</span></h1>
			</div>
		</div>
	
		<!-- Resource listing -->
		<div class="container-fluid white-bg section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<?php the_archive_title( '<h2 class="heavy uppercase">', '</h2>' ); ?>
					</div>

					<?php 
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
					
					$tag_query_args = array(
							'tag' => $tag,
							'paged' => $paged
							);
					?>						

					<?php $tag_query = new WP_Query( $tag_query_args ); ?>				

					<?php  if ( $tag_query->have_posts() ) : ?>	
					    <?php while ( $tag_query->have_posts() ) : $tag_query->the_post(); ?>

							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="listing-block">
									<p>
										<a href="<?php echo get_post_meta( get_the_ID(), 'webaddress', true ); ?>"><?php the_title(); ?></a>
									</p>
									<p>
										<?php $posttags = get_the_tags();
											if ( $posttags ) {
												foreach( $posttags as $tag ) {
													echo '<span class="listing-tag uppercase">' . $tag->name . '</span>'; 
												}
											}
										?>

										<a class="listing-update" href="">Report / Update</a>
									</p>		
								</div>
							</div>

					    <?php endwhile; ?>
						
						<div class="col-xs-12">
							<?php previous_posts_link( '<< Previous' ); ?>
							<?php next_posts_link( 'Next >>', $tag_query->max_num_pages ); ?>
						</div>

					    <?php wp_reset_postdata(); ?>

					    <?php else : ?>
					        <?php _e( 'Sorry, no posts match this criteria.', 'textdomain' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	
<?php include('tagcloud.php'); ?>

<?php get_footer(); ?>

	</body>
</html>