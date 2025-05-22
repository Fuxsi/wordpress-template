<?php /* Template Name: Strona główna */ ?>
<?php get_header(); ?>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moje portoflio</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div id="container">
            <header>
                <h1>Cześć! Nazywam się Adrianna Paluszak</h1>
                <p>Front-end Developer / Projektant UI/UX.</p>
                <p>Poza tym miłośniczka kotów.</p>
            </header>
        <br>
        <hr>
            <section id="projects">
                <h2>Moje projekty</h2>
                <ul>
                    <li><a href="#">🐱</a>Projekt 1 - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, placeat.</li>
                    <li><a href="#">🐱</a>Projekt 2 - Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus, esse?</li>
                    <li><a href="#">🐱</a>Projekt 3 - Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, porro!</li>
                </ul>
            </section>
        <br>
       
    </div>
	<?php endwhile; ?>
	<?php the_posts_pagination( array(
		'prev_text'          => __( '<' ),
		'next_text'          => __( '>' ),
	) );
	?>
	<?php else : get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
