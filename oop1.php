<?php

class Flomaster {

   private $boja; // property

   public function smeniBoja($nova_boja){ // method

         $boi = ['crvena','zelena','sina','crna','zolta'];

         if (in_array($nova_boja, $boi)){
         	$this->boja = $nova_boja;
         } else {
         	echo 'Ne postoi vakva boja:'.$nova_boja.'<br/>';
         }

        
   }

}

$f1 = new Flomaster;
$f2 = new Flomaster;

//$f1->boja = 'crvena';
//$f2->boja = 'zelena';

$f1->smeniBoja('ciklama');
$f2->smeniBoja('sina');

print_r($f1);
print_r($f2);




?>