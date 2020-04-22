<?php
namespace Codecademy;

function agreeOrDisagree($first, $second)
{
    if ($first === $second) {
        return "You agree!";
    } else {
        return "You disagree!";
    }
}

echo agreeOrDisagree("left", "right"); 
echo "\n\n";
echo agreeOrDisagree("ok", "ok"); 
echo "\n\n";


function checkRenewalMonth($renewal_month){
  $current_month = date("F");
  if ($renewal_month !== $current_month) {
    return "Welcome!";
  } else {
    return "Time to renew";
  }
}

/* We get the current month with a function, so that it's always accurate. You can invoke your function with the current month as a string. */ 
$current_month = date("F");
echo checkRenewalMonth($current_month);

echo "\n\n";
echo checkRenewalMonth("July");