<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<? include 'site_top.inc'; ?>
<? include 'header.inc'; ?>
<? include 'mainmenu.inc'; ?>

<script>document.title += ' - Вновь учтенные объекты недвижимости'</script>
<div class="section body">
	<p class="content-anchor"><a name="about">&nbsp;</a></p>
	<div class="content b-corruption">
		<h1 class="title">Акты об определении кадастровой стоимости в соответствии ст.16 Федерального закона от 03.07.2016 N 237-ФЗ «О государственной кадастровой оценке»</h1>
		<p>Акт об определении кадастровой стоимости содержит сведения о кадастровой стоимости вновь учтенных объектов недвижимости, ранее учтенных объектов недвижимости в случае внесения в Единый государственный реестр недвижимости сведений о них и объектов недвижимости, в отношении которых произошло изменение их количественных и (или) качественных характеристик.</p>
		<div class="news-item left">

<?php
$db = new SQLite3("cost.db");
$sql = 'select DocNum,DocDate,URL,Max(DateFound),Max(DateTime) 
from data 
where Comment is null and 
DocName = "(в соответствии ст.16 Федерального закона от 03.07.2016 N 237-ФЗ «О государственной кадастровой оценке»)"
group by DocNum
ORDER BY DocDate DESC';
$result = $db->query($sql);

while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
	echo "	<div class=\"date\">Дата акта определения кадастровой стоимости: ".date('d.m.Y',strtotime($row['DocDate']))."</div>
			<div class=\"descr\">Номер акта определения кадастровой стоимости: № ".$row['DocNum']."</div>
			<div class=\"news-link\"><a href=\"".$row['URL']."\" download><img src=\"/img/icon_download.svg\" width=\"32\" height=\"32\" alt=\"download\"> Скачать документ</a></div>
			<hr>";
  }

unset($db);
?>

		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<? include 'footer.inc'; ?>
<? include 'site_bottom.inc'; ?>