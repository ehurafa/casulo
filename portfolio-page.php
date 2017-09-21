<?php
/**
 * Template Name: Portfólio
 *
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Casulo
 * @author VitaminaWeb
 * @developer Rafael Gomes @ehurafa
 * @since Casulo 1.0
 */
get_header();
?>

	<!-- interna -->
	<section class="interna">
    
		<!-- barra sub-menu -->
			<div class="barra-submenu"></div>
		<!-- /barra sub-menu -->
		
		<!-- portfolio -->
	<section class="portfolio">
		<div class="container">
			<div class="desc">
				<h3>
					<span>Design como estratégia de negócios.</span> Veja alguns trabalhos
				</h3>
			</div>
		</div>		

		<!-- portfolio widget -->
		<div class="portfolio-widget">  
			<?php 
			$query = new WP_Query( array( 'post_type'       => 'portfolio-item',
					  'posts_per_page'  => -1,
					  'orderby'         => 'date',
					  'order'           => 'DESC' ) );

			?>

			<ul  class="gallery" >

				<?php while( $query->have_posts() ) : $query->the_post(); ?>

				<?php 

				$url = get_field( 'url' );
				$url = strpos($url, 'http') !== true ? 'http://' . $url : $url;

				?>


				<li data-iframe="true" data-src="<?php echo $url; ?>" class="iframe" >
					<span></span>
					<a href="#"  title="<?php the_title(); ?>"> 
						<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>" alt="<?php the_title(); ?>"  class="transition" />
					</a>		

				</li>

				<?php endwhile; wp_reset_postdata(); ?>	

			</ul>  		

		</div>
		<!-- /portfolio widget -->
	  
	  </section>
	  <!-- /portfolio -->
		
			
		<!-- barra fixa -->
		<div class="barra-fixa-bottom">
			<div class="container">
				<a class="btn laranja transition" href="javascript:void(0)" title="peça sua apresentação">peça sua apresentação</a>
			</div>
		</div>
		<!-- /barra fixa -->
  
	</section>
	<!-- /interna -->  
	
	

	  
	  

	<?php include(TEMPLATEPATH . '/footer-internas.php'); ?>
	
