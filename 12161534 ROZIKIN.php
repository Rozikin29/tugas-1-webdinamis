<?php

	$sayuran = [
		['kangkung' => ['warna' => 'hijau', 'bentuk' => 'rumput', 'rasa' => 'pait']], 
		['pare' => ['warna' => 'hijau', 'bentuk' => 'lonjong', 'rasa' => 'manis']], 
		['kacang panjang' => ['warna' => 'hijau', 'bentuk' => 'menjulur', 'rasa' => 'asin']], 
		['bayam' => ['warna' => 'hijau', 'bentuk' => 'rumput', 'rasa' => 'asam']], 
		['terong' => ['warna' => 'ungu', 'bentuk' => 'lonjong', 'rasa' => 'manis']], 
		
	];

	for ($i=0;$i<3;$i++)
	{
		echo '<pre>'; print_r($sayuran);
	};
?>