<?php
echo "Base script working\n";
$fp = fopen("requestQueue", "r") or die("Unable to open file!");
$contents = file_get_contents($file));
$first_line = substr($contents, 0, 9);
echo $first_line;
file_put_contents($file, substr($contents, 9 + 1));
fclose($fp);
?>
