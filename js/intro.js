function Progress( $parent )
{
	var block = $('.b-loader', $parent ),
			bar = $('span', block),
			onDone,
			stage = 0,
			stages = 1;
	
	function finish()
	{
		if ( onDone ) onDone();
		block.hide();
	}
	
	var that = {
		
		stages: function( val )
		{
			if ( val ) stages = val; else return stages;
		},
		
		done: function( done_stages )
		{
			return stage == stages;
		},
		
		next: function()
		{
			stage++;
			bar.css('width', (100 * stage / stages) + '%');
			if ( stage == stages )
			{
				if ( onDone ) setTimeout( finish, 600 );
			}
		},
		
		onDone: function( cb )
		{			
			onDone = cb;
		}			
		
	}
	
	return that;
}


function isArray( a )
{
	return (typeof a == 'object' && a.length) || (a.constructor.name == 'Array');
}
function isFunc( f )
{
	return (typeof f == 'function');
}
function isAnimation( a )
{
	return typeof a.next == 'function';
}

function AnimationGroup( items )
{
	var 
		counter = items.length,
		onDone;

	function item_finished(a)
	{
		if ( --counter == 0 ) 
		{			
			if ( onDone ) onDone();
		}
	}
	
	return {
		
		next: function( animation )
		{
			if ( isAnimation(animation) )
			{
				onDone = animation.start;
				return animation;
			}
			else if ( isArray(animation) )
			{
				var group = new AnimationGroup( animation );
				onDone = group.start;
				return group;
			}				
		},
		
		done: function( cb )
		{
			onDone = cb;
		},
		
		start: function()
		{
			for (var i = 0; i < items.length; i++) 
			{
				items[i].done( item_finished );
				items[i].start();
			}
		}
		
	}
}

function Animation()
{
	var next, 
		onDone,
		$obj, props, method, func,
		duration = 400,
		delay = 0;
	
	var arg0 = arguments[0];
	var arg1 = arguments[1];
	var arg2 = arguments[2];
	
	if ( arg0 && arg0.jquery ) // $obj method props
	{
		$obj = arg0;
		
		if ( arg1 )				
		{
			if ( typeof arg1 == 'object' ) props = arg1;
			if ( typeof arg1 == 'string' ) method = arg1;
		}
		if ( arg2 )
		{
			if ( typeof arg2 == 'object' ) props = arg2;
		}
		
	}
	if ( arg0 && typeof arg0 == 'function' )
	{
		func = arg0;
	}
	
	function end()
	{
		if ( onDone ) onDone($obj);
	}
	
	function begin()
	{
		if ( $obj ) 
		{
			if ( method && props )
			{
				$obj.animate( props, duration, end );
				return;
			}
			else if ( method )
			{
				$obj[method]( duration, end );
				return;
			}
			else if ( props )
			{
				$obj.css( props );
			}
		}
		else if ( func )
		{
			func();	
		}

		setTimeout( end, duration );
	}
	
	return {
		
		next: function( animation )
		{
			if ( isAnimation(animation) )
			{
				onDone = animation.start;
				return animation;
			}				
			else if ( isArray(animation) )
			{
				var group = new AnimationGroup( animation );
				onDone = group.start;
				return group;
			}
		},
		
		delay: function( d )
		{
			delay = d;
			return this;
		},
		
		duration: function( d )
		{
			duration = d;
			return this;
		},
		
		done: function( cb )
		{
			onDone = cb;
			return this;
		},			
		
		start: function()
		{
			setTimeout( begin, delay );			
		}
	}
}






$(function($)
{
	var ie = ('ActiveXObject' in window);
	
	var progress = new Progress( $('.intro') );
	progress.stages( !ie ? 4 : 3 );
	progress.onDone( introBegin );
	progress.next(); // первый этап бутафорный, чтобы создавалось впечатление загрузки на медленных соединениях
	
	var background = new Image();
	background.onload = progress.next;
	background.src = '/img/intro-bg.jpg';
	
	
	var logotype = new Image();
	logotype.onload = progress.next;
	logotype.src = '/img/logotype.png';
	
	var logotype2 = new Image();
	logotype2.onload = progress.next;
	logotype2.src = '/img/logotype.svg';

	
	var 
		intro = $('.intro'),
		contacts = $('.contacts', intro),
		title = $('.title', intro);
	
	
	function introBegin()
	{			
		var a_background = new Animation( $('.background', intro), 'animate', {opacity: 1} );
		var a_title = new Animation( function titlePrepare() { title.removeClass('hidden') } ).delay( 100 );
		var a_logo = new Animation( $('.logotype', title), { transform: 'translateX(0)', opacity: 1 } );
		var a_form = new Animation( $('.form', title), { transform: 'translateY(0)', opacity: 1 });
		var a_name = new Animation( $('.name', title), { transform: 'translateY(0)', opacity: 1 });
		var a_shadow = new Animation( $('.shadow', intro), 'animate', {opacity: 0.4} ).delay( 500 ).duration( 2000 );
		var a_menu = new Animation( $('.menu', intro),  { transform: 'translateY(0)' } ).delay( 500 ).duration( 1000 );
		var a_addr = new Animation( $('.address, .phone, .onmap', contacts),  { transform: 'translateX(0)', opacity: 1 } ).delay( 800 ).duration( 1000 );
		
		a_background.next( a_title ).next( [a_logo, a_form, a_name] ).next( [a_shadow, a_menu, a_addr] ).done( introScroll );
		a_background.start();	
	}
	
	function introScroll()
	{
		var menu = $('.menu', intro), top = menu.position().top,
				logo = $('.svg-logo', title);

		menu.css({transition: 'none', bottom: 'auto', top: top});
		logo.css( logo.position() ).css( {transition: 'all 1s'} );
		
		logo.css('visibility', 'visible');
		$('.logotype, .name, .form', title).remove();//.css('opacity', 0);
		
		var a_menu = new Animation( menu, 'animate', {top: 0}).duration( 1000 );
		var a_logo = new Animation( function() { logo.addClass('animated') } ).delay( 100 );
		var a_background = new Animation(  $('.background', intro), 'animate', { top: '-100%' }).duration( 1000 );
		var a_intro = new Animation( intro, 'animate', {height: menu.height()}).duration( 1000 );
		var a_name = new Animation( $('.name', menu), { transform: 'translate(0)', opacity: 1 } );
		var a_body = new Animation( function() { $('body').css({'overflow': 'visible'}) } );
		
		
		var group = new AnimationGroup( [a_menu, a_logo, a_intro] );
		group.next( a_name ).next( a_body );
		group.start();
	}
})