<?php
for ($x = 0; $x <= 17; $x++) {
  echo "<ul>Ik ben $x jaar, dus ik mag niet stemmen.</ul><br>";
}
if ($x == 18) {
    echo "<ul>Ik ben $x jaar, dus ik heb stemrecht.</ul>";
}
?>