<?php
$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

echo '<pre>';
print_r(array_chunk($items, 2));
echo  'Preserve Key';
print_r(array_chunk($items, 2, true));
echo '<pre>';