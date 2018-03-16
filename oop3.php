<?php

class A {

	public $name;
	public function start(){
		echo 'Starting:'.$this->name;
	}

	public function setName($n){
		$this->name = $n;
	}
}

class B extends A {

	public function end(){
		echo 'Ending:'.$this->name.'<br/>';
	}

}

//$b = new B;
//$b->name = 'Pero';
//$b->setName('Janko');
//$b->start();
//$b->end();

class Document {
	public $name ;
	public $size;
	public$type;
}

interface iDocument{
	public function GetContent();
}

class Excel extends Document implements iDocument{
	public function GetContent(){
		echo 'Excel content output!<br/>';
	}

}
class Word extends Document implements iDocument{
	public function GetContent(){
		echo 'Word content output!<br/>';
    }
}
class PowerPoint extends Document implements iDocument{
	public function GetContent(){
		echo 'Power Point content output!<br/>';
    }
}





?>