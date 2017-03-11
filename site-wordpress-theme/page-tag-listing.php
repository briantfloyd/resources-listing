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
						<h2 class="heavy uppercase">All tags</h2>

						<ul class="list-inline tag-listing text-capitalize">
							
							<?php $taglistarrayargs = array(
									'smallest'                  => 14, 
									'largest'                   => 14,
									'unit'                      => 'px', 
									'number'                    => 0,  
									'separator'                 => ' | </li><li>',
									'format'					=> 'array'
								);

								$tags = wp_tag_cloud( $taglistarrayargs );

								$tag_total = sizeof( $tags );

							 	for ( $tag = 0; $tag < $tag_total; $tag++ ) {

									$args = array(
										'tag' => strip_tags( $tags[$tag] )
									);

									$num = count( get_posts( $args ) );	

									echo '<li>' . $tags[$tag] . ' ' . $num . '</li>';
							 	}
							
							?>

						</ul>

					</div>

				</div>
			</div>
		</div>

<?php include('tagcloud.php'); ?>

<?php get_footer(); ?>

	</body>
</html>