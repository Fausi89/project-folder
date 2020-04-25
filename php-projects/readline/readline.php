<?php

echo "Hi, I'm Aisle Nevertell. What's your name?\n";
$name = readline(">> ");
echo "\nNice to meet you, $name";

echo "\nWhat's your favorite color?\n";
$color = readline(">> ");
if ($color === "green"){
  echo "\nCool, that's my favorite too!";
} else {
  echo "\nOh, $color is nice, I guess…";
}