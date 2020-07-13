<?php if ( ! defined('ABSPATH')) exit; ?>


<div class="wrap">

	<div class="row">
		<ul class="steps">
			<li class="step-1 sprite hide-text current" id="step-1">01</li>
			<li class="step-2 sprite hide-text" id="step-2">02</li>
			<li class="step-3 sprite hide-text" id="step-3">03</li>
			<li class="step-4 sprite hide-text" id="step-4">04</li>
		</ul>
	</div>
	
	<h2>QUAL O SEU SEGMENTO</h2>

	<div class="container-fluid" style="">
		<button type="button" class="btn btn-primary" onclick="setSegmento(2)">CORPORATIVO</button>
		<button type="button" class="btn btn-primary" onclick="setSegmento(3)">IGREJA</button>
		<button type="button" class="btn btn-primary" onclick="setSegmento(4)">MÚSICA E ARTE</button>
		<button type="button" class="btn btn-primary" onclick="setSegmento(5)">PESSOAL</button>
	</div>

	<!-- ---------------------------------- -->
	<!-- Passo 02 -->
	<!-- ---------------------------------- -->
	<div id="step-2-container" class="container-table">
		<div class="row">
			<div class="twelve-columns">
				<div class="row">
					<div class="field">
						<input type="checkbox" name="section-orcamento" id="sec-website" value="1" />
						<label for="sec-website">Website</label>
					</div>
					<div class="field">
						<input type="checkbox" name="section-orcamento" id="sec-blog" value="2" />
						<label for="sec-blog">Blog</label>
					</div>
					<div class="field">
						<input type="checkbox" name="section-orcamento" id="sec-midiassociais" value="3" />
						<label for="sec-midiassociais">M&iacute;dias Sociais</label>
					</div>
					<div class="field">
						<input type="checkbox" name="section-orcamento"  id="sec-midiasgraficas" value="5" />
						<label for="sec-midiasgraficas">M&iacute;dias Gr&aacute;ficas</label>
					</div>
					<div class="field">
						<input name="section-orcamento" id="sec-ecommerce" type="checkbox" value="8" />
						<label for="sec-ecommerce">E-commerce</label>
					</div>
					<div class="field">
						<input name="section-orcamento" id="sec-fotografia" type="checkbox" value="9" />
						<label for="sec-fotografia">Fotografia</label>
					</div>
					<div class="field">
						<input name="section-orcamento" id="sec-projeto-grafico-para-cd" type="checkbox" value="10" />
						<label for="sec-projeto-grafico-para-cd">Projeto Gráfico para CD</label>
					</div>
					<div class="field">
						<input name="section-orcamento" id="sec-projeto-grafico-para-dvd" type="checkbox" value="11" />
						<label for="sec-projeto-grafico-para-dvd">Projeto Gráfico para DVD</label>
					</div>

					<div class="field">
						<input name="section-orcamento" id="sec-logomarca" type="checkbox" value="12" />
						<label for="sec-logomarca">Logomarca</label>
					</div>
					<div class="field" >
						<input name="section-orcamento" id="sec-papelaria" type="checkbox" value="13" />
						<label for="sec-papelaria">Papelaria</label>
					</div>
					<div class="field" style="display:none">
						<input name="section-orcamento" id="sec-hospedagem" type="checkbox" value="14" />
						<label for="sec-hospedagem">Hospedagem</label>
					</div>
					<div class="field" >
						<input type="checkbox" name="section-orcamento" id="outro-tipo-projeto" value="15" />
						<label for="outro-tipo-projeto">Outro tipo de projeto</label>
					</div>
			</div>
		</div><!-- .row -->
	</div>

	<nav class="wporcamento-nav">
			<div class="six columns">
				<a href="javascript:void(0)" onclick=setAba() class="btn btn-voltar radius"><i class="icon-arrow-left color-text-orange"></i>&nbsp;&nbsp;Voltar</a>
			</div>
			<div class="six columns">
				<a href="javascript:void(0)" onclick="nextStap3()" class="btn btn-prosseguir radius">Prosseguir&nbsp;&nbsp;<i class="icon-arrow-right color-text-orange"></i></a>
			</div>
		</nav>
	</div>

	<!-- ---------------------------------- -->
	<!-- Passo 03 -->
	<!-- ---------------------------------- -->
	<div id="step-3-container" class="step-3-container">
		<h2 class="color-text-default aligncenter uppercase">Selecione as opções para seus projetos</h2>
		<div class="wporcamento-msg"><!-- Mensagem de retorno --></div>
		<div class="row">

			<!-- ---------------------------------- -->
			<!-- Web site -->
			<!-- ---------------------------------- -->
			<div class="twelve columns section-orcamento-1">
				<div class="panel radius">
					<div class="row">
						<div class="twelve columns">
							<h3 class="title-tab"><span>Web site</span></h3>
						</div>
						<div class="eight columns">
							<div class="row">
								<div class="field checkbox four columns">
									<input name="topicos[]" id="noticiaseartigos" type="checkbox" value="2610" />
									<label for="noticiaseartigos">Notícias e Artigos</label>
								</div>
								<div class="field checkbox four columns">
									<input type="checkbox" id="midias-galeriadefotos" name="topicos[]" value="8" />
									<label for="midias-galeriadefotos">Galeria de Fotos</label>
								</div>
								<div class="field checkbox four columns">
									<input type="checkbox" id="midias-galeriadevideos" name="topicos[]" value="14" />
									<label for="midias-galeriadevideos">Galeria de Vídeos</label>
								</div>
								<div class="field checkbox four columns">
									<input type="checkbox" id="midias-paginaparadownloads" name="topicos[]" value="16" />
									<label for="midias-paginaparadownloads">Página de Downloads</label>
								</div>
								<div class="field checkbox four columns">
									<input type="checkbox" id="midias-playerdemusica" name="topicos[]" value="15" />
									<label for="midias-playerdemusica">Player de Música</label>
								</div>
								
								<div class="field checkbox four columns">
									<input type="checkbox" id="eventos-agendadeeventos" name="topicos[]" value="22" />
									<label for="eventos-agendadeeventos">Agenda de Eventos</label>
								</div>
								<div class="field checkbox four columns">
									<input type="checkbox" id="eventos-formulariodeconvite" name="topicos[]" value="12" />
									<label for="eventos-formulariodeconvite">Formulário de Convite</label>
								</div>
								<div class="field checkbox four columns">
									<input type="checkbox" id="contato-formulariodecontato" name="topicos[]" value="10" />
									<label for="contato-formulariodecontato">Formulário de Contato</label>
								</div>
								<div class="field checkbox four columns">
									<input type="checkbox" id="contato-formulariodeorcamento" name="topicos[]" value="11" />
									<label for="contato-formulariodeorcamento">Formulário de Orçamento</label>
								</div>
								
								<div class="field checkbox four columns">
									<input name="topicos[]" id="pagina-de-produtos-ou-cases" type="checkbox" value="2617" />
									<label for="pagina-de-produtos-ou-cases">Página de Produtos ou Cases</label>
								</div>
								<div class="field checkbox four columns">
									<input name="topicos[]" id="loja-virtual-basica" type="checkbox" value="2614" />
									<label for="loja-virtual-basica">Loja Virtual Básica</label>
								</div>
								
								<div id="option-igreja">
									<div class="field checkbox four columns">
										<input name="topicos[]" id="discografia" type="checkbox" value="28" />
										<label for="discografia">Discografia</label>
									</div>
									
									<div class="field checkbox four columns">
										<input type="checkbox" id="ministerio-bibliaonline" name="topicos[]" value="24" />
										<label for="ministerio-bibliaonline">Bíblia Online</label>
									</div>
									<div class="field checkbox four columns">
										<input name="topicos[]" id="websites-independêntes-para-ministérios" type="checkbox" value="2616" />
										<label for="websites-independêntes-para-ministérios">Websites Independêntes para Ministérios</label>
									</div>
								</div>
								
								<div class="wporcamento-textarea-container">
									<div class="twelve columns">
										<p>Se desejar, descreva outros itens do projeto</p>
										<textarea name="site-outros" id="web_site_outros"></textarea>
									</div>	
								</div>
							</div><!-- .row -->
						</div><!-- .eight -->
						
						<div class="four columns">
							<div class="info">
								<p>Já estão inclusos no projeto páginas simples como por exemplo: Sobre nós, Apresentação, Fale Conosco, ect.</p>
								<p>Todo conteúdo do site será gerenciado por você, utilizando nosso gerenciador de conteúdo WordPress</p>
							</div>
						</div><!-- .four -->
					</div><!-- .row -->
				</div><!-- panel -->
			</div><!-- .twelve -->

	<nav class="wporcamento-nav">
		<div class="six columns">
			<a href="javascript:void(0)" onclick=backAba2() class="btn btn-voltar radius"><i class="icon-arrow-left color-text-orange"></i>&nbsp;&nbsp;Voltar</a>
		</div>
		<div class="six columns">
			<a href="javascript:void(0)" onclick="nextStap3()" class="btn btn-prosseguir radius">Prosseguir&nbsp;&nbsp;<i class="icon-arrow-right color-text-orange"></i></a>
		</div>
	</nav>
