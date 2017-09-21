<?php
/**
 * Template Name: Agencia
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
		
		<!-- Agencia -->
		<div class="agencia">
			<div class="container">					
				<h1>
					SOMOS ESPECIALISTAS<br>
					EM APRESENTAÇÕES<br>
					VENCEDORAS!
				</h1>
				<div class="full">
					<p>
						A Casulo é uma agência especializada em apresentações corporativas. Mais do<br>
						que isso: somos especialistas em apresentações vencedoras. <br><br>
						
						Nós nos dedicamos a levar você ao sucesso, e para isso atuamos em duas frentes:<br>
						montando as mais poderosas, atraentes e eficazes apresentações em<br>
						PowerPoint, e preparando você para falar em público com segurança e carisma.<br><br>						
						
						Para isso, reunimos ideias consistentes, criatividade, conteúdo e know-how --<br>
						talentos construídos ao longo dos nossos 15 anos de experiência.
					</p>
				</div>
				
				<div class="full">
					<h2>Por que fazer uma apresentação vencedora?</h2> <br><br>
					<p>
						Apresentações vencedoras encantam plateias,  passam com clareza as<br>
						mensagens e são memoráveis. Esqueça os slides desinteressantes, os textos<br>
						longos, os gráficos ilegíveis. A Casulo sabe que um visual atraente e objetivo<br>
						conquista de cara o espectador.<br><br>
						
						Antes da forma, porém, nos preocupamos com a função. Criamos apresentações<br>
						para empresas para atender um objetivo e alcançar resultados. <br><br>
						
						Além disso, a sua presença dá o tom todo especial e personalizado ao conteúdo.<br>
						As suas palavras, apoiadas pela apresentação em PowerPoint, é que vão fazer a<br>
						diferença para a plateia prestar atenção e gostar do conteúdo.<br><br>
						
						A Casulo ajuda você em todas as etapas do processo, da elaboração da ideia<br>
						ao ensaio do discurso.
					</p>
				</div>
			</div>	
		</div>
		<!-- /Agencia  -->
		
		<!-- barra fixa -->
		<div class="barra-fixa-bottom">
			<div class="container">
				<a class="btn verde transition" href="javascript:void(0)" title="peça sua apresentação">peça sua apresentação</a>
			</div>
		</div>
		<!-- /barra fixa -->
  
	</section>
	<!-- /interna -->  
	  

	<?php include(TEMPLATEPATH . '/footer-internas.php'); ?>
	
