<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_header(); ?>

	<body>
		<!-- Navbar -->
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container-fluid green-bg">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand heavy uppercase" href="#">Resources</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-collapse-1">
						<ul class="nav navbar-nav">
							<!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
							<li><a href="#"><span class="nav-links-underline">Assets</span></a></li>
							<li><a href="#"><span class="nav-links-underline">Tools</span></a></li>
							<li><a href="#"><span class="nav-links-underline">Documentation</span></a></li>
							<li><a href="#tags"><span class="nav-links-underline">Tags</span></a></li>
							<li class="navbar-right"><a href="#submit" class="btn btn-default navbar-btn heavy uppercase submit-button orange-bg">Submit resource</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</div><!-- /.container-fluid -->
		</nav> 
	
		<!-- Title banner -->
		<div class="container-fluid title-bg">
			<div class="container">	
				<h1 class="heavy uppercase white">Resources<br /><span class="light h1-small">for design and development</span></h1>
			</div>
		</div>
	
		<!-- Resource listing -->
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<h2 class="heavy uppercase">Assets</h2>

						<?php $assetsquery = new WP_Query( array( 'tag' => 'assets', 'posts_per_page' => 5 )); ?>

						<?php if ( $assetsquery->have_posts() ) : ?>
						    <?php while ( $assetsquery->have_posts() ) : $assetsquery->the_post(); ?>

								<div class="listing-block">
									<p>
										<a href="<?php echo get_post_meta( get_the_ID(), 'webaddress', true ); ?>"><?php the_title(); ?></a>
									</p>
									<p>
										<?php the_tags( '<span class="listing-tag uppercase">', '</span> <span class="listing-tag uppercase">', '</span> ' ); ?>
										<a class="listing-update" href="">Report / Update</a>
									</p>		
								</div>

						    <?php endwhile; ?>
						    <?php wp_reset_postdata(); ?>
						    <?php else : ?>
						        <?php _e( 'Sorry, no posts match this criteria.', 'textdomain' ); ?>
						<?php endif; ?>

						<a href="#" class="btn btn-default btn-body heavy uppercase green-bg">More assets</a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<h2 class="heavy uppercase">Tools</h2>
				
						<div class="listing-block">
							<p>
								<a href="">Bootstrap &middot; The world's most popular mobile-first and responsive front-end framework.</a>
							</p>
							<p>
								<span class="listing-tag uppercase">bootstrap</span><a class="listing-update" href="">Report / Update</a>
							</p>		
						</div>

						<div class="listing-block">
							<p>
								<a href="">Adobe Color CC</a>
							</p>
							<p>
								<span class="listing-tag uppercase">color</span><a class="listing-update" href="">Report / Update</a>
							</p>		
						</div>

						<div class="listing-block">
							<p>
								<a href="">ImageOptim — better Save for Web</a>
							</p>
							<p>
								<span class="listing-tag uppercase">compression</span><a class="listing-update" href="">Report / Update</a>
							</p>		
						</div>
					
						<a href="#" class="btn btn-default btn-body heavy uppercase green-bg">More tools</a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<h2 class="heavy uppercase">Documentation</h2>
				
						<div class="listing-block">
							<p>
								<a href="">Access Technology | National Federation of the Blind</a>
							</p>
							<p>
								<span class="listing-tag uppercase">accessibility</span><a class="listing-update" href="">Report / Update</a>
							</p>		
						</div>

						<div class="listing-block">
							<p>
								<a href="">Designing Accessible Web Forms - American Foundation for the Blind</a>
							</p>
							<p>
								<span class="listing-tag uppercase">web forms</span><a class="listing-update" href="">Report / Update</a>
							</p>		
						</div>

						<div class="listing-block">
							<p>
								<a href="">e-Books</a>
							</p>
							<p>
								<span class="listing-tag uppercase">ux</span><a class="listing-update" href="">Report / Update</a>
							</p>		
						</div>

						<a href="#" class="btn btn-default btn-body heavy uppercase green-bg">More documentation</a>
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
	
		<!-- Submission form -->
		<div class="container-fluid orange-bg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<a name="submit"></a>
						<h2 class="heavy uppercase white">Submit Resource</h2>
					</div>
				</div>
				<div class="row">
					<form>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="form-group">
								<label for="resourceUrl" class="light h3-light white uppercase">Web address</label>
								<input type="url" class="form-control" id="resourceUrl" placeholder="Enter website URL">
							</div>
							<div class="form-group">
								<label for="resourceTitle" class="light h3-light white uppercase">Title</label>
								<textarea rows="3" class="form-control" id="resourceTitle" placeholder="Edit website title" disabled></textarea>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="form-group">
								<legend class="light h3-light white uppercase">Categorize</legend>
								<label for="assetCategory"><input type="checkbox" value="" id="assetCategory">Asset</label>
								<label for="toolCategory"><input type="checkbox" value="" id="toolCategory">Tool</label>
								<label for="documentationCategory"><input type="checkbox" value="" id="documentationCategory">Documentation</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="form-group">
								<label for="tagSelection" class="light h3-light white uppercase">Tag</label>
								<select class="form-control" id="tagSelection">
									<option selected="selected" disabled>Choose tag:</option>
									<option>Accessibility</option>
									<option>Web forms</option>
									<option>Bootstrap</option>
								</select>
								<button type="button" class="btn btn-default btn-sm heavy uppercase dark-gray-bg">Add tag</button>
							</div>
							<div>
								<ul class="list-inline tag-listing uppercase">
									<li>Accessibility <a href="">Remove tag</a></li>
									<li>Web forms <a href="">Remove tag</a></li>
								</ul>
							</div>
							<div>
								<button type="submit" class="btn btn-default btn-body btn-block heavy uppercase dark-gray-bg">Submit resource now</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

<?php get_footer(); ?>

	</body>
</html>