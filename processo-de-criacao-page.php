<?php
/**
 * Template Name: Processo de Criação
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
		
		<!-- processo de criação -->
		<div class="processo-de-criacao">
			<div class="container">		
				<div class="full">
					<h1>Apresentações que inspiram</h1>
				</div>
				
				<!-- sessão 1 -->
				<div class="linha linha-1">
					<div class="box left">
						<div class="title ">
							<h2 class="rosa">Briefing</h2>
						</div>
					</div>
					<div class="box center">
						<div class="icone icon-efect">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icons/processo-de-criacao/briefing.png" alt="Briefing" />
						</div>
					</div>
					<div class="box right">
						<p>
							O briefing é o momento de reunir o maior volume possível de informações a respeito da empresa, do palestrante e da mensagem que precisa ser passada. Também investigamos melhor o perfil do público-alvo e coletamos todo e qualquer tipo de referência que pode apoiar a apresentação de slides.
							<br><br>
							É nessa hora também que fazemos um cuidadoso trabalho para entender a sua necessidade, conhecer o seu negócio e planejar as ações. A partir daí, definimos a mensagem principal – o fio condutor - da apresentação de uma empresa.
						</p>
					</div>
				</div>
				<!-- /sessão 1 -->
				
				<!-- sessão 2 -->
				<div class="linha linha-2">
					<div class="box right">
						<div class="title">
							<h2 class="laranja">Roteiro</h2>
						</div>
					</div>
					<div class="box center">
						<div class="iconeicon-efect">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icons/processo-de-criacao/roteiro.png" alt="Roteiro" />
						</div>
					</div>
					<div class="box left">
						<p>
							O roteiro funciona como um guia para organizar o conteúdo e a sequência de uma apresentação profissional.  <br><br>

							É o detalhamento do que vai ser mostrado, qual imagem vai apoiar determinado slide, que tom de voz deve ser adotado para dar mais ênfase em um certo ponto. No roteiro, o assunto principal é dividido em tópicos que facilitam a compreensão da mensagem, de forma lógica, clara e relevante.


						</p>
					</div>
				</div>
				<!-- /sessão 2 -->
				
				<!-- sessão 3 -->
				<div class="linha linha-3">
					<div class="box left">
						<div class="title ">
							<h2 class="azul">Design</h2>
						</div>
					</div>
					<div class="box center">
						<div class="icone icon-efect">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icons/processo-de-criacao/design.png" alt="Design" />
						</div>
					</div>
					<div class="box right">
						<p>
						Agora que já decidimos o que vai ser apresentado, é hora de dar uma roupagem toda especial ao seu conteúdo. O design define o visual dos slides e reforça as mensagens que vão ser passadas.
						<br><br>
						Cores, fontes, imagens e outros elementos gráficos são combinados com harmonia, elegância e criatividade para montar apresentações profissionais fascinantes, com base em uma comunicação clara e objetiva.
						<br><br>
						Se a sua empresa tiver um manual de identidade visual, o design seguirá esse modelo.

						</p>
					</div>
				</div>
				<!-- /sessão 3 -->
				
				<!-- sessão 4 -->
				<div class="linha linha-4">
					<div class="box right">
						<div class="title ">
							<h2 class="azul">Produção</h2>
						</div>
					</div>
					<div class="box center">
						<div class="icone icon-efect">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icons/processo-de-criacao/producao.png" alt="Produção" />
						</div>
					</div>
					<div class="box left">
						<p>
						Depois da inspiração, é a hora da transpiração: com o layout aprovado pelo cliente, é hora de compor os slides, somando conteúdos e elementos gráficos.
						</p>
					</div>
				</div>
				<!-- /sessão 4 -->
				
				<!-- sessão 5 -->
				<div class="linha linha-5">
					<div class="box left">
						<div class="title ">
							<h2 class="azul">Treinamento</h2>
						</div>
					</div>
					<div class="box center">
						<div class="icone icon-efect">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icons/processo-de-criacao/treinamento.png" alt="Treinamento" />
						</div>					
					</div>
					<div class="box right">
						<p>
						A Casulo ensaia com você cada passo de sua apresentação, orientando quanto a entonação de voz, postura e ritmo. Pode ser uma reunião de negócios com um pequeno grupo, uma conferência online ou uma palestra para grandes plateias – não importa o ambiente, você estará seguro e confiante depois desse treinamento.
						</p>
					</div>
				</div>
				<!-- /sessão 5 -->
				
				<!-- sessão 6 -->
				<div class="linha linha-6">			
					<div class="box center">		
						<div class="passo-a-passo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/index.php/agencia/processo-de-criacao/processo-de-criacao-passo-a-passo" title="veja o processo passo-a-passo" class="transition"> veja o processo passo-a-passo</a>
						</div>
					</div>
				</div>
				<!-- /sessão 6 -->
			</div>	
		</div>
		<!-- /processo de criação -->
		
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
	
