<?php 
get_header();
?>


<main>
<?php 
         while ( have_posts() ) { 
            the_post();
        ?>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<article>
								<img src="<?php the_post_thumbnail_url(); ?>">
								<h1 class="title"><?php 
                                        the_title();
                                    ?></h1>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i>   <?php 
                                    echo get_the_date();
                                    ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="forfattare.html"><?php 
                                    the_author_posts_link();
                                    ?></a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="kategori.html">
										<?php 
                                	the_category(','.' '); /* laddar fram kategorierna */
                                	?>
										</a>
									</li>
								</ul>
                                <p>
                                    <?php 
                                        the_content();
                                    ?>
                                </p>


							</article>
						</div>
                        <?php 
                                }
                             
                            ?>


						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								
								<ul>					
											<?php 
										dynamic_sidebar('home-sidebar');
                            				?>								
								</ul>
						
		
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>

<?php 
get_footer();
?>