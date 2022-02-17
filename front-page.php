    <!-- wordpress header -->
	<?php
	get_header();
	?>
	
	<!-- wordpress body -->
	<?php
		if( have_posts() ){

			while( have_posts() ){

				the_post();
				the_content();
			}
		}
		?>
	    </article>

		<article class="content px-3 py-5 p-md-5">
		<section class="theme-bg-dark py-5 mt-4 text-center">
				<h3 class='text-light d-block'>Subscribe to the Newsletter</h3>
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
				</section>
		<div class="row row-cols-1 mt-4 row-cols-md-2">
				<div class="col mb-4">
				  <div class="card">
					<div class="card-body">
					  <h5 class="card-title">Card title</h5>
					  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
				  </div>
				</div>
				<div class="col mb-4">
				  <div class="card">
					<div class="card-body">
					  <h5 class="card-title">Card title</h5>
					  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
				  </div>
				</div>
			</div>
<!--wordpress footer  -->
   <?php
	get_footer();
   ?>