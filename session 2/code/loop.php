<?php
$x = 1;

echo "while: <br>";
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

echo "do… while: <br>";
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

echo "for: <br>";
$x = 1;

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

echo "foreach: <br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

?>
