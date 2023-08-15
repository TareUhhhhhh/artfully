<!-- THIS IS FOR THE LIST PAGE -->

<article class="piece">
	<h2 class="title"><?php the_field('title') ?></h2>
	<h3 class="medium"><?php the_field('medium') ?></h3>
	<picture class="artwork"><img src="<?php the_field('image') ?>" alt=""></picture>
	<p class="teaser"><?php the_field('teaser') ?></p>
	<a href="<?php the_permalink(); ?>">Click for more info</a>
</article>

<?php
$artist = get_field('artist');
if( $artist ): ?>
    <?php foreach( $artist as $post ): 

     // Setup this post for WP functions (variable must be named $post).
     setup_postdata($post); ?>
         <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php endforeach; ?>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>