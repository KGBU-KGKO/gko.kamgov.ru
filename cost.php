<?php
$DocName = '';
$KN = htmlspecialchars($_GET["KN"]);
$db = new SQLite3("cost.db");
$sql = 'select * from data where KN="'.$KN.'" and Comment is null and Status = \'Published\' and DateStart <= CURRENT_DATE ORDER BY DateFound DESC, DateTime DESC LIMIT 1';
$result = $db->query($sql);
$row = $result->fetchArray(SQLITE3_ASSOC);
if($row == false){
	echo 'Нет данных. Проверьте правильно ли указан кадастровый номер. Если кадастровый номер указан верно, просьба обратиться по номеру телефона горячей линии 8 (4152) 30-48-44.';
} else {
	if (!empty($row['DocName']) && 
		$row['DocName'] != '(в соответствии ст.16 Федерального закона от 03.07.2016 N 237-ФЗ «О государственной кадастровой оценке»)' &&
		$row['DocName'] != '(в соответствии ст.15 Федерального закона от 03.07.2016 N 237-ФЗ «О государственной кадастровой оценке»)') {
		$DocName = "\"".$row['DocName']."\"";
	} else {
		$DocName = $row['DocName'];
	}

	echo "<div><span class=\"d-block\"><b>Кадастровая стоимость:</b> ".number_format($row['KC'], 2, ',', ' ')." руб.</span>
			   <span class=\"d-block\"><b>Основание:</b> ".$row['DocType']." №".$row['DocNum']." от ".date("d.m.Y",strtotime($row['DocDate']))." ".$DocName."</span>
			   <span class=\"d-block\"><a href=\"".$row['URL']."\"><img src=\"/img/icon_download.svg\" width=\"32\" height=\"32\" alt=\"download\"> Скачать документ</a></span></div>";
}
unset($db); 
?>