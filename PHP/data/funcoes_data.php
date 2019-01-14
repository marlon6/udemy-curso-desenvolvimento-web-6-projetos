<?php

//date = Y - m - d (Y 4 digitos y dois digitos) h hora, i minutos. 
//a hora virá de acordo com a zona padrão. A alteração é feita no php.ini
//alterar timezone de UTC para Brazil/East
//H sistema de 24h e h sistemas de 12h
echo $data = date('d/m/Y H:i:s'); //$data = date('d/m/Y');


//strtotime = 2015-02-02
$data_inicial = '2015-04-02';
$data_final = '2015-04-05';

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

$diferenca_times = $time_final - $time_inicial;  //diferença em segundos.
//$conversao_dias = $diferenca_times / 60 / 60 / 24;

$diaSegundos = 24*60*60; //1 dia tem 86400s
$diferenca_dias = $diferenca_times / $diaSegundos;

echo '<br>';
echo $diferenca_dias;

?>