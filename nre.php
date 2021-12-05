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
	echo "	<div class=\"date\">Дата акта определения кадастровой стоимости: ".$row['DocDate']."</div>
			<div class=\"descr\">Номер акта определения кадастровой стоимости: № ".$row['DocNum']."</div>
			<div class=\"news-link\"><a href=\"".$row['URL']."\" download><img src=\"/img/icon_download.svg\ width=\"32\" height=\"32\" alt=\"download\"> Скачать документ</a></div>
			<hr>";
  }

unset($db);
?>