<article class="artist">
	<h2 class='name'><?php the_field('name') ?></h2>
	<picture class="portrait"><img src="<?php the_field('portrait') ?>" alt=""></picture>
	<p class="teaser"><?php the_field('teaser')?></p>
	<a href="<?php the_permalink(); ?>">Click for more info</a>
</article>