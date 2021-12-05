$(function($)
{
	//
	// управление раскрытием/сворачиваением контактов
	//
	$('.showmore', '.b-structure').click(function()
	{
		$('.employee.expanded .close', '.b-structure').trigger('click');
		
		$(this).slideUp();		
		$('.simpleinfo', $(this).parents('.employee')).slideDown( function()
		{
			$(this).parents('.employee').addClass('expanded');
		});
	})
	
	$('.simpleinfo .close', '.b-structure').click(function()
	{
		var block = $(this).parents('.employee');
		
		block.removeClass('expanded');
		$('.showmore', block).slideDown();
		$('.simpleinfo', block).slideUp( function() 
		{
			$('.showmore', block).show();
		});
	})
	

	//
	// управление показом документов
	//
	$('.b-documents-document').click(function()
	{
		var t = $(this), target = $(t.data('target'));

		target.fadeIn();
	})
	
	$('.b-documents-popup-close').click(function()
	{
		var t = $(this), target = t.parents('.b-documents-popup');
		
		target.fadeOut();
	})
	

		
	//
	// управление формой обратной связи
	//
	$('.information-link', '.b-feedback').click(function()
	{
		$('.information-block').slideToggle();
	})
	$('#answer_type_email').click(function()
	{
		if ( $(this).is(':checked') )
		{
			$('.field-question-email').addClass('required').slideDown();
			$('#question-email').attr('required', '');
		}
		else
		{
			$('.field-question-email').removeClass('required').slideUp();
			$('#question-email').removeAttr('required');
		}
	})
	$('#answer_type_letter').click(function()
	{
		if ( $(this).is(':checked') )
		{
			$('.field-question-letter_info').addClass('required').slideDown();
			$('#question-letter_info').attr('required', '');
		}
		else
		{
			$('.field-question-letter_info').removeClass('required').slideUp();
			$('#question-letter_info').removeAttr('required');
		}		
	})
})