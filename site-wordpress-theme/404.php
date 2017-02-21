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
						<h2 class="heavy uppercase">Page cannot be found.</h2>

						<p>I'm sorry! It looks like something may have moved or be missing.</p>
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