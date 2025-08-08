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
acf_form_head();
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

	    <section class="plan-section">
        <div class="plan-container">
            <div class="plan-item">
                <h1 class="plan-price"> R$ 20 / mês </h1>
                <p class="plan-description"> Basic Plan <br>
                <strong>unlimited tasks</strong></p>
                <ul class="plan-features">
                    <li class="included">Create to-do lists</li>
                    <li class="included">Share lists via WhatsApp</li>
                    <li class="excluded">Offline mode</li>
                    <li class="excluded">Invite colaborators</li>
                    <li class="excluded">Dark mode</li>
                </ul>
                <button class="btn btn-plan">get in touch</button>
            </div>
            <div class="plan-item">
                <h1 class="plan-price"> R$ 30 / mês </h1>
                <p class="plan-description"> Pro Plan <br>
                <strong>unlimited everything</strong></p>
                <ul class="plan-features">
                    <li class="included">Create to-do lists</li>
                    <li class="included">Share lists via WhatsApp</li>
                    <li class="included">Offline mode</li>
                    <li class="included">Invite colaborators</li>
                    <li class="included">Dark mode</li>
                </ul>
                <button class="btn btn-plan">get in touch</button>
            </div>
        </div>
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/background-decoration2.svg' ); ?>" alt="Icone Coopers como detalhe no banner" class="decoration2">
    </section>
		<div class="propaganda-container">
		    <div class="propaganda-background">
		        <h1 class="propaganda-title"> good things </h1>
		        <div class="swiper propaganda-image-container">
		            <div class="swiper-wrapper">
		                <div class="swiper-slide propaganda-item">
		                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/propaganda1.svg' ); ?>" alt="Propaganda 1" class="propaganda-image">
		                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon-coopers.svg' ); ?>" alt="Icone Coopers" class="propaganda-icon-coopers">
		                    <span class="propaganda-attribute"> function</span>
		                    <p class="propaganda-description"> Organize your daily job enhance your life performance</p>
		                    <p class="read-more"> read more </p>
		                </div>
		                <div class="swiper-slide propaganda-item">
		                     <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/propaganda2.svg' ); ?>" alt="Propaganda 2" class="propaganda-image">
		                     <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon-coopers.svg' ); ?>" alt="Icone Coopers" class="propaganda-icon-coopers">
		                     <span class="propaganda-attribute"> function</span>
		                     <p class="propaganda-description"> Mark one activity as done makes your brain understands the power os doing.</p>
		                     <p class="read-more"> read more </p>
		                </div>
		                <div class="swiper-slide propaganda-item">
		                     <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/propaganda3.svg' ); ?>" alt="Propaganda 3" class="propaganda-image">
		                     <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon-coopers.svg' ); ?>" alt="Icone Coopers" class="propaganda-icon-coopers">
		                     <span class="propaganda-attribute"> function</span>
		                     <p class="propaganda-description"> Careful with misunderstanding the difference between a list of things and a list of desires.</p>
		                     <p class="read-more"> read more </p>
		                </div>
		                <div class="swiper-slide propaganda-item">
		                     <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/propaganda1.svg' ); ?>" alt="Propaganda 4" class="propaganda-image">
		                     <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon-coopers.svg' ); ?>" alt="Icone Coopers" class="propaganda-icon-coopers">
		                     <span class="propaganda-attribute"> function</span>
		                     <p class="propaganda-description"> A new description for the fourth slide to make it unique.</p>
		                     <p class="read-more"> read more </p>
		                </div>
		                <div class="swiper-slide propaganda-item">
		                     <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/propaganda2.svg' ); ?>" alt="Propaganda 5" class="propaganda-image">
		                     <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon-coopers.svg' ); ?>" alt="Icone Coopers" class="propaganda-icon-coopers">
		                     <span class="propaganda-attribute"> function</span>
		                     <p class="propaganda-description"> And a final unique description for the fifth amazing slide.</p>
		                     <p class="read-more"> read more </p>
		                </div>
		            </div>
		            <div class="swiper-pagination-custom">
		                <span class="swiper-pagination-bullet"></span>
		                <span class="swiper-pagination-bullet"></span>
		                <span class="swiper-pagination-bullet"></span>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="contact-container">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-form.svg' ); ?>" alt="Foto acima do formulário de contato" class="contact-image">
            <div class="form-green-bar"></div>
            <div class="title-form">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon-mail.svg' ); ?>" alt="Icone de envelope" class="icon-mail">
                <h1 class="title-text-form">GET IN <strong>TOUCH</strong></h1>
            </div>
            <?php
            acf_form([
                'post_id' => 'new_post',
                'new_post' => [
                    'post_type' => 'contact',
                    'post_status' => 'publish',
                ],
                'field_groups' => ['group_6895f87f6902b'],
                'submit_value' => 'SEND NOW',
                'html_submit_button' => '<button type="submit" class="btn btn-submit">%s</button>',
            ])
            ?>

        </div>
	</body>

<?php
get_sidebar();
get_footer();
