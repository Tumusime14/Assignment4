<?php
$terms = 10;
$firstTerm = 0;
$secondTerm = 1;
echo $firstTerm . ", " . $secondTerm;
for ($i = 3; $i <= $terms; $i++) {
  $nextTerm = $firstTerm + $secondTerm;
  echo ", " . $nextTerm;
  $firstTerm = $secondTerm;
  $secondTerm = $nextTerm;
}
?>