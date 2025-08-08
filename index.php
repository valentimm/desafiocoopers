<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DesafioCoopers
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
	<body>
		    <div class="hero-content">
    	<div class="hero-text">
        	<h1 class="hero-title"> Organize </h1>
        	<h2 class="hero-subtitle"> your daily jobs </h2>
        	<p class="hero-description"> The only way to get things done. </p>
        	<button class="btn btn-primary"> Meet the To-do list </button>
		</div>
        <div class="image-container">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-photo.svg' ); ?>" alt="Hero Image" class="hero-image">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/background-decoration1.svg' ); ?>" alt="Icone Coopers como detalhe no banner" class="decoration1">
        </div>
    </div>
    <div class="todo-container">
        <h1 class="todo-title"> To-do List </h1>
        <p class="todo-description"> Choose the right plan for you and get in touch through our contact form. We are here to help. </p>
    </div>
	</body>

<?php
get_sidebar();
get_footer();
