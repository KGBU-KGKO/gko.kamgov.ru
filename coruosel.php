<? include 'site_top.inc'; ?>
<? include 'header.inc'; ?>
<? include 'mainmenu.inc'; ?>
<script>document.title += ' - Главная'</script>


<div class="section">
	<p class="content-anchor"><a name="about">&nbsp;</a></p>
	
	<div class="content b-company">
		<h1 class="sr-only">Об организации</h1>
			
		<link rel="stylesheet" href="/css/carousel.css"/>
		<div id="myCarousel" class="carousel slide custom" data-interval="2000">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<!--<li data-target="#myCarousel" data-slide-to="4"></li>-->
			</ol>
			<!-- Carousel items -->
			<div class="carousel-inner">
			    <div class="active item"><a href="/files/Declaracia.rar"><img src="/img/slide05.jpg"></a></div>
				<div class="item"><a href="https://pkk.rosreestr.ru/#/search/53.05640837708139,158.74126790720857/12/@6mmb5wv9"><img src="/img/slide01.jpg"></a></div>
				<div class="item"><a href="https://rosreestr.ru/site/activity/kadastrovaya-otsenka/"><img src="/img/slide02.jpg"></a></div>
				<!--<div class="item"><a href="https://rosreestr.ru/site/open-service/publichnaya-oferta/"><img src="/img/slide03.jpg"></a></div>-->
				<div class="item"><a href="https://rosreestr.ru/wps/portal/cc_ib_opendata"><img src="/img/slide04.jpg"></a></div>
			</div>
			<!-- Carousel nav -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
		
	</div>
</div>

<script src="/js/carousel.min.js"></script>
<script>
$(function()
{
	$('.carousel').carousel('cycle');
})
</script>
<? include 'footer.inc'; ?>
<? include 'site_bottom.inc'; ?>