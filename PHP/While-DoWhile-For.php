<?php 

$noticias = array();

$noticias[1]["titulo"] = 'título da notícia 1';
$noticias[1]['conteudo'] = 'conteúdo dessa notícia 1';

$noticias[2]['titulo'] = 'título da notícia 2';
$noticias[2]['conteudo'] = 'conteúdo dessa notícia 2';

$noticias[3]['titulo'] = 'título da notícia 3';
$noticias[3]['conteudo'] = 'conteúdo da notícia 3';

//var_dump($noticias);
$idx = 1;

/*while ($idx <= 3) {
		
		echo $noticias[$idx]['titulo'];
		echo '<br>';
		echo $noticias[$idx]['conteudo'];
		echo "<br><br>";

		$idx = $idx + 1;
} */

/*do{
	echo $noticias[$idx]['titulo'];
	echo "<br>";
	echo $noticias[$idx]['conteudo'];
	echo "<br><br>";
	$idx = $idx + 1;
}while($idx <=3 );  */

for($idx = 1; $idx <= 3; $idx = ++$idx){
	echo $noticias[$idx]['titulo'];
	echo "<br>";
	echo $noticias[$idx]['conteudo'];
	echo "<br><br>";

}
?>