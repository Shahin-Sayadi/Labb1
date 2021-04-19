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
						<div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
							<h1><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>
							
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
							<ul class="side-menu">
								
                                <?php wp_nav_menu([
                                    'container' => false,
                                    'menu_class' => 'side-menu',
                                    'theme_location' => 'undersida-menu'
                                ]) ?>
								
							
						</aside>
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