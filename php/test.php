<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Example</title>
</head>
<body>
<?php
          	
function boolNumber($bValue = false) {                      // returns integer
  return ($bValue ? 1 : 0);
}

function boolString($bValue = false) {                      // returns string
  return ($bValue ? 'true' : 'false');
}

$a = true;                                                  // boolean value
echo 'boolean $a AS string = ' . boolString($a) . '<br>';   // boolean as a string
echo 'boolean $a AS number = ' . boolNumber($a) . '<br>';   // boolean as a number
echo '<br>';

$b = (45 > 90);                                             // boolean value
echo 'boolean $b AS string = ' . boolString($b) . '<br>';   // boolean as a string
echo 'boolean $b AS number = ' . boolNumber($b) . '<br>';   // boolean as a number
echo '<br>';

$c = boolNumber(10 > 8) + boolNumber(!(5 > 10));            // adding booleans
echo 'integer $c = ' . $c .'<br>';


 </body>
</html>