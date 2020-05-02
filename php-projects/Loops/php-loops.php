<?php


$count = 1;
while ($count < 11)
{
  echo "The count is: " . $count . "\n";
  $count += 1;
}

$count = 1;
while ($count <= 100)
{
  if ($count % 33 === 0) {
    echo $count . " is divisible by 33\n";
  }
  $count += 1;
}


$count = 1;
do {
  echo "The count is: " . $count . "\n";
  $count += 1;
} while ($count < 11);


for ($count = 1; $count < 11; $count++)
{
  echo "The count is: " . $count . "\n";
}



$counting_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($counting_array as $count) {
  echo "The count is: " . $count . "\n";
}





//This code asks the user to "Guess the number" and continues asking them until they successfully guess 42.
do {
  $guess = readline("\nGuess the number\n");
} while ($guess != "42");
echo "\nYou correctly guessed 42!";


  $plant_height = 22;
  do  {
    echo "The plant is $plant_height tall.\n";
    if ($plant_height >= 30) {
      echo "And can produce fruit.\n";
    }
    $plant_height ++;
  } while ($plant_height < 31);
  
  
  
  for ($i = 10; $i >= 0; $i--) {
    if ($i === 2) {
      echo "Ready!\n";
    } elseif ($i === 1) {
      echo "Set!\n";
    } elseif ($i === 0) {
      echo "Go!\n";
    } else {
      echo $i . "\n";
    }
  }
  
  
  
  
  $details_array = ["color" => "blue", "shape" => "square"];
foreach ($details_array as $detail) {
  echo "The detail is: " . $detail . "\n";
}

//But we can change the syntax slightly to get access to the keys as well as the values:

$details_array = ["color" => "blue", "shape" => "square"];
foreach ($details_array as $attribute => $detail) {
  echo "The " . $attribute . " is: " . $detail . "\n";
}



$scores = [
  "Alice" => 99,
  "Bob" => 95,
  "Charlie" => 98,
  "Destiny" => 91,
  "Edward" => 88
];


foreach ($scores as $result) {
  echo "Someone received a score of $result.\n";
}

foreach ($scores as $student => $result){
  echo "$student received a score of $result.\n";
}



// break and continue.

$count = 1;
while ($count < 11)
{
  echo "The count is: " . $count . "\n";
  if ($count === 5) {
    break;
  }
  $count += 1;
}


$count = 1;
while ($count < 11)
{
  if ($count === 5) {
    $count += 1;
    continue;
  }
  echo "The count is: " . $count . "\n";
  $count += 1;
}



/* LOOPS
Review
Now you have the ability to repeat execution of code blocks as necessary in your PHP programs.

Here is a summary of the topics covered in this lesson:

while loops execute only as long as their conditional evaluates to TRUE.
do…while loops always execute at least once and then continue executing while their conditional is TRUE.
for loops contain 3 expressions and are frequently used to execute a code block a specific number of times.
The first expression is executed prior to the first iteration.
The second expression is evaluated prior to each iteration. If TRUE, the code block executes. Otherwise, the loop terminates.
The third expression is evaluated after each iteration.
foreach loops are used for iterating over the elements of an array. The key and value of each element is available in the code block.
break is used to end execution of a loop early.
continue is used to end execution of a loop iteration early and continues to the next iteration. */


  
  
  
  
  