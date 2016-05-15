
<!-- Loop for showing posts from CPT -->

<?php $query = new WP_Query( array( 'post_type' => array( 'projects' ) ) ); while ( $query->have_posts() ) : $query->the_post(); ?>	<div class="row home-projects small-up-1 medium-up-2 large-up-2">
		<a href="<?php the_permalink(); ?>">
			<h4 align="center"><?php the_title(); ?></h4>
			<?php the_post_thumbnail('blog-thumb', array( 'class' => "wp-post-image-arch")); ?>
		</a>
	</div>					
<?php endwhile; ?>