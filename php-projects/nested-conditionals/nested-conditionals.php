<?php
namespace Codecademy;
$is_elevator_here = true;
  $elevator_direction = "down";
  $my_direction = "up";
  $is_button_pushed = false;

  if ($is_elevator_here){
      if ($elevator_direction === $my_direction){
        echo "I'm in the elevator.";
      } else {
          if ($is_button_pushed){
            echo "I'm waiting...!";
          } else {
              echo "I'm pushing the button.";
          }
     }
  } else {
      if ($is_button_pushed){
          echo "I'm waiting...";
      } else {
          echo "I'm pushing the button.";
      }
   }
   
   function both($first, $second)
{
  if ($first){
    if ($second){
      return "both";
    } else {
      return "not both";
    }
  } else {
    return "not both";
  }
}

echo both(TRUE, TRUE);
echo "\n\n";
echo both(FALSE, FALSE);
echo "\n\n";
echo both(TRUE, FALSE);



function willWeEat($meal_type, $is_hungry){
  if ($meal_type === "dessert" || $is_hungry){
    return "Yum. Thanks!";
  } else {
    return "No thanks. We're not hungry.";
  }
}



echo willWeEat("dessert", false);
echo "\n\n";
echo willWeEat("dinner", false);



$correct_pin = TRUE;
$sufficient_funds = TRUE;
if ($correct_pin && $sufficient_funds){
  echo "You can make the withdrawal.";
}



function clapYourHands($is_happy, $to_know)
{
  if ($is_happy==="happy" && $to_know){
    return "CLAP!";
  } else {
    return ":(";
  }
}

echo clapYourHands("happy", true);
echo clapYourHands("happy", false);


$is_logged_in = FALSE; 
if (!$is_logged_in){
  echo "You must log in to continue.";
}



function duckDuckGoose($is_goose)
{
  if (!$is_goose){
    return "duck";
  } else {
    return "goose!";
  }
}

echo duckDuckGoose(false);
echo duckDuckGoose(!true);
echo duckDuckGoose(true);







