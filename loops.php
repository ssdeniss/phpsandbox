<?php
//~ Loops

/*
 ?   - For
 ?   - While
 ?   - Do..While
 ?   - Foreach
*/

//$ For

for ($i = 0; $i < 10; $i++) {
    echo $i, " - print i";
    echo "<br>";
}
echo "<br>";

//$ While

$j = 0;

while ($j < 10) {
    echo $j, " - print j";
    echo "<br>";
    $j++;
}
echo "<br>";

//$ Do While

$k = 0;
do {
    echo $k, " - print k";
    echo "<br>";
    $k++;
} while ($k < 10);

echo "<br>";

//$ Foreach

$people = array('Kevin', 'Jeremy', 'Sara');

foreach ($people as $person) {
    echo $person;
    echo "<br>";
}
echo "<br>";
$peopleMail = array('Kevin' => 'brad@mail.com', 'Jeremy' => 'jeremy@mail.com', 'Sara' => 'sara@mail.com');
foreach ($peopleMail as $person => $email) {
    echo $person . ': ' . $email;
    echo "<br>";
}
