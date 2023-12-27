<?php
	$args = array(
		'post_type' => 'events',
		'posts_per_page' => 2,
	);
	$query = new WP_Query($args);
?>

<div class="event_wrapper">
	<?php if ( $query->have_posts() ) : ?>
		<ul>
	<?php while ( $query->have_posts() ) : $query->the_post();?>
			<li>
				<?php the_post_thumbnail('medium') ?>
				<div class="eventbox">
					<div class="eventcat"><?php the_field('genre');?></div>
					<div class="eventcont"><a href="<?php the_permalink() ?>"><?php the_content(); ?></a></div>
				</div>
			</li>
	<?php endwhile; ?>
		</ul>
	<?php endif; wp_reset_postdata(); ?>
</div>