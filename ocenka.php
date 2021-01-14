<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<? include 'site_top.inc'; ?>
<? include 'header.inc'; ?>
<? include 'mainmenu.inc'; ?>
<link rel="stylesheet" href="css/template3.css">
<script>document.title += ' - Государственная кадастровая оценка'</script>

<div class="section">
	<p class="content-anchor"><a name="about">&nbsp;</a></p>
	<div class="content b-corruption">
 		<div class="jumbotron" style="text-align: justify;">	
			<h1 class="display-4">Государственная кадастровая оценка 2020 года.</h1>
			<p class="lead">Приказом Министерства имущественных и земельных отношений Камчатского края от 12.11.2020 № 179 "Об утверждении результатов определения кадастровой стоимости объектов капитального строительства, земельных участков категорий земель населенных пунктов, земель промышленности, энергетики, транспорта, связи, радиовещания, телевидения, информатики, земель для обеспечения космической деятельности, земель обороны, безопасности и земель иного специального назначения, расположенных на территории Камчатского края" утверждены результаты КС 2020 года.</p>
			<div class="news-link my-"><a href="https://www.kamgov.ru/mingosim/document/file/download?id=106330" download><img src="/img/icon_download.svg" width="32" height="32" alt="download"> Скачать приказ</a></div>
			<hr class="my-4">
			<p>Укажите кадастровый номер объекта недвижимости, чтобы узнать его кадастровую стоимость.</p>
			<div class="kn_buttonBlock d-flex align-items-center">
				<form action="">
				<input type="text" id="KadNum" class="kn_button pl-1" name="kn" pattern="^([0-9\:]{,20})$">
				<button class="btn btn-primary" id="btnSearch" type="button" aria-expanded="true" onclick="getNum();">
				Узнать стоимость
				</button>
				</form>
			</div>
			<div id="notify" style="display: none;"><img src="img/802.gif"> Поиск информации. Пожалуйста подождите...</div>
			<div class="collapse" id="collapse">
				<div class="card card-body mx-0">
					<div id="result"></div>
					<br>
					<div class="alert alert-danger" role="alert">
 						 <h4 class="alert-heading">Внимание!</h4>
 						 <p>Данные сведения носят справочный характер, официальные сведения в соответствии с приказом Росреестра от 06.08.2020 № П/0278 "Об утверждении Порядка ведения фонда данных государственной кадастровой оценки и предоставления сведений, включенных в этот фонд, а также Перечня иных сведений о кадастровой стоимости, о порядке и об основаниях ее определения, требований по их включению в фонд данных государственной кадастровой оценки" предоставляются в <a href="https://rosreestr.gov.ru/wps/portal/p/cc_ib_portal_services/cc_ib_ais_fdgko">Фонде данных государственной кадастровой оценки.</a></p>
 						
					</div>
				</div>
			</div>
		</div> 
		<h1 class="title">Государственная кадастровая оценка</h1>
		<div class="news-item left">
			<div class="date">01 декабря 2020 года</div>
			<div class="news-link"><a href="news31.php">Порядок получения сведений о кадастровой стоимости по результатам ГКО 2020</a></div>
			<div class="descr"><p>12 ноября 2020 года Приказом министерства имущественных и земельных отношений Камчатского края № 179 утверждены результаты определения кадастровой стоимости объектов капитального строительства, земельных участков категории земель населенных пунктов, земель промышленности, энергетики, транспорта, связи, радиовещания, телевидения,...</p></div>
			<hr>
			<div class="date">29 июля 2020 года</div>
			<div class="news-link"><a href="ocenka2020.php">Государственная кадастровая оценка 2020. Промежуточный отчёт</a></div>
			<div class="descr"><p>В фонде данных государственной кадастровой оценки размещены промежуточные отчетные документы по определению кадастровой стоимости следующих видов объектов недвижимости, расположенных на территории Камчатского края...</p></div>
			<hr>
			<div class="date">10 апреля 2020 года</div>
			<div class="news-link"><a href="news18.php">О ходе проведения государственной кадастровой оценки.</a></div>
			<div class="descr"><p>2020 год – год проведения государственной кадастровой оценки объектов недвижимости, расположенных на территории Камчатского края.</p></div>
			<hr>
			<div class="date">15 ноября 2019 года</div>
			<div class="news-link"><a href="/files/ocenka2019/Prikaz_MIZO_N158_ot_15-11-2019.pdf">Утверждены результаты определения кадастровой стоимости.</a></div>
			<div class="descr"><p>15 ноября 2019 года утверждены результаты кадастровой стоимости земельных участков в составе земель лесного фонда и земель особо охраняемых территорий и объектов на территории Камчатского края по состоянию на 01 января 2019 года.</p></div>
			<hr>
			<div class="date">05 сентября 2019 года</div>
			<div class="news-link">Окончание ознакомления с Промежуточными отчетными документами.</div>
			<div class="descr"><p>05 сентября 2019 года завершился период ознакомления с Промежуточными отчетными документами об итогах государственной кадастровой оценки земельных участков в составе земель лесного фонда и земель особо охраняемых территорий и объектов на территории Камчатского края.</p></div>
			<hr>
			<div class="date">05 сентября 2019 года</div>
			<div class="news-link">Окончание ознакомления с Промежуточными отчетными документами.</div>
			<div class="descr"><p>05 сентября 2019 года завершился период ознакомления с Промежуточными отчетными документами об итогах государственной кадастровой оценки земельных участков в составе земель лесного фонда и земель особо охраняемых территорий и объектов на территории Камчатского края.</p></div>
			<hr>
			<div class="date">26 августа 2019 года</div>
			<div class="news-link">Окончен прием замечаний к Промежуточным отчетным документам.</div>
			<div class="descr"><p>26 августа 2019 года в Краевом государственном бюджетном учреждении «Камчатская государственная кадастровая оценка» завершился прием замечаний к Промежуточным отчетным документам об итогах государственной кадастровой оценки земельных участков в составе земель лесного фонда и земель особо охраняемых территорий и объектов на территории Камчатского края.</p></div>
			<hr>
			<div class="date">12 июля 2019</div>
			<div class="news-link"><a href="ocenka2019.php">ГКО. Земли особо охраняемых территорий и объектов, земли лесного фонда Камчатского края в 2019 г. Промежуточный отчет.</a></div>
			<div class="descr"><p>Промежуточный отчет об итогах государственной кадастровой оценки земельных участков в составе земель лесного фонда и земель особо охраняемых территорий и объектов на территории Камчатского края.</p></div>
			
		</div>
	</div>
	
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript">
function getNum(){
document.getElementById("btnSearch").disabled = true;
var Num = document.getElementById("KadNum").value;
Num = Num.replace(/ /g,'');
var Jum = document.getElementById("collapse");
var xhr = new XMLHttpRequest();
document.getElementById("notify").style.display = "block";
Jum.style.display = "none";
xhr.open('GET', 'js/realty.json');
xhr.responseType = 'json';
xhr.send();
xhr.onload = function() {
var realty = xhr.response;
try {
  document.getElementById("result").innerHTML = 'Кадастровый номер: '+Num+'<br>Вид объекта недвижимости: '+realty[Num].kind+'<br>'+realty[Num].feature+': '+realty[Num].fvalue+'<br>Кадастровая стоимость, руб.: '+realty[Num].price;
} catch (e) {
  if (e.message=='Cannot read property \'kind\' of undefined') {
    document.getElementById("result").innerHTML = 'Извините, данные отсутствуют или объект недвижимости не учавстсвовал в данном этапе оценки. Проверьте, правильно ли Вы указали кадастровый номер.';
}
}
document.getElementById("notify").style.display = "none";
Jum.style.display = "block"
document.getElementById("btnSearch").disabled = false;
}
}
</script>
<? include 'footer.inc'; ?>
<? include 'site_bottom.inc'; ?>