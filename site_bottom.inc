<script>
// выделение главного пункта меню
$(function()
{
	var page = window.location.pathname.substring(1);	
	if ( page == '' ) page = 'index.php';
	$('a[href="' + page + '"]', '.main-menu').parent().addClass('active');

// выпадающее меню
$('.main-menu li')
	.mouseenter(function()
	{
		$(this).children('.submenu').show();
	})
$('.main-menu li .submenu')
	.mouseleave(function()
	{
		$(this).hide();
	})
	
})


// активация почтовых ссылок
$(function($)
{
	$('.email').each(function()
	{
		var that = $(this), href = that.data('href');
		if ( !href ) return;
		
		href = href.split(',')
		//href = href.map(function(c){ return String.fromCharCode( c ) });
		for (var i = 0; i < href.length; i++) href[i] = String.fromCharCode( href[i] )
		href = href.join('');
				
		that.attr('href', 'mailto:' + href).text(href);
	})
})
</script>
<script src="/js/modernizr.min.js"></script>
<script src="/js/jquery-1.8.1.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="//web.webformscr.com/apps/fc3/build/loader.js" sp-form-id="568c7ea7eeb4ecba1068c3067eccb71270c109955aa22d726c9224522a7ae9c7"></script>
<script>(function(){var b=($$)?$$.h:[];$=jQuery;for(var c in b)b[c]($)})()</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(53173708, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/53173708" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</body>
</html>