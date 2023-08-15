
<?php get_header() ?>

<?php

	if (is_page('home')) {
		include('pages/home.php');
	}
	 
	if (is_page('artists')) {
		 $args = array(  
		     'post_type' => 'artist',
		 );

		 $loop = new WP_Query( $args ); 
		     
		 while ( $loop->have_posts() ) : $loop->the_post(); 
		     include('cards/artist-card.php');
		 endwhile;

		 wp_reset_postdata(); 
	}

	if (is_page('pieces')) {
		 $args = array(  
		     'post_type' => 'piece',
		 );

		 $loop = new WP_Query( $args ); 
		     
		 while ( $loop->have_posts() ) : $loop->the_post(); 
		     include('cards/piece-card.php');
		 endwhile;

		 wp_reset_postdata(); 
	}

	if (is_singular('artist')) {
		include('pages/artist-detail.php');
	}

	if (is_singular('piece')) {
		include('pages/piece-detail.php');
	}
?>

<?php get_footer() ?>
