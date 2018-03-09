<?php

class Avtomobil {

private $proizvoditel;
private $model;
private $boja;
private $gorivo;
private $godina;



public function setProizvoditel($p){
	$proizvoditeli = ['shkoda','lada','zastava'];

	if (in_array($p,$proizvoditeli)){
		$this->proizvoditel = $p;
	}
}
public function getProizvoditel(){
       return $this->proizvoditel;
    
}


public function setModel($m){
	 $modeli = ['asd','asdf','asdfg'];

	 if (in_array($m,$modeli)){
	 	$this->$model = $m;
	 }
}
public function getModel(){
	   return $this->model;
     } 	



public function setBoja($b){
	$boi = ['crvena','zelena','zolta'];

	if (in_array($b,$boi)){
		$this->$boja = $b;
	}
}
public function getBoja(){
       return $this->boja;
    }



public function setGorivo($g){
	$goriva = ['dizel','benzin','kerozin'];

	if (in_array($g,$goriva)){
		$this->gorivo = $g;
	}
}
public function getGorivo(){
       return $this->gorivo;
    }



public function setGodina($god){
	

	if ($god > 1910){
		$this->godina = $god;
	}
}
public function getPGodina(){
       return $this->godina;
    }




public function vozi() {
	echo "Si vozam jas taka so ".$this->proizvoditel.' '.$this->model.'niz grad.Inache proizvedena vo '.$this->godina.',ama kako nova e...';

    } 
public function kochi(){
	echo 'Za malku ke si ja izgrebav kolata... Koj kje ja bara'.$this->boja.'boja... Arno sto kolava raboti na '.$this->gorivo.' inache  mozeshe da eksplodira!';
    }     

}
$a1 = new Avtomobil;

$a1->setProizvoditel('zastava');
$a1->setModel('panamera');
$a1->setBoja('zelena drech');
$a1->setGorivo('kerozin');
$a1->setGodina('1947');
//print_r($a1);

$a1->vozi();
$a1->kochi();



?>
