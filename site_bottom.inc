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
<script>(function(){var b=($$)?$$.h:[];$=jQuery;for(var c in b)b[c]($)})()</script>
<script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</body>
</html>