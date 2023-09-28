
<?php
/*
 * Template Name: No Sidebar: Full Width
 *
 * Template Post Type: post, page
 *
 * The template for displaying Page/Post with No Sidebar, Full Width
 *
 * @package Signify
 */
get_header(); ?> 

	

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
			<div class="singular-content-wrap-fluid">
						
			</div>
            <div class="singular-content-wrap">
                <?php
                while ( have_posts() ) : the_post();

                    $template = 'single';

                    if ( is_page('home') ) {
                        $template = 'page';
							?><!--
							<div style="margin:20px 0">
						<div class="wp-block-columns">
							<div class="wp-block-column"style="background-color:black;border-radius: 10px;border:1px white solid">
								<div class="frame">
								  <div class="center">
								  <h5 style="margin-top:5px">Total Jackpot</h5>
									<span id="odometer"></span>
								  </div>
								</div>
							</div>
							<div class="wp-block-column">
								<marquee width="100%" direction="left">
								ne*****og - Amount : 3,374,297.50 | ma*****7 - Amount : 1,903,442.39 | el*****o - Amount : 1,373,937.50 | je*****ja - Amount : 1,314,657.63
								</marquee>
							</div>
						</div>
						</div> -->
							<?php
						the_content(__('(more...)'));
                    }else{
                    get_template_part( 'template-parts/content/content', $template );

                    get_template_part( 'template-parts/content/content', 'comment' );
					}
					
                endwhile;// End of the loop.
				
						
					
                ?>
				
	
				
				
				
                </div> <!-- singular-content-wrap -->
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
