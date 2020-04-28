<?php

$is_wearing_glasses = TRUE;
$is_wearing_contacts = TRUE;

if ($is_wearing_glasses xor $is_wearing_contacts){
    echo "Your vision is corrected!";
} else {
    echo "Your vision is impaired.";
}



$banana_cream = ["whole milk", "sugar", "cornstarch", "salt", "egg yolks", "butter", "vanilla extract", "bananas", "heavy cream", "powdered sugar"];
$experimental_pie = ["whole milk", "sugar", "bananas", "chicken", "salmon", "garlic"];

// Write your code below:
function eatPie($ingredients){
  if (in_array("chicken", $ingredients) xor in_array("bananas", $ingredients)){
    return "Delicious pie!";
  } else {
    return "Disgusting!";
  }
}

echo eatPie($banana_cream);
echo "\n\n";
echo eatPie($experimental_pie);



$is_admin = FALSE;
$is_user = TRUE;
if ($is_admin or $is_user){
  echo "You can change the password.\n";
}


$correct_pin = TRUE;
$sufficient_funds = TRUE;
if ($correct_pin and $sufficient_funds){
  echo "You can make the withdrawal.";
}


