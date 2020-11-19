<?php
include 'index.html';

// $callList = $_POST['callList'];
// switch ($callList) {
//     case $callList:
//         callList();
//         break;
// }

// function callList()
// {
$product01 = $_POST['product01'];
$price01 = $_POST['price01'];
$product02 = $_POST['product02'];
$price02 = $_POST['price02'];
$product03 = $_POST['product03'];
$price03 = $_POST['price03'];

$table  = '<table id="tableList">';
$tableC = '</table>';
$tr     = '<tr class="tr">';
$trC    = '</tr>';
$td     = '<td class="td">';
$tdC    = '</td>';


echo $table;
echo $tr . $td . $product01 . $tdC . $td . $price01 . $tdC . $trC;
echo $tr . $td . $product02 . $tdC . $td . $price02 . $tdC . $trC;
echo $tr . $td . $product03 . $tdC . $td . $price03 . $tdC . $trC;
echo $tableC;
// }
