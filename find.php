<?php

$arr = ["Зимний лес", "Во имя короля и рыцарей круглого стола", "Воительница в ожидании своего часа", "Парящие горы", "Осенние мечтания и надежды", "Бескрайние пустоши и развалины", "Следопыт странник ветра", "Неземная красота"];
$key = isset($_GET["key"]) ? strtolower($_GET["key"]) : "";

foreach ($arr as $k => $v) {
	if ($key && strpos(strtolower($v), $key) !== false)
		echo "<li>".$v."</li>";
}

?>