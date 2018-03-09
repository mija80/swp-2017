<?php 

	function vikni_da(){
		echo 'da';
	}
		vikni_da();

	function vikni_ova($bilo_sto){
		echo $bilo_sto;
	}
	$str = 'asdasda';
	vikni_ova($str);

	echo '<hr>';

	$ime = 'stavre';
 	function ime(){
 		

 		echo $GLOBALS['ime'];
 }

 ime();

	$serija = 'game of thrones';

 	function ime_na_serijata($serija){

 		return 'ovaa serija e ' . $serija;

 		
 }

	$za_pecatenje = ime_na_serijata($serija);
	echo $za_pecatenje;


	echo '<hr>';

	function soberi_dva_broja($broj1, $broj2){
		//return $broj1 + $broj2;

		$zbir = $broj1 + $broj2;
		return $zbir;
	}

	echo soberi_dva_broja('123', '77');

	

	function soberi_go_i_ova_plus($nesto){
		$rez = $nesto + soberi_dva_broja('123', '77');
		return $rez;
	}
	 $brojce = 173;
	 $rezz = soberi_go_i_ova_plus($brojce);
		echo '<br>';
	 echo $rezz;

	 echo '<br>';

	 $brojki = [13 , 7, 16 , 23, 29, 76, 54];

	 
	 

function vrati_parna_niza($niza){

	 foreach ($niza as $broj) {
		if($broj % 2 == 0){
	 		$parna_niza[]=$broj;
	 	}
	 	
	 }

	 return $parna_niza;
}
vrati_parna_niza(brojki);
var_dump($parna_niza);



var_dump($parna_niza2);


 ?>