</div> <!-- .wrap -->

<script>
$(document).ready(function() {
	hideStap2Container();
	hideStap3Container();
	hideNav();
	hideWebSite();
	hideBlog();
	hideEcommerce();
	hideHospedagem();
	hideRedeSocial();
	hideFotografia();
	hideGraficoCD();
	hideGraficoDVD();
	hideMidiaGrafica();
	hideLogoMarca();
	hidePapelaria();
});

function nextStap3() {
	this.hideStap2Container();
	this.showStap3Container();

	this.setStap(3);
}

function hideStap2Container() {
	$("#step-2-container").hide();
}

function showStap2Container() {
	$("#step-2-container").fadeIn(1000);
}

function hideStap3Container() {
	$("#step-3-container").hide();
}

function showStap3Container() {
	$("#step-3-container").fadeIn(1000)
}

function hideWebSite() {
	$(".twelve columns section-orcamento-1").hide();
}

function hideBlog() {
	$(".twelve columns section-orcamento-2").hide();
}

function hideEcommerce() {
	$(".twelve columns section-orcamento-8").hide();
}

function hideHospedagem() {
	$(".twelve columns section-orcamento-14").hide();
}

function hideRedeSocial() {
	$(".twelve columns section-orcamento-3").hide();
}

function hideFotografia() {
	$(".twelve columns section-orcamento-9").hide();
}

