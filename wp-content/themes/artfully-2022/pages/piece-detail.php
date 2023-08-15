<!-- THIS IS THE INDIVIDUAL PIECE DETAIL PAGE -->

Get artist data from CPT (relationship field -- object)
Get name from object -- ['post_title']


<?php
	$artists = get_field('artist');

	foreach ($artists as $artist) {
		$artistName = $artist->post_title;
	}
?>

<section class="piece-detail">
	<h2 class="title"><?php the_field('title') ?></h2>
	<h3 class="artist-name"><?=$artistName?></h3>
	<h4 class="medium"><?php the_field('medium') ?></h3>
	<picture class="artwork"><img src="<?php the_field('image') ?>" alt=""></picture>
	<p class="description"><?php the_field('description') ?></p>
</section>