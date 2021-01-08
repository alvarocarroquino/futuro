<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package MARINAVIBOT
 */

get_header();
?>

<body>

<div class="movil">
	<p>
PLEASE ROTATE YOUR DEVICE :-)

</p>



</div>
<div class="menu">
	<span>
	<a href="<?php echo site_url('/projects'); ?>"> PROJECTS </a>
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






</div>



<div id="fullPage">

<div class="buttonmore">

<a href="<?php echo site_url('/projects'); ?>">
<img  src="<?php echo get_template_directory_uri(); ?>/images/BOTON_SEEALL.png"  > 
</a>
</div>

    <div class="slide">
		

		<div class="main-carousel" data-flickity='{ "cellAlign": "right", "contain": true , "autoPlay": 3500 }'>

				<div class="carousel-cell">

						
					<?php query_posts('post_type=videointro'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php 
											$image = get_field('imagen1');
											
											if( !empty( $image ) ): ?>
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>
											
						<?php endwhile; endif; ?>
									<p>
									
			<a href="<?php echo site_url('/sala-de-las-ideas-2'); ?>"> SALA DE LAS IDEAS. MINISTERIO DE CULTURA. </a>
			
									</p>
				</div>
				<div class="carousel-cell">
				<?php query_posts('post_type=videointro'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php 
											$image = get_field('imagen2');
											
											if( !empty( $image ) ): ?>
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>
											
						<?php endwhile; endif; ?>
									<p>
									<a href="<?php echo site_url('/tombolo'); ?>"> TOMBOLO ART DIRECTION. </a>
									</p>



				</div>
				<div class="carousel-cell">
				<?php query_posts('post_type=videointro'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php 
											$image = get_field('imagen3');
											
											if( !empty( $image ) ): ?>
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>
											
						<?php endwhile; endif; ?>
									<p>
									<a href="<?php echo site_url('/veneno'); ?>"> VENENO EXHIBITION. </a>
									</p>



				</div>
				<div class="carousel-cell">
				<?php query_posts('post_type=videointro'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php 
											$image = get_field('imagen4');
											
											if( !empty( $image ) ): ?>
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>
											
						<?php endwhile; endif; ?>
									<p>
									<a href="<?php echo site_url('/technologies-of-enchantment'); ?>"> TECHNOLOGIES OF ENCHANTMENT. GASWORKS LONDON </a>
									</p>



				</div>
				<div class="carousel-cell">
				<?php query_posts('post_type=videointro'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php 
											$image = get_field('imagen5');
											
											if( !empty( $image ) ): ?>
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>
											
						<?php endwhile; endif; ?>
									<p>
									<a href="<?php echo site_url('/nodo-invisible'); ?>"> NODO INVISIBLE. MATADERO MADRID </a>
									</p>



				</div>
				<div class="carousel-cell">
				<?php query_posts('post_type=videointro'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php 
											$image = get_field('imagen6');
											
											if( !empty( $image ) ): ?>
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>
											
						<?php endwhile; endif; ?>
									<p>
									<a href="<?php echo site_url('/sala-de-las-ideas-2'); ?>"> GAIA GUARDIANS.THYSSEN-BORNEMISZA NATIONAL MUSEUM  </a>
									</p>



				</div>
				



		</div>



    </div>

	<div class="section s1">
		<div class="container1" class="boldbig" >
		<p>
		WE TRANSFORM IDEAS INTO OBJECTS OF DESIRE
		</p>

		</div>







		<div class=" bannertop">

			<img src="<?php echo get_template_directory_uri(); ?>/images/futurostudio_white.png" />



		</div>
		<div class="bannertopright">
			
		</div>
	</div>


	<div class="section s2">

			<div class="tittle">

					<p> MADRID BASED </p>
					<p> CREATIVE OFFICE </p>
					<p> OUR FOCUS IS TOTAL DESIGN </p>
			
			</div>
			<div class="tittlemovil">

					<p> MADRID BASED CREATIVE OFFICE. OUR FOCUS IS TOTAL DESIGN </p>
			
			</div>
			<div class="banner21">
				<div class="t21_1">
				Graphic and industrial, architecture, brand experience, editorial and beyond culture. Our Craftiness and vission lead us to embody projects with an artistic approach. 
				</div>
				<div class="t21_2">
				FUTURO.STUDIO was founded in 2018 by three architects, Jose A. Miguel, Guillermo Blasco & Álvaro Carroquino. Born at the heart of Madrid's independent underground scene around music, culture and arts.
			</div>

			</div>
		<div class="banner2">
			
				<div class="boton1" onclick="playVid()"></div>
				<div class="boton2" onclick="pauseVid()"></div>
		
		</div>
		<div class="videointro">
	
				<video id="vid"  class="video" autoplay  muted loop>

				<source type="video/mp4" src="https://archive.org/download/video_proy_02_202101/video_PROY_02.mp4"> </source>

				</video>

			

				<script> 
				var vid = document.getElementById("vid"); 

				function playVid() { 
				vid.play(); 
				} 

				function pauseVid() { 
				vid.pause(); 
				} 
				</script> 

		</div>

<div class="buttonvid">

<a href="<?php echo site_url('/featured'); ?>">
<img  src="<?php echo get_template_directory_uri(); ?>/images/white.png"  > 
</a>
</div>

		<div class="bannerfooter">
		<img src="<?php echo get_template_directory_uri(); ?>/images/FS_white.png" />

		</div>




	</div>



			



</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.js"> </script>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script>

new fullpage('#fullPage',{    
	autoScrolling: true

})



</script>







</body>