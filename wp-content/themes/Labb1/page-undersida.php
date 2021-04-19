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

        <?php 
         while ( have_posts() ) {
            the_post();
        ?>
            <!-- startar loop -->
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>
							
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<ul class="side-menu">
								
                                <?php wp_nav_menu([
                                    'container' => false,
                                    'menu_class' => 'side-menu',
                                    'theme_location' => 'undersida-menu'
                                ]) ?>
								<!-- tar fram sido menyn -->
						
							</ul>
						</aside>
					</div>
				</div>
			</section>
		</main>

        <?php    
        }
        ?>
        <?php get_footer(); ?>