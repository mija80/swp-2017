<?php

//textfile.php // fopen,fclose,fread,fwrite,filesize,unlink ***shreder**

$fh = fopen('iminja.text', 'a+');

fwrite($fh, 'Pero');

rewind($fh);

//$iminja = fread($fh, filesize('iminja.txt'));

$iminja = fread($fh, 20);
echo $iminja;

fclose($fh);

 



?>