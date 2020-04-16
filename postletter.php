<? include 'site_top.inc'; ?>
<? include 'header.inc'; ?>
<? include 'mainmenu.inc'; ?>
<script>document.title += ' - Электронное обращение'</script>


<div class="section">

	<div class="content b-feedback">
		<h1 class="title">Электронное обращение</h1>
		
		<div class="left">
			<p>
				<span class="information-link">Информация о работе Интернет-приёмной</span>
			</p>

			<div class="information-block text">
				<p><b>Пожалуйста, прежде чем отправить обращение в&nbsp;форме электронного документа, внимательно ознакомьтесь со&nbsp;следующей информацией.</b></p>

				<ol>
					<li>
						<p>Обращения, направленные в&nbsp;форме электронного документа через официальный сайт, поступают на&nbsp;рассмотрение в приемную КГБУ КГКО.</p>
					</li>
					<li>
						<p>Перед отправкой обращения в&nbsp;форме электронного документа необходимо корректно заполнить электронную форму.</p></li>
					<li>
						<p>В&nbsp;предназначенном для обязательного заполнения поле ввода текста обращения в&nbsp;форме электронного документа Вы излагаете суть предложения, заявления или жалобы в&nbsp;соответствии со&nbsp;ст.&nbsp;7&nbsp;Федерального закона&nbsp;от&nbsp;2&nbsp;мая 2006&nbsp;года №&nbsp;59-ФЗ «О&nbsp;порядке рассмотрения обращений граждан Российской Федерации».</p>
						<p>В случае, если текст Вашего обращения не позволяет определить суть предложения, заявления или жалобы, ответ на обращение не дается, и оно не&nbsp;подлежит направлению на рассмотрение руководителю организации или должностному лицу, в&nbsp;соответствии с их компетенцией, о чем Вам будет сообщено в течение семи дней со дня регистрации обращения.</p>
					</li>
					<li>
						<p>Если в&nbsp;поле ввода текста обращения не&nbsp;изложено предложение, заявление или жалоба, а&nbsp;только ссылка на&nbsp;приложение либо на&nbsp;контент интернет-сайта, то&nbsp;в&nbsp;ответе на такое обращение разъясняется порядок его рассмотрения, установленный Федеральным законом от&nbsp;2&nbsp;мая 2006&nbsp;года №&nbsp;59 «О&nbsp;порядке рассмотрения обращений граждан Российской Федерации».</p>
					</li>
					<li>
						<p>Обращаем Ваше внимание на&nbsp;порядок рассмотрения отдельных обращений, предусмотренный ст.&nbsp;11&nbsp;Федерального закона&nbsp;от&nbsp;2&nbsp;мая 2006&nbsp;года №&nbsp;59-ФЗ «О&nbsp;порядке рассмотрения обращений граждан Российской Федерации».</p>
					</li>
					<li>
						<p>При направлении Вами обращений, касающихся обжалования судебных решений, необходимо иметь в&nbsp;виду следующее.</p>
						<p>Согласно Конституции Российской Федерации правосудие в&nbsp;России осуществляется только судом. Органы судебной власти самостоятельны и&nbsp;действуют независимо от&nbsp;законодательной и&nbsp;исполнительной властей. Решения судебных органов обжалуются в&nbsp;установленном законом процессуальном порядке.</p>
					</li>
					<li>
						<p>Информация о&nbsp;персональных данных авторов обращений, направленных в&nbsp;форме электронного документа, сведения, содержащиеся в обращениях авторов, а также сведения, касающиеся частной жизни авторов, хранятся и&nbsp;обрабатываются с&nbsp;соблюдением требований российского законодательства.</p>
					</li>
				</ol>
			</div>
			
			<p class="required-note">Поля, отмеченные звездочкой (<span>*</span>), обязательны для заполнения</p>
			
			<form id="feedback-form" class="form bordered" action="/petition/" method="post" onsubmit="return false">
				<div class="group field-question-surname required">
					<label class="label" for="question-surname">Фамилия</label>
					<input type="text" id="question-surname" class="text-field" name="surname" maxlength="255" required />
					<div class="field-error-text">Необходимо заполнить «Фамилия».</div>
				</div>
				
				<div class="group field-question-name required">
					<label class="label" for="question-name">Имя</label>
					<input type="text" id="question-name" class="text-field" name="name" maxlength="255" required />
					<div class="field-error-text">Необходимо заполнить «Имя».</div>
				</div>
				
				<div class="group field-question-patronymic">
					<label class="label" for="question-patronymic">Отчество</label>
					<input type="text" id="question-patronymic" class="text-field" name="patronymic" maxlength="255" />
					<div class="field-error-text"></div>
				</div>
				
				<div class="group field-question-phone">
					<label class="label" for="question-phone">Контактный телефон</label>
					<input type="text" id="question-phone" class="text-field" name="phone" maxlength="15" />
					<div class="field-error-text"></div>
				</div>
				
				<div class="group">
					<label class="label">Способ доставки ответа</label>
					<div class="radio-group">
						<label>
							<input  class="js-ans-type" id="answer_type_email" name="answer_type_email" type="checkbox"  checked="checked"/>
							В электронной форме
						</label>
						<label>
							<input class="js-ans-type" id="answer_type_letter" name="answer_type_letter" type="checkbox" />
							В письменной форме
						</label>
					</div>
				</div>
			
				<div class="group js-email field-question-email required">
					<label class="label" for="question-email">Адрес электронной почты</label>
					<input type="text" id="question-email" class="text-field" name="email" maxlength="255" required/>
					<div class="field-error-text">Укажите ваш email для обратного ответа.</div>
				</div>
			
				<div class="group field-question-letter_info" style="display: none;">
					<label class="label" for="question-letter_info">Почтовый индекс, домашний адрес</label>
					<textarea id="question-letter_info" class="middle" name="post_addr" maxlength="255" style="height: 3em;"></textarea>
					<div class="field-error-text">Для ответа в письменной форме, необходимо указать домашний адрес.</div>
				</div>

				<div class="group checkbox-field required field-question-agree">
					<div class="radio-group">
						<label style="width: 50%;">
							<input type="checkbox" id="question-agree" class="checkbox-field" name="agree" required/> 
							Я даю согласие на обработку, хранение и направление моих персональных данных в целях рассмотрения обращения
						</label>
						<div class="field-error-text">Согласие обязательно!</div>
					</div>
				</div>
				
				<div class="group field-question-text required">
					<label class="label" for="question-text">Текст обращения
					</label>
					<textarea id="question-text" class="middle" name="letter" maxlength="10000" style="width: 100%; height: 30em; box-sizing: border-box" required></textarea>
					<div class="field-error-text textarea-error-text">Тест обращения пуст!</div>
				</div>    

				<!--div class="group field-attachment">
					<div class="file-group">
						<div class="note">
							Вы можете приложить дополнительные документы или материалы в электронной форме, более полно раскрывающие суть Вашего обращения. 
							Размер файла вложения не может превышать 5 Мб. Для вложений допустимы следующие форматы файлов: txt, doc, docx, rtf, xls, xlsx, pps, ppt, pdf, jpg, bmp, png, tif, gif, pcx, mp3, wma, avi, mp4, mkv, wmv, mov, flv.
						</div>
						<label class="btn btn--file btn-gray">
							<input class="js-upload" name="file" id="file" type="file"/> Выберите файл
						</label>
						<div class="files"></div>
					</div>
				</div-->

				<div class="g-recaptcha" data-sitekey="6Le7AEYUAAAAAPc9tG_HZ5KLy9lorJll9Dma76Zy" data-callback='afterCapthaTest'></div>

				<div class="has-error message hidden">
				</div>
				
				<div class="submit-group">
					<button type="submit" class="btn" disabled>Отправить обращение</button> 
				</div>
				
			</form>
		
		</div>
		
		<div class="right">
			<div class="relative-links">
				<a href="/files/01.doc">Политика обработки персональных данных в КГБУ КГКО (приказ от 06.12.2017 № 57-л)</a>
				
			</div>
		</div>
	</div>
	
