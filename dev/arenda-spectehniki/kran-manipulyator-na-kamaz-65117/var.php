<?php include('../../bd.php');
$name = 'kran-manipulyator-na-kamaz-65117';
$array = $bd[$name];

$title = $array['name'];
$description = '';
$keywords = '';
$breadcrumb = $array['name'];
$table = json_decode('[{"name":"Технические характеристики КАМАЗ-65117","tb":[
["Модель КМУ","Инман, ИМ 95"],["Гр. момент, т/м","8,5"],["Двигатель","Cummins 6 ISBe 300 л.с."]]}]',true);
$opisanie = 'Кран-манипулятор (гидроманипулятор) автомобильный на базе автомобиля КАМАЗ предназначен для выполнения погрузочно-разгрузочных работ, монтажа оборудования и транспортировки груза. Крано-манипуляторная установка (КМУ) компактно складывается в транспортном положении. Гидроманипуляторы имеют малый вес и монтируются практически на все грузовые автомобили.';
?>