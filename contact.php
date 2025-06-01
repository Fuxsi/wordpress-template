<?php /* Template Name: Kontakt */ ?>
<?php get_header(); ?>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="container"> 
 
             <section id="contact"<?php the_field("Formularz"); ?>>
                <h2>Skontaktuj się ze mną!</h2>
                    <form action="action.php" method="post">
                        <h3>Napisz do mnie na maila</h3>
                        <p><a href="#">📧</a></p>
                        <button type="submit">Wyślij</button>
                        <button type="reset">Resetuj</button>
                    </form>
                    <h3>Sprawdź moje sociale!</h3>
                        <p><a href="#" class="a">LinkedIn</a></p>
                        <p><a href="#" class="b">Facebook</a></p>
                        <p><a href="#" class="c">GitHub</a></p>
            </section>
           
</div>
	<?php endwhile; ?>
	<?php the_posts_pagination( array(
		'prev_text'          => __( '<' ),
		'next_text'          => __( '>' ),
	) );
	?>
	<?php else : get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<?php get_footer(); ?>



