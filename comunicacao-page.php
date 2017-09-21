<?php
/**
 * Template Name: Comunicacao
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
		
		<!-- Comunicação -->
		<div class="pagina-comunicacao">
			<div class="container">					
				<h1>
					Pensamos em cada detalhe de sua apresentação
				</h1>
				<ul>			
					
					<li>
						<div class="col-left">
							<div class="icon icon-efect">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/comunicacao/objetivo.png" alt="Objetivo" />
							</div>
						</div>
						<div class="col-right">
							<h3>
								OBJETIVO
							</h3>
							<p>
							A primeira coisa ao conceber uma apresentação empresarial é definir seu objetivo. É isso que vai nortear o estilo, o conteúdo e o ritmo que serão adotados. O objetivo pode ser, por exemplo, mostrar um novo produto que será vendido em uma rede de varejo ou oferecer um novo negócio para um investidor em potencial.
							</p>	
						</div>
					</li>
					
					<li>
						<div class="col-left">
							<div class="icon icon-efect">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/comunicacao/plateia.png" alt="PLATÉIA" />
							</div>
						</div>
						<div class="col-right">
							<h3>
								PLATÉIA
							</h3>
							<p>
							Quando você conhece o perfil das pessoas para quem vai falar, é mais fácil acertar o tom e transmitir a mensagem de maneira eficiente e agradável.<br><br>
							Dependendo do grau de conhecimento do público sobre o assunto (técnico/leigo), do ambiente (formal/informal) e do número de espectadores, você pode adotar – tanto nos slides quanto no discurso – o estilo mais adequado.  <br><br>
							Se você conhece a plateia, saberá se pode usar, por exemplo, pitadas de humor, vídeos ou um grau maior de interação.
							</p>	
						</div>
					</li>
					
					<li>
						<div class="col-left">
							<div class="icon icon-efect">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/comunicacao/espaco.png" alt="ESPAÇO" />
							</div>
						</div>
						<div class="col-right">
							<h3>
								ESPAÇO
							</h3>
							<p>
							Conhecer o local onde deverá realizar sua apresentação é fundamental para o seu sucesso. O local é um grande auditório ou uma sala mais intimista? Você falará em um púlpito ou poderá se mover com um microfone de lapela? Esses detalhes fazem diferença na hora de escolher o melhor formato para a sua apresentação.
							</p>	
						</div>
					</li>
					
					<li>
						<div class="col-left">
							<div class="icon icon-efect">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/comunicacao/duracao.png" alt="DURAÇÃO" />
							</div>
						</div>
						<div class="col-right">
							<h3>
								DURAÇÃO
							</h3>
							<p>
							Um dos segredos de uma apresentação eficiente é adequar o conteúdo ao tempo disponível. Assim, você garante que sua mensagem seja compreendida com objetividade e interesse.<br><br>
							Em alguns casos, vale a pena ter várias versões de uma mesma apresentação, que possam ser usadas em uma palestra de uma hora ou uma reunião de 15 minutos. Afinal, as pessoas não tem tempo a perder!
							</p>	
						</div>
					</li>
					
					<li>
						<div class="col-left">
							<div class="icon icon-efect">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/comunicacao/apresentador.png" alt="APRESENTADOR" />
							</div>
						</div>
						<div class="col-right">
							<h3>
								APRESENTADOR
							</h3>
							<p>
							O desempenho do palestrante ou apresentador é componente essencial para que os slides de uma apresentação em PowerPoint ganhem vida. Por isso, ele precisa de preparação e ensaio, para acertar a postura, o tom de voz e uma presença cativante diante do público. 
							</p>	
						</div>
					</li>
					
				
				</ul>				
			
			</div>	
		</div>
		<!-- /Comunicação -->
		
		<!-- barra fixa -->
		<div class="barra-fixa-bottom">
			<div class="container">
				<a class="btn azul transition" href="javascript:void(0)" title="peça sua apresentação">peça sua apresentação</a>
			</div>
		</div>
		<!-- /barra fixa -->
  
	</section>
	<!-- /interna -->  
	  

	<?php include(TEMPLATEPATH . '/footer-internas.php'); ?>
	
