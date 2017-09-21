<?php
/**
 * Template Name: Tipos de Apresentação
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
		
		<!-- Tipos de Apresentação -->
		<div class="tipos-de-apresentacao">
			<div class="container">			
				<div class="linha linha-1 row">
					<div class="left col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<h1>
							PARA CADA MOMENTO,<br>
							UMA LINGUAGEM
						</h1>
					</div>
					<div class="right col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<p>
							A Casulo tem uma equipe especializada em desenvolver apresentações únicas, impactantes, sob medida para cada cliente, e capazes de atender cada tipo de necessidade com uma solução criativa e completa. 
						</p>
					</div>
					
				</div>
				
				<div class="row linha linha-2">
					
					<!-- box -->
					<div class="box box1 col-lg-7 col-md-7 col-sm-12 col-xs-12 col-lg-offset-5 ">
						<div class="left col-lg-3 col-md-3 col-sm-12 col-xs-12  ">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/tipos-de-apresentacao/presencial.png" alt="Presencial" />
							</div>
						</div>
						<div class="right col-lg-9 col-md-9 col-sm-12 col-xs-12  ">
							<h3>Presencial</h3>
							<p>
								A Casulo tem uma equipe especializada em desenvolver apresentações únicas, impactantes, sob medida para cada cliente, e capazes de atender cada tipo de necessidade com uma solução criativa e completa. 
							</p>
						</div>
					</div>					
					<!-- /box -->
					
					<!-- box -->
					<div class="box box2 col-lg-7 col-md-7 col-sm-12 col-xs-12 col-lg-offset-5 ">
						<div class="left col-lg-3 col-md-3 col-sm-12 col-xs-12  ">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/tipos-de-apresentacao/webnar.png" alt="Webnar" />
							</div>
						</div>
						<div class="right col-lg-9 col-md-9 col-sm-12 col-xs-12  ">
							<h3>Webinar</h3>
							<p>
								Webinars, ou seminários na web, são encontros virtuais para reunir pessoas que estão em diferentes locais, evitando custos com deslocamento e ganhando tempo. Aprenda essa linguagem específica do mundo digital para seduzir a audiência. 
							</p>
						</div>
					</div>					
					<!-- /box -->
					
					<!-- box -->
					<div class="box box3 col-lg-7 col-md-7 col-sm-12 col-xs-12 col-lg-offset-5 ">
						<div class="left col-lg-3 col-md-3 col-sm-12 col-xs-12  ">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icons/tipos-de-apresentacao/por-email.png" alt="por E-mail" />
							</div>
						</div>
						<div class="right col-lg-9 col-md-9 col-sm-12 col-xs-12  ">
							<h3>Por E-mail</h3>
							<p>
								Se a ideia é enviar a apresentação por e-mail, ela deve primar pela clareza e facilidade de compreensão, sem necessidade de nenhuma explicação. Também deve ser curta e leve, permitindo rápido download. 
							</p>
						</div>
					</div>					
					<!-- /box -->
				
				
					
					
				</div>
			</div>	
		</div>
		<!-- /Tipos de Apresentação -->
		
		<!-- barra fixa -->
		<div class="barra-fixa-bottom">
			<div class="container">
				<a class="btn rosa transition" href="javascript:void(0)" title="peça sua apresentação">peça sua apresentação</a>
			</div>
		</div>
		<!-- /barra fixa -->
  
	</section>
	<!-- /interna -->  
	  

	<?php include(TEMPLATEPATH . '/footer-internas.php'); ?>
	
