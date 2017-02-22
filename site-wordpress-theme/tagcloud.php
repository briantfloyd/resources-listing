		<!-- Tag listing -->
		<div class="container-fluid blue-bg section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h2 class="heavy uppercase white">Tags</h2>
						
						<?php $taglistargs = array(
							'smallest'                  => 10, 
							'largest'                   => 10,
							'unit'                      => 'px', 
							'number'                    => 30,  
							'separator'                 => " | </li><li>",
						); ?>

						<ul class="list-inline tag-listing tag-listing-blue-bg uppercase">
							<li>
								<?php wp_tag_cloud( $taglistargs ); ?>
							</li>
						</ul>	
					</div>
				</div>
			</div>
		</div>