</div>



<? include 'footer.inc'; ?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
$(function($)
{
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
	/*$('#question-agree').click(function()
	{
		if ( $(this).is(':checked') )
			$('button[type="submit"]').removeAttr('disabled');
		
		else
			$('button[type="submit"]').attr('disabled', '');			
	})*/
	$('#feedback-form').submit(function(e)
	{
		e.preventDefault();		
		if ( checkMandatoryParams( $(this) ) )  onSubmit();		
	})
})

function checkMandatoryParams()
{
	var all_filled = true;
	
	$('.has-error').removeClass('has-error');
	
	$('.group.required').each(function()
	{
		var ctrl = $('[required]', this);
		if ( ctrl.length == 0 ) return;
		
		var checkbox = ctrl[0].type == 'checkbox';		
		var filled = checkbox ? ctrl.is(':checked') : ctrl.val() != '';
		
		if ( !filled )			
		{
			ctrl.parents('.group').addClass('has-error');
			$(document).scrollTop( ctrl.offset().top );
			
			all_filled = false;
			return false;
		}		
	})
	
	return all_filled;
}

function afterCapthaTest()
{
	$('button[type="submit"]').removeAttr('disabled');
	$('.g-recaptcha').hide();
}

function onSubmit()
{
	var 
		form = $('#feedback-form'),
		url = form.attr('action'),
		data = form.serialize();
	
	$.post( url, data, 'json' ).then(function( answer )
	{
		if ( answer ) 
			try
			{
				answer = $.parseJSON( answer );
			}
			catch( e )
			{
				answer = false;
			}
		
		if ( answer && answer.status == 'OK' )
		{
			$('.group, .submit-group', form).hide();
			$('.information-link, .information-block, .required-note').hide();
			$('.message', form).addClass('success').removeClass('has-error').html(answer.message || 'Обращение успешно отправлено').show();
		}
		else
		{
			$('.message', form).addClass('has-error').removeClass('success').html(answer.message || 'Произошла ошибка отправки, попробуйте ещё раз').show();
		}
	})	
}
</script>
<? include 'site_bottom.inc'; ?>