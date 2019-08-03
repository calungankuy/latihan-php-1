<?php
$b = 'jono';
$a = [1, 2, 4, 'hello', 100, 200, 500, 800, 0, 'juned', $b];
echo $a[0];

for($i = 0; $i < count($a); $i++){
echo 'index array ke- ' . $i . ' Dengan isi data ' .$a[$i] . '<br>';
}
