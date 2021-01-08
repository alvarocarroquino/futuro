<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package futurostudio
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>











<div class="movil">
	<p>
PLEASE ROTATE YOUR DEVICE :-)

</p>
</div>

<div class="buttonvisual">

<a href="<?php echo site_url('/references'); ?>">
<img  src="<?php echo get_template_directory_uri(); ?>/images/visualback.png"  > 
</a>
</div>



<div class="menu">
	<span>
	<a href="<?php echo site_url('/'); ?>"> HOME </a>
	</span>

	<a href="<?php echo site_url('/about'); ?>"> ABOUT </a>

	<a href="<?php echo site_url('/souvenir'); ?>">SOUVENIR MAGAZINE</a>


		<a href="https://radiorelativa.eu/">RADIO</a>



</div>
<div class="bannerdown">
	<div class="bd1">
		<a href="mailto:futuro@futuro.studio"> 
			<p> contact: </p>
			<p> futuro@futuro.studio </p>

		</a>
		<p>+34 678233178 </p>

	</div>
	<div class="bd2">
		<a href="https://www.google.com/maps/place/futuro.studio/@40.3931689,-3.7083115,15z/data=!4m5!3m4!1s0x0:0x3cddd0127963995b!8m2!3d40.3931689!4d-3.7083115"> 
			<p> Office & workspace at C/ Marqués de Jura Real 9 Posterior, Madrid, Spain </p>
			
		</a>

	</div>
	<div class="bd3">
		<a href="https://www.instagram.com/futuro.studio/"> 
			<p> Follow us: </p>
			<p> Instagram </p>
			
		</a>
		<p> futuro.studio©2020 </p>


	</div>
	<div class="bd1movil">
			<p> 
			<a href="<?php echo site_url('/contact'); ?>"> CONTACT US </a>
			</p>

	

	</div>

	<div class="bannerfooterpage">
		<img src="<?php echo get_template_directory_uri(); ?>/images/FS_white.png" />

		</div>






</div>






	</main><!-- #main -->


    <div class="backto">

    <a href="<?php echo site_url('/projects'); ?>"> BACK TO PROJECTS </a>
    </div>
<div class="clientlist">
    <div class="clienttitle">
        <h1>
        CLIENTS
        </h1>
        
    </div>
    <p>
        CAMPER
        </P>
        <p>
        RPG
        </P>
    <?php 
				$wp_query = new WP_Query(array('posts_per_page' => 50));
                while ($wp_query->have_posts()) : $wp_query->the_post();?>
                
                <a href="<?php the_permalink(); ?>">
													
												
											

							
													<p> <?php if( get_field('client') ): ?>
																	<p><?php the_field('client'); ?>
															<?php endif; ?></p></h1>
													</a>


                <?php endwhile;
                ?>
                

</div>

<div class="services">

    <div class="servicestitle">
    <h1>
    INDEX BY SERVICES 
    </h1>

    </div>
    <div class="servcontainer">
    <?php

            $args = array(

            'showposts' => 50,
                'order'   => 'DESC',
            
            );

            $categories = get_categories( $args );

            foreach ( $categories as $category ) {

                echo '<h2>' . $category->name . '</h2>';

                $args['category'] = $category->term_id;
                $posts = get_posts($args); ?>

                <div class="post-container">
                    <?php foreach($posts as $post) { ?>
                    <p>   <a href="<?php the_permalink(); ?>">  <?php the_title(); ?> </a> <?php echo $item_price; ?>
                    </p>
                
                    <?php  } ?>
                </div>
        <?php } ?>



     <div class="concepts">
     <div class="servicestitle">
    <h1>
    COMMON CONCEPTS
    </h1>

    </div>
    <p>
DESIRE

        <p>

        <p>
EXPERIMENTAL RADIO

        <p>
        <p>
SOUVENIR
        <p>
        <p>
CONTRADICTION
        <p>
        <p>
CLUB CULTURE
        <p>
        <p>
LABERYNTH
        <p>
        <p>
HIP HOP
        <p>
        <p>
SENSE OF BELONGING
        <p>
        <p>
COLLABORATION
        <p>
        <p>
SYMBOLISM
        <p>
        <p>
ARCHITECTURE RUINS
        <p>


      </div>
 </div>
  
