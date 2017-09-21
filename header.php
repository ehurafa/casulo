<?php
/**

 * @package WordPress
 * @subpackage Casulo
 * @since Casulo 1.0
 * @author VitaminaWeb
 * @developer Rafael Gomes @ehurafa
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />     
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="Vitaminaweb" />  
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png"  />   
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type='text/javascript' src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/modernizr.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->	
	<script type="text/javascript">
		var urlBase = "<?php echo get_site_url(); ?>";
	</script>
	<div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=240810459277635&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- topo  -->
      <header >
        <div class="top-bar">
          <div class="container">
		  
			<!-- telefone -->
			 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('telefone') ) : ?><?php endif; ?>

            <div class="phone">
              <!--<p><span>+55 11</span> 3032-8500</p>  -->
			  <p><span>+55 11</span></p>
            </div>
            <div class="links">            
              <a target="_blank" href="https://www.facebook.com/pages/Apresenta%C3%A7%C3%B5es-Vencedoras/339254086163950">
              	<img alt="Facebook" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header-b-facebook.png">
              </a>
              <a target="_blank" href="https://www.linkedin.com/company/ag-ncia-casulo">
              	<img alt="Linked-in" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header-b-linkedin.png">
              </a>
              <a target="_blank" href="http://pt.slideshare.net/agenciacasulo">
              	<img alt="Slideshare" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header-b-2.png">
              </a>
              <a target="_blank" href="https://www.youtube.com/user/agenciacasulo">
              	<img alt="Youtube" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header-b-youtube.png">
              </a>
              <a target="_blank" href="https://plus.google.com/+CasuloBr/about">
              	<img alt="Google Plus" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header-b-google.png">
              </a>
                  
            </div>			
			
          </div>
        </div>

        <div class="topo">
          <div class="container">
            <a class="logo" href="http://www.casulo.com.br">
              <img alt="Logo da Casulo" src="http://www.casulo.com.br/wp-content/themes/casulo/images/logo.png">
            </a>
			
			<div class="ativa-menu"></div>
              <nav class="menu-principal menu-principal-1">
             	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('menu-top-left') ) : ?><?php endif; ?> 				
              </nav>
              <nav class="menu-principal menu-principal-2 menu-principal-b">
              	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('menu-top-right') ) : ?><?php endif; ?> 	
              </nav>
            </div>
        </div>
        
      </header>

      <!-- /topo  -->

		<div id="page" class="hfeed site">
			<div id="content" >