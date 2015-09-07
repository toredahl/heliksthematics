<?php get_header(); ?>
	
	
	<section class="row">
		<div class="small-12 columns text-center">
			<div class="leader">
				<!-- <h1>Etiam Mollis Sit Gratt Spore.</h1>
				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue.</p>         -->

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>

				<?php endwhile; else : ?>
					<p><?php _e( 'Beklager, ingen post i dag.' ); ?></p>
				<?php endif; ?>
        	</div>
      	</div>
    </section>



<?php get_footer(); ?>



