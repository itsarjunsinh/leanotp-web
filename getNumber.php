<?php
echo "Base script working\n";
$fp = fopen("requestQueue", "r+") or die("Unable to open file!");
$queue = file_get_contents("requestQueue");
$first_num = substr($queue, 0, 9);
echo "\n1:".$queue;
echo "\n2:".$first_num;
$queue = file_get_contents("./requestQueue");
$first_num = substr($queue, 0, 9);
echo "\n21:".$queue;
echo "\n22:".$first_num;
echo "\n23:".fgets($fp);
file_put_contents($fp, substr($queue, 9 + 1));
fclose($fp);
?>
