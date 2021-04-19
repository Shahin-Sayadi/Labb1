<?php get_header(); ?>
<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

        <?php  while ( have_posts() ) {
            the_post();
        ?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">
                            <h1><?php the_title(); ?></h1>
						    <p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
			</section>
		</main>
        <?php 
			}
        ?>
        <?php
get_footer();
?>