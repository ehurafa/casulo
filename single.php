<?php
/**
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
			<div class="barra-submenu">
				<div class="container">	</div>
			</div>
		<!-- /barra sub-menu -->
		
		<!-- single  -->
		<div class="page-single">
		
			<div class="header-blog">
				<div class="imagem">
				</div>
				<div class="texto">
				</div>
			</div>
			<div class="container">					
				<article>		
					<div class="calendario">
						<div class="data">
							<span class="mes"><?php the_time( 'M' ); ?></span>
							<span class="dia"><?php the_time( 'd' ); ?></span>
							<div class="comentarios"><?php echo get_comments_number(); ?></div>
						</div>
					</div>				
					
					<div class="conteudo">
						<div  class="imagem-de-capa">
							<?php the_post_thumbnail( ); ?>
						</div>
												
					
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="post">

								<div class="title">
									<h2><?php the_title(); ?></h2>
								</div>
								
								<div class="autor">
									<small>Postado por: <span><?php the_author_posts_link() ?></span></small>|<span class="category"> <?php the_category(', '); ?></span>
								</div>

								<div class="like">
                                            <div class="left">
                                                <div class="twitter">
                                                    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                                                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                                </div>
                                                <div class="google">
                                                    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
                                                    <g:plusone></g:plusone>
                                                </div>
                                            </div>
                                            <div class="right">
                                                <div class="share">
                                                </div>
                                                <div class="facebook">
                                                    <div class="fb-like" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>

								<div class="entry">
									<?php the_content(); ?>
								</div>
								<?php comments_template(); ?>

							</div>
							
							<?php endwhile;?>

						<?php endif; ?>
						
						<div class="paginacao">
                            <?php previous_post_link( '%link', 'post anterior' ); ?>
                            <?php next_post_link( '%link', 'próximo post' ); ?>
                        </div>
												
					
					
					</div>
				</article>
				
				<aside>
					<?php get_template_part( 'pesquisa' ); ?>

					<?php get_template_part( 'categorias' ); ?>

					<?php get_template_part( 'topicos-recentes' ); ?>
				</aside>
				
			</div>	
		</div>
		<!-- /single  -->
		
  
	</section>
	<!-- /interna -->  
	  

	<?php include(TEMPLATEPATH . '/footer-internas.php'); ?>
	
