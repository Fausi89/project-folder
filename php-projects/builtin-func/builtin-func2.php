<?php
namespace Codecademy;

// Write your code below:
function convertToShout($str)
{
  return strtoupper($str) . "!";
}

function tipGenerously($cost)
{
  return ceil($cost * 1.2);
}

function calculateCircleArea($diameter)
{
  return pi() * ($diameter/2)**2;
}

//Tests: 
echo convertToShout("woah there, buddy"); 
// Prints: WOAH THERE, BUDDY!
echo "\n";
echo convertToShout("i just don't know");
// Prints: I JUST DON'T KNOW!
echo "\n";
echo tipGenerously(100.00); // Prints: 120
echo "\n";
echo tipGenerously(982.27); // Prints: 1179
echo "\n";
echo calculateCircleArea(6); 
// Prints: 28.274333882308
echo "\n";
echo calculateCircleArea(29); 
// Prints 660.51985541725  