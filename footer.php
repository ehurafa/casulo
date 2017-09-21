<?php
/**
 * @package WordPress
 * @subpackage Casulo
 * @since Casulo 1.0
 * @author VitaminaWeb
 * @developer Rafael Gomes @ehurafa
 */
?>

	</div><!-- .site-content -->

	<!-- footer -->
	<footer id="contato">
		<div class="container">
			<div class="row">
				<div class="col-left col-lg-6 col-md-6 col-sm-12 col-xs-12">
				  <h4>Entre em contato</h4>
				  <form method="post" action="" id="form-footer">
					<ul>
						<li>
							<label for="nome">Nome*</label>
							<input name="nome" type="text" data-rule-email="false" data-rule-required="true" placeholder="Nome" />
						</li>
						
						<li>
							<label for="email">E-mail*</label>
							<input name="email" type="text" data-rule-email="true" data-rule-required="true" placeholder="E-mail" />
						</li>
						
						<li>
							<label for="telefone">Telefone</label>
							<input name="telefone" type="text" data-rule-email="false" data-rule-required="true" placeholder="Telefone" />
						</li>
						
						<li>
							<label for="empresa">Empresa</label>
							<input name="empresa" type="text" data-rule-email="false" data-rule-required="true" placeholder="Empresa" />
						</li>
						
						<li>
							<label for="mensagem">Mensagem</label>
							<textarea name="mensagem"  data-rule-email="false" data-rule-required="true" placeholder="Mensagem" ></textarea>
			
						</li>
						
						<li>
							<input type="submit" class="btn transition" value="Enviar" />  
						</li>
					</ul>
				  </form>
				  
				  <div class="mascote">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/mascote.png" />
				  </div>
				</div>
				
				<div class="col-right col-lg-6 col-md-6 col-sm-12 col-xs-12">
				  <h5>Estamos aqui</h5>
				  <p>
					Rua Artur de Azevedo, 1217  cjs. 13 e 14 <br>
Pinheiros - 05404-013 - São Paulo/SP
				  </p>
				  <div class="mapa"></div>
				  
				  <div class="contact">
					<div class="telefone">
						<span class="icon"></span>
						<p>+ 55  11  3032 8500</p>
					</div>
					<div class="email">
						<span class="icon"></span>
						<p>contato@casulo.com.br</p>
					</div>
				  </div>
				  
				  <div class="redes-sociais">
					<a href="#" class="facebook transition"></a>
					<a href="#" class="linkedin transition"></a>
					<a href="#" class="slideshare transition"></a>
					<a href="#" class="youtube transition"></a>
					<a href="#" class="plus transition"></a>
					
				  </div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /footer -->

</div><!-- .site -->

<?php wp_footer(); ?>


</body>
</html>
