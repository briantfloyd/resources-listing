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
		<div class="container-fluid white-bg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<?php the_archive_title( '<h2 class="heavy uppercase">', '</h2>' ); ?>

						<?php if ( have_posts() ) : ?>
						    <?php while ( have_posts() ) : the_post(); ?>

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

						    <?php endwhile; ?>
						    <?php else : ?>
						        <?php _e( 'Sorry, no posts match this criteria.', 'textdomain' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Tag listing -->
		<div class="container-fluid blue-bg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<a name="tags"></a>
						<h2 class="heavy uppercase white">Tags</h2>
						
						<?php $taglistargs = array(
							'smallest'                  => 10, 
							'largest'                   => 10,
							'unit'                      => 'px', 
							'number'                    => 30,  
							'separator'                 => " | </li><li>",
						); ?>

						<ul class="list-inline tag-listing uppercase">
							<li>
								<?php wp_tag_cloud( $taglistargs ); ?>
							</li>
						</ul>	
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>

	</body>
</html>