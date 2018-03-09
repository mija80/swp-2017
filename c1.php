<?php 

echo "<h1>Hello World</h1>";

$ime = '<h2>Bojan</h2>';
echo $ime;
$prezime = "Gavrovski";

?>

<div>
   // <h1>Zdravo<?php echo $prezime; ?></h1>
   <p>fjvhdoughuotfhujgbfjfnbjf</p>
</div>

<?php

$string = "k.jfvdghvbjkfdvbjkgfvjkg";
$integer = 10;
$float = 3.14;
$boolean = false;

echo '<br/>';
echo $integer;
echo '<br/>';
echo $float;
echo '<br/>';
echo $boolean;
echo '<br/>';


$a = 10;
$b = 3;

//echo $a + $b; // sobiranje
//echo $a - $b; // odzemanje
//echo $a * $b; // mnozenje
//echo $a / $b; // delenje
//echo $a % $b; // modul

function foo ($a,$b){
	return $a + $b;

}
echo foo (3,10);


// echo ubav_den ("ponedelnik"); // losh den (10 karakteri)
// echo ubav_den ("vtornik"); // ubav den (7 karakteri)

 $den = "" ;

//function ubav_den ($den){
     if (strlen($den) % 2 == 1){
     	echo "ubav den";
     } else {
     	echo "losh den";
     }
//}

ubav_den("vtornik");
ubav_den("ponedelnik");

function ubav_den ($den){
	if (strlen($den) % 2 == 1){
		return "ubav den";
	}else{
		return "losh den";
	}
};
  
echo '<br/>';


$c = 8;
$d = 75;
$e = 92;


if ($c == $d && $e % 2 == 0 || $c + $e == 100){
	echo "Vistina";
}else {
	echo "Nevistina";
}

$broj = 2 ;
$karakter = '2';

if ($broj == $karakter) {
	echo "Broj == Karakter";
}else {
	echo 'Broj != Karakter';
}
echo '<br/>';


$jazik = 'php';

switch ($jazik) {
	case 'php':
		echo 'znam php';
		break;

		case'javascript':
        echo 'znam java script';
        break;	
	default:
		echo ' nepoznato';
		break;
}
echo '<br/>';

$i = 100;
for ($i = 1; $i < 100; $i++){
	if($i % 2 == 0){
   		echo $i.'<br/>'; 
 
   }
 } 

// while 1 -> 100, sekoj tret neparen broj

 $x = 0 ;
 $counter = 0;

 while ($x < 100){

       if ($x % 2 == 1){
          $counter ++; 
       
       if ($counter == 3){
       	$counter = 0 ;
       	echo $x.'</br>';
       }
 }
 $x++;
}
// echo '<br/>';

$niza = ['pero','janko','stanko'];

$br = count($niza);
for($i= 0; $i< $br; $i++){
	echo $niza[$i].'<br/>';

}


foreach ($niza as $index => $value){
	echo $index.'='.$value.'<br/>';
}
echo '<br/>';

foreach($niza as $value){
	echo $value.'<br/>';
}

?>
 

 <?php

$iminja = ['Marija', 'Aleksandar','Stojan','Suzana','Aleksandra','Ana','Katerina','Margarita','Tomas','Magdalena'];

foreach($iminja as $i){
	if (strlen($i) > 7){
		echo $i.',';
	}
	echo '<br/>';

}

$studen = [
        
     'ime' => 'Bojan',
     'prezime'=> 'Gavrovski',
     'prosek' => 6.4

];
  echo $student['ime'].''.$student['prezime'];
  echo'<br/>';
  echo $student['prezime'];
  echo'<br/>';

  foreach ($student as $k => $v) {
  	echo $k. '<br/>';
  	echo $v. '<br/>';
  }

    echo'<br/>';


 ?>

 <?php
$studenti = [
      ['ime' => 'Pero', 'prezime' => 'Provski'],
      ['ime' => 'Ivan', 'prezime' => 'Ivanovski'],
      ['ime' => 'Janko', 'prezime' => 'Jankovski'],
];

echo $studenti[1]['prezime'];
echo $studenti[2]['ime'];
echo $studenti[0]['prezime'];

echo '<br/>';



 ?>

<table border = "1">
	<tr>
		<?php foreach ($studenti[0] as $k => $v){ ?>
             <th><? = $k ?></th>
		}
     </tr>
		<?php foreach ( $studenti[0] as $student){ ?>
        <tr>
           <td><?= $student['ime']; ?></td>
           <td><?=$student['prezime']; ?></td>	
          
        </tr> 
		<?php } ?>

</table> 

