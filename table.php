<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$fruits = array("Apple", "Manggo", "Orange", "Kiwi", "Blueberry"); 
$colors = array("Red", "Yellow", "Orange", "Green", "Blue" );

echo "<table border='1'>";
for($i=0; $i<=4; $i++) {
echo "<tr><td> $fruits[$i] </td><td> $colors[$i] </td></tr>";
}
echo "</table>";
?>
</pre>

</body>
</html>