function hideGraficoCD() {
	$(".twelve columns section-orcamento-10").hide();
}

function hideGraficoDVD() {
	$(".twelve columns section-orcamento-11").hide();
}

function hideMidiaGrafica() {
	$(".twelve columns section-orcamento-5").hide();
}

function hideLogoMarca() {
	$(".twelve columns section-orcamento-12").hide();
}

function hidePapelaria() {
	$(".twelve columns section-orcamento-13").hide();
}

function backAba2() {
	this.hideStap3Container();
	this.showStap2Container();

	this.setStap(4);
}

function setAba() {
	var container = $(".container-fluid");

	this.hideNav();
	this.setStap(1);
	this.hideStap3Container();

	this.hideStap2Container();
	container.show();
}

function hideNav() {
	var nav = $(".wporcamento-nav").hide();
}

function showNav() {
	var nav = $(".wporcamento-nav");

	nav.show();
}

function setSegmento(seguimento) {
	this.HandleDiv();
	this.showNav();
}

function setStap(number) {

	switch(number) {
		case 1:
			$("#step-1").attr('class', 'step-1 sprite hide-text current');
			$("#step-2").attr('class', 'step-1 sprite hide-text');
			break;
		case 2:
			$("#step-1").attr('class', 'step-1 sprite hide-text');
			$("#step-2").attr('class', 'step-1 sprite hide-text current');
			break;
		case 3:
			$("#step-3").attr('class', 'step-1 sprite hide-text current');
			$("#step-2").attr('class', 'step-1 sprite hide-text');
			break;
		case 4:
			$("#step-2").attr('class', 'step-1 sprite hide-text current');
			$("#step-3").attr('class', 'step-1 sprite hide-text');
			break;
		default:
			$("#step-1").attr('class', 'step-1 sprite hide-text current');
			$("#step-2").attr('class', 'step-1 sprite hide-text');
	}
}

function HandleDiv() {
	var container = $(".container-fluid");

	this.setStap(2);
	
	container.hide();

	this.showStap2Container();
}

</script>