<?php $title = 'Аренда экскаватора';
$description = 'Такая спецтехника, как экскаватор, обладает большой универсальностью, которая допускает его использование в самых различных условиях. Ему подвластны твердые и болотистые грунты. Без него невозможно себе представить ни одну стройку, в том числе и прокладывание дорог и коммуникаций.';
$keywords = '';
$breadcrumb = 'Аренда экскаватора';
$text='<p>'.$description.'</p>';
$array=json_decode('[
{"name":"Экскаватор ДЭМ-114","url":"ekskavator-dem-114"},
{"name":"Экскаватор HYUNDAI R170W-7","url":"ekskavator-hyundai-r170w-7"},
{"name":"Экскаватор ЭО-4225","url":"ekskavator-eo-4225"},
{"name":"Экскаватор ЕК 18-60","url":"ekskavator-dem-114"}
]',true);
include("../project.php"); ?>

