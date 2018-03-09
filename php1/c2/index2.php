<?php 
// Ternaren operator

$name = 'stavre';
if($name == 'stavre'){
	echo 'Tocno ime';
} else {
	echo 'Netocno ime';
}
echo '<br>';

echo $name == 'Stavre' ?  'Tocno ime' : 'Netocno ime';


// pecatenje so dupli navodnici

echo '<br>';
echo '$name' . '<br>';
echo "$name e zver";
echo '<hr>';

// NIZI

// $knigi = array();
$serii = ['Game Of Thrones', 'House of Cards', 'Gossip Girl'];

echo $serii[0];	
echo '<br>';

var_dump($serii);
echo '<br>';

echo '<pre>';
print_r($serii);
echo '</pre>';

// asocijativen
$random_skraten = [1,2,3];
$random = [ '0' => '1', '1' => '2', '2' => '3' ];

$serija = ['name' => "GOT", 'year' => '2013'];

echo $serija['year'];
// multidimenzionale array
$serija = ['name' => "GOT", 'year' => '2013', ['producent' => 'Stavre']
 			,'dolzina' => ['sekundi' => 157000]];

echo '<pre>';
print_r($serija);
echo '</pre>';

echo $serija[0]['producent'];
echo '<pre>';


echo $serija['dolzina']['sekundi'];

$action = 'delete';

echo '<pre>';

switch ($action) {
	case 'open':
		echo 'akcijata koja e odbravte e open';

	    break;

	case 'edit':
		echo 'akcijata koja e odbravte e edit';
		
	    break;
	
	default:
		echo 'nepostoecka akcija';
		# code...
		break;
}
 echo '<hr>';
$serii = ['Game Of Thrones', 'House of Cards', 'Gossip Girl'];

echo $serii[0] . '<br>';
echo $serii[1] . '<br>';
echo $serii[2] . '<br>';

for($i = 0; $i < count($serii); $i++){
	echo $serii[$i] . '<br>';
}
echo '<hr>';
for($i = 1; $i <= 3; $i++){
	echo $i . '<br>';
}
echo '<hr>';

$elementi = [12, 32 ,15 , 51, 23, 24];
$elementi [7]= 43;
$zbir = 0;


	for($i = 0; $i < count($elementi); $i++ ){
		$zbir += $elementi[$i];
	}

	$sredna = $zbir / count($elementi);

	echo 'Zbirot e ' . $zbir . ' koj bese baran!';
	echo '<br>';
	echo 'sredna vrednost e ' . $sredna . ' koj bese baran!';

// pravilen bug  - free kod :)
// FOREACH

	$zbir = 0;
	foreach ($elementi as $element) {
		$zbir += $element;
	}
	echo '<br>zbirot e ' . $zbir . ' koj bese baran!<br>' ;


	foreach ($elementi as $key => $element) {
		echo $key;	
		echo '<br>';

}
echo '<br>';
	foreach ($elementi as $key => $element) {
		if($key == 3){
			break;
		}
		echo $key;	
		echo '<br>';

}
echo '<br>';
	foreach ($elementi as $key => $element) {
		if($key == 3){
			continue;
		}
		echo $key . '<br>';

}

$serii = [
			'name' => 'Game Of Thrones',
 			'year' => '1987',
  			'length' => '120m'

  		];

  		
foreach ($serii as $property => $value){
	echo "filmot e $value <br>"; 
	echo "godinata e $value <br>";
	echo "godinata e $value <br>";
}


?>

