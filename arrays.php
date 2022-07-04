<?php   
//~ Array

/*
 ?   -  Indexed
 ?   - Associative
 ?   - Multi-dimensional
*/



//$ Indexed

$people = array('Kevin', 'Jeremy', 'Sara');
echo $people[1];
echo "<br>";
echo  count($people);
echo "<br>";
echo print_r($people);
echo "<br>";
echo var_dump($people);
echo "<br>";

//$ Associative

$Mens = array('Brad' => 35, 'Jose' => 32);
$Numbers = array(35 => 'Brad', 32 => 'Jose');
echo $Mens['Brad']
?>