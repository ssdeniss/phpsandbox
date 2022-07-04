<?php
$num = 5;

if ($num == 5) {
    echo 'true';
} else {
    echo 'false';
}
echo '<br>';
$favColor = 'red';

switch ($favColor) {
    case 'red':
        echo 'Your favorite color';
        break;
    case 'black':
        echo 'Just black...';
        break;
    default:
        echo 'Something else';
}
