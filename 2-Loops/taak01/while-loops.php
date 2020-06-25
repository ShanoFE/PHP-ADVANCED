<?php
$leeftijd = 0;

while($leeftijd <= 17) {
  echo "<ul>Ik ben $leeftijd jaar, dus ik mag niet stemmen<br></ul>";
  $leeftijd++;
}
if ($leeftijd == 18) {
  echo "<ul>Ik ben $leeftijd jaar, dus ik heb stemrecht</ul>";
}
?>