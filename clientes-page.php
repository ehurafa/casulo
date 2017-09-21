<?php
/**
 * Template Name: Clientes
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
		
		<!-- clientes -->
		<section class="pagina-clientes">
			<div class="container">
				<div class="desc">
					<h3>
						<span>Design como estratégia de negócios.</span> Veja alguns trabalhos
					</h3>
				</div>
			</div>	

			<div class="content">
				<!-- clientes widget -->
				<div class="clientes-widget">  
					<?php 
					$query = new WP_Query( array( 'post_type'       => 'cliente-item',
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


						<li >							
							<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>" alt="<?php the_title(); ?>"  />
						</li>

						<?php endwhile; wp_reset_postdata(); ?>	

					</ul>  		

				</div>
				<!-- /clientes widget -->
			</div>

			
		  
		  </section>
		  <!-- /clientes -->
		
			
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
	
