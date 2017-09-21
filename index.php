<?php
$voti=array(5,5,7,6,9,5,7,8,6,7);
$limite=count($voti);
$somma=0;
for($i=0;$i<$limite;$i++)
{
	$somma+=$voti[$i];
}
$media=$somma/$limite;
echo "Media voti:".$media;