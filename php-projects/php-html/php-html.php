<?php 
$about_me = [
  "name" => "Aisle Nevertell",
  "birth_year" => 1902,
  "favorite_food" => "pizza"
];

function calculateAge ($person_arr){
  $current_year = date("Y");
  $age = $current_year - $person_arr["birth_year"];
  return $age;
}
?>
<h1>Welcome!</h1>
<h2>About me:</h2>
<?php   
  echo "<h3>Hello! I'm {$about_me["name"]}!</h3>";
  echo "<p> I'm " . calculateAge($about_me). " years old! That's pretty cool, right?</p>";
  echo "<div>What more is there to say? I love {$about_me["favorite_food"]}, and that's pretty much it!</div>";
?>

<h2>Now tell me a little about you.</h2>
