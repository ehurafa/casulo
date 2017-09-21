$(document).ready(function(){

});

$(window).load(function(){
	loading();  
});	

$(window).scroll(function(){   });

$(window).resize(function(){      
	portfolio();
});


function loading(){ 
	$('.loader').fadeOut(200);
	$('.general').fadeIn(400);
	acoes();
	portfolio();
}

function acoes(){ 
	// slider home
	$('.flexslider .caption-wrap').wrap('<div class="container" ></div>');	
	$('.metaslider .flexslider .caption-wrap p').after('<div class="full"><a href="#" title="veja nosso portfolio" class="botao-slider">veja nosso portfolio</a></div>');

	$('.metaslider').each(function(){
		var link = $(this).find('ul li > a').attr('href');	
		$(this).find('.botao-slider').attr('href', link);
		$(this).find('ul li > a').attr('href', 'javascrip:void(0)');
	});	

	// menu
	$('.topo  .menu-principal ul .menu-item-has-children ').each(function(){	
		$(this).mouseenter(function(){
			$(this).find('.sub-menu').slideDown(400);
		});	
		$(this).mouseleave(function(){
			$(this).find('.sub-menu').hide();
		});	
		$(this).find('.sub-menu').mouseleave(function(){
			$(this).hide();
		});	
	});
	
	// addClass
	$('#menu-barra-submenu li a').addClass('transition');
	
	$('.single .paginacao a').eq(0).addClass('prev');
	$('.single .paginacao a').eq(1).addClass('next');
	$('.single aside .lista1 li a').addClass('transition');
	$('#respond #author').parent().addClass('input input1');
	$('#respond #email').parent().addClass('input input2');
	$('#respond #url').parent().addClass('input input3');
	
	//link contato
	var newUrlBase = urlBase + '#contato';
	$('#menu-menu-principal-2 li').eq(0).find('a').attr('href', newUrlBase);
	
	// comentarios	
	$('#respond form #author').attr('placeholder','Nome*');
	$('#respond form #email').attr('placeholder','E-mail');
	$('#respond form #url').attr('placeholder','Site');
	
	
    // select 
    // Create the dropdown base
    //$("<select />").appendTo(".topo .menu-principal-1");
	
	//$("<select />").appendTo(".topo .menu-principal1 select").wrap('<div class="menu-mobile" ></div>');
	$('.menu-principal').wrapAll('<div class="menu-mobile"></div>');
	/*
	// Create default option "Go to..."
    $("<option />", {
		"selected": "selected",
        "value"   : "",
        "text"    : "MENU"
    }).appendTo(".topo .menu-principal select");
	
	// Populate dropdown with menu items
	$("header nav a").each(function() {
		var el = $(this);
		$("<option />", {
			"value"   : el.attr("href"),
			"text"    : el.text()
			}).appendTo(".topo nav select");
		});

	// To make dropdown actually work
	// To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
	$(".topo nav select").change(function() {
		window.location = $(this).find("option:selected").val();
	});
	  */
	  
}

function portfolio(){
jQuery('.gallery').lightGallery({
	html:true,
	//thumbnail:false,
	selector:'.iframe',
	videoMaxWidth:'1100px'
});

$('.portfolio-widget ul li').each(function(){
	var alturaImg = $(this).find('img').height();		
	$(this).height(alturaImg);
	$(this).find('span').height(alturaImg);
});




}





