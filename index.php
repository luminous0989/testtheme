    <!-- wordpress header -->
	<?php
	get_header();
	?>
	
	<article class="content px-3 py-5 p-md-5">
	<!-- wordpress body -->
	<?php
		if( have_posts() ){

			while( have_posts() ){

				the_post();
				get_template_part( 'template-parts/content', 'archive' );
			}
		}
		?>
         
         <?php the_posts_pagination(); ?>
              
	</article>

    
<!--wordpress footer  -->
   <?php
	get_footer();
   ?>