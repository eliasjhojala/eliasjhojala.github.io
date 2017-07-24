<?php function isEven($x) { return $x % 2 == 0; } ?>
<?php function isOdd($x) { return $x % 2 == 1; } ?>
<?php function ifEven($x, $a, $b) { if(isEven($x)) return $a; else return $b; } ?>
