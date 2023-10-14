<?php
$invoiceItem = [
  ['price' => 9.99, 'qty' => 2, 'desc' => 'Item1'],
  ['price' => 12.99, 'qty' => 1, 'desc' => 'Item2'],
  ['price' => 20.99, 'qty' => 3, 'desc' => 'Item3'],
];


$total = array_reduce($invoiceItem, fn($sum, $item) => $sum + $item['qty'] * $item['price'], 0);

echo '<pre>';
print_r($total);
echo '<pre>';