<?php
/**
 * Template Name: Muito Além do Power Point
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
				<div class="container">					
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('barra-submenu') ) : ?><?php endif; ?> 	
				</div>
			</div>
		<!-- /barra sub-menu -->
		
		<!-- muito alem do power point -->
		<div class="muito-alem-do-power-point">
			<div class="container">			
				<div class="row linha-1">
					<div class="col-left col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<h2>
							SUA APRESENTAÇÃO<br>
							FEITA POR<br>
							PROFISSIONAIS
						</h2>
					</div>
					<div class="col-right col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<h3>Como designers, temos um olhar holístico. Em outras palavras, enxergamos o todo mas consideramos cada uma de suas partes e as relações entre elas. Por causa disso, conseguimos ampliar
						o alcance de uma <strong>apresentação em PowerPoint.</strong></h3>
					</div>
				</div>
				
				<div class="row linha-2">
					<div class="col-left col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<!-- box -->
						<div class="box box1">
							<div class="icon icon-efect">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/muito-alem-do-power-point/power-point.png" alt="Power Point"/>
							</div>
							<div class="texto">
								<h4>
									PowerPoint
								</h4>
								<p>
									O PowerPoint é a ferramenta ideal para criar sua apresentação empresarial. Fácil de usar e adotado pela maioria das empresas, ele ainda permite agregar vídeo e áudio para enriquecer a experiência de quem está assistindo a apresentação.<br><br>
									Também trabalhamos com o Keynote (Apple), rico em recursos visuais e de transição entre slides.

								</p>
							</div>
						</div>
						<!-- /box -->
						
						<!-- box -->
						<div class="box box2">
							<div class="icon icon-efect">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/muito-alem-do-power-point/interatividade.png" alt="Power Point"/>
							</div>
							<div class="texto">
								<h4>
									Interatividade
								</h4>
								<p>
									Apresentações vencedoras são conduzidas por profissionais preparados e capazes de envolver a plateia. Aprenda conosco os segredos do storytelling para prender a atenção e estimular a participação da sua audiência. Descubra como usar voz, gestos e linguagens para uma comunicação perfeita e encantadora.

								</p>
							</div>
						</div>
						<!-- /box -->
						
						
					</div>
					<div class="col-right col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<!-- box -->
						<div class="box box3">
							<div class="icon icon-efect">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/muito-alem-do-power-point/redes-sociais.png" alt="Power Point"/>
							</div>
							<div class="texto">
								<h4>
									Redes Sociais
								</h4>
								<p>
									Quer mais? Ao colocar sua apresentação nas redes sociais, você dissemina sua mensagem para o mundo! A Casulo te orienta a tirar o máximo proveito dos canais sociais.

								</p>
							</div>
						</div>
						<!-- /box -->
						
						<!-- box -->
						<div class="box box4">
							<div class="icon icon-efect">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/muito-alem-do-power-point/video.png" alt="Power Point"/>
							</div>
							<div class="texto">
								<h4>
									Vídeo
								</h4>
								<p>
									Montamos o roteiro e cuidamos de toda a produção e parte técnica para criar vídeos institucionais para, por exemplo, lançar produtos, motivar equipes ou mostrar linhas de produção industrial. 

								</p>
							</div>
						</div>
						<!-- /box -->
						
						<!-- box -->
						<div class="box box5">
							<div class="icon icon-efect">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/muito-alem-do-power-point/animacoes.png" alt="Power Point"/>
							</div>
							<div class="texto">
								<h4>
									Animações
								</h4>
								<p>
									Proporcionamos criativas peças de design gráfico animado (motion design) e sequências com desenhos ou efeitos visuais especiais. 
								</p>
							</div>
						</div>
						<!-- /box -->
					</div>
				</div>
			</div>
		</div>
		<!-- /muito alem do power point -->
		
		<!-- barra fixa -->
		<div class="barra-fixa-bottom">
			<div class="container">
				<a class="btn roxo transition" href="javascript:void(0)" title="peça sua apresentação">peça sua apresentação</a>
			</div>
		</div>
		<!-- /barra fixa -->
  
	</section>
	<!-- /interna -->  
	  

	<?php include(TEMPLATEPATH . '/footer-internas.php'); ?>
	
