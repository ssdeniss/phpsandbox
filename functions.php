<?php
function simpleFunction()
{
    echo 'Hello world';
}

function sayHello($name)
{
    echo "Hello $name";
}

function addNumbers($num1, $num2)
{
    echo $num1 + $num2;
}

function addFive($num)
{
    echo $num += 5;
}

simpleFunction(); echo '<br>';
sayHello('Joe'); echo '<br>';
addNumbers(2, 3); echo '<br>';
addFive(3); echo '<br>';
