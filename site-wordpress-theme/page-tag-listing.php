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

						<?php $taglistargs = array(
							'smallest'                  => 14, 
							'largest'                   => 14,
							'unit'                      => 'px', 
							'number'                    => 0,  
							'separator'                 => " | </li><li>",
						); ?>

						<ul class="list-inline tag-listing text-capitalize">
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