<?php
	//sleep(3);
	// 创建XML数据
	$xml = new DOMDocument('1.0', 'UTF-8');
	$oCountry = $xml->createElement('country');
	$array = array('北京市', '上海市', '重庆市', '成都市');
	foreach($array as $city) {
		$oCity = $xml->createElement('city');
		$oText = $xml->createTextNode($city);
		$oCity->appendChild($oText);
		$oCountry->appendChild($oCity);
	}
	$xml->appendChild($oCountry);
	header('Content-Type:text/xml; charset=utf-8');
	echo $xml->saveXML();
	//创建JSON数据
	// $json = array(
	// 	array(
	// 		'id'=> 1,
	// 		'name'=> '刘德华',
	// 		'age'=> 56,
	// 	),
	// 	array(
	// 		'id'=> 2,
	// 		'name'=> '张学友',
	// 		'age'=> 48,
	// 	),
	// 	array(
	// 		'id'=> 3,
	// 		'name'=> '郭富城',
	// 		'age'=> 67,
	// 	),
	// 	array(
	// 		'id'=> 4,
	// 		'name'=> '黎明',
	// 		'age'=> 34,
	// 	),
	// 	array(
	// 		'id'=> 5,
	// 		'name'=> '梁家辉',
	// 		'age'=> 45,
	// 	)
	// );

	// echo json_encode($json);
?>
