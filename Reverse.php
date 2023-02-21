<?php
$str = "Hello, world!";
$reversed = "";
for ($i = strlen($str) - 1; $i >= 0; $i--) {
  $reversed .= $str[$i];
}
echo "Original string: " . $str . "\n";
echo "Reversed string: " . $reversed . "\n";
?>
