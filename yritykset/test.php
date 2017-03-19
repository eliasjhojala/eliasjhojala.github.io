<?php

$list = "
a
b
c
d
";

$elements = preg_split("/\\r\\n|\\r|\\n/", $list);



foreach ($elements as $element)
    echo"<li>".$element."</li>";

?>
