<?php
/**
 * Template Name: Página inicial
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



      <!-- slider -->
      <section id="slider">      
       
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('slider-home') ) : ?><?php endif; ?>  
      
      </section>
      <!-- /slider -->

      <!-- portfolio widget -->
      <section class="portfolio-widget">  
	
	  
		<?php 

            $query = new WP_Query( array( 'post_type'       => 'portfolio-item',
                                          'posts_per_page'  => 16,
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
		
      </section>
      <!-- /portfolio widget -->  
	  

      <!-- carrossel clientes widget -->
      <section class="carrossel-clientes-widget">
        <div class="container">
           <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('carrossel-clientes') ) : ?><?php endif; ?>
        </div>        
      </section>
      <!-- /carrossel clientes widget -->

      <!-- home blog - depoimentos -->
      <section class="home-blog-depoimentos">
        <div class="container">
		
          <div class="row"> 
              <div class="col-left col-lg-6 col-md-6 col-sm-12 col-xs-12">
				
				
						<div class="title">
							<h3>
								Blog <span>Casulo</span> 
							</h3>
							
						</div>
						
						<div class="data">
						   <h4>MAR</h3>
						   <h5>31</h4>
						</div>
						
						<div class="texto">
							<h2>Um temporal inoportuno</h2>
							<p>
							Este pequeno e curioso texto explica um pouco a importância de se falar claramente para sua plateia na hora da sua apresentação corporativa ou de uma aula. Em ambientes pequenos, você tem a oportunidade de se aproximar das pessoas e ciar maior interação. 
							<a class="link" href="<?php the_permalink(); ?>" title="Leia mais..."></a>
							</p>
							
						</div>
						
					
			
				
				
			  </div>  
			  
			  <div class="col-right col-lg-6 col-md-6 col-sm-12 col-xs-12">
			  
				<div class="depoimentos">
					<div class="title">
						<h3>
							Depoimentos
						</h3>
					</div>
					
					<blockquote>
						<p>Lorem Ipsum é simplesmente uma simulação de indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
					</blockquote>
					
					<div class="autor">
						<h6>
						Gabriela Rehem Gama
						</h6>						
						<p>
						Marketing - Renewable Chemicals Business
						</p>
					</div>
				
				</div>
				
			  </div> 
			</div>  
		</div>        
      </section>
      <!-- /home blog - depoimentos -->
	  
	  

<?php get_footer(); ?>
