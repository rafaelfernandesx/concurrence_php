<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=utf-8");


if (!empty($_GET)) {
	$index = $_GET['index'] ;
	$res = array();

	if ($index > 0) {

		$tempo_inicial = number_format( (float) time() + (float) microtime() , 8, '.', '');

		$res['index'] = $index;
		$res['tempo_inicial'] = $tempo_inicial;
		for ($i=0; $i < $index; $i++) { 
			// só pra da um tempo
		}
	}

	$tempo_final = number_format( (float) time() + (float) microtime() , 8, '.', '');

	$res['tempo_final'] = $tempo_final;
	$res['tempo_execucao'] = $tempo_final - $tempo_inicial;

	echo json_encode($res);

}