<?php 
// Define variables
$time = 0;
$waterVolume = 0.30; // filled with water up to one-fourth of its capacity
$cookerOn = true;
$spices = "spices";
$vegetableOil = "vegetable oil";

// Start cooking process
echo "Put pot on fire/cooker.\n";

while ($cookerOn) {
  $time++;
  
  if ($time == 2) {
    echo "Put Indomie instant noodles in the pot.\n";
  }
  
  if ($time == 5) {
    echo "Add $spices and $vegetableOil.\n";
  }
  
  if ($time == 6) {
    echo "Serve the noodles.\n";
    $cookerOn = false;
  }
}
?>
