<?php include('../../bd.php');
$name = 'sobol-gaz-2752';
$array = $bd[$name];

$title = $array['name'];
$description = '';
$keywords = '';
$breadcrumb = $array['name'];
$table = json_decode('[{"name":"Технические характеристики ГАЗ-2752","tb":[["Грузоподъемность","0,9т"],["Пассажирских мест","5"]]}]',true);
$opisanie = 'Автомобиль ГАЗ-2752 серии "Соболь-Бизнес" — цельнометаллический грузовой или грузопассажирский фургон, очень популярный как для ведения малого бизнеса, так и в качестве личного автомобиля. На ежегодной премии "Автомобиль года в России - 2012" ГАЗ-2752 "Соболь-Бизнес" стал победителем в номинации "Легкие фургоны".';
?>