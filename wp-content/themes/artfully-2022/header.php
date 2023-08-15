<!doctype html>

<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<title><?php echo wp_get_document_title(); ?></title>
		<meta name='description' content='Art Done Fully'>
		<meta property='og:image' content='images/default.png'>
		<?php wp_head() ?>
	</head>

	<body <?php body_class();?> >
		<header>
			<div class="inner-column">
				<?php include('site-menu.php'); ?>
				<!-- <nav>
					<a href="?page=home">Home</a>
					<a href="?page=projects">Projects</a>
					<a href="?page=contact">Contact</a>
					<a href="?page=create">Add Your Creations!</a>
				</nav> -->
			</div>
		</header> 

		<main>
		<div class="inner-column">