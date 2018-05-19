<?php

$ProductObj->shop_name = "湯瑪仕肉舖";
$ProductObj->classify_name = "冷凍肉品";
$ProductObj->product_name = "澳洲雪花牛肉片";
$ProductObj->product_price = 134;
$ProductObj->product_num = "320g";

$SrcObj->product_img = "https://assets.honestbee.com/products/images/160/thomas-meat_88010111_88010111-1.jpg";
$SrcObj->product_src = "https://www.honestbee.tw/zh-TW/groceries/stores/thomas-meat/products/1075132";
$myJSON_1 = json_encode($ProductObj, JSON_UNESCAPED_UNICODE);
$myJSON_2 = json_encode($SrcObj, JSON_UNESCAPED_SLASHES);
echo('<br>');
echo('<br>'."ProductObj :".'<br>');
echo($myJSON_1);
echo('<br><br>'."SrcObj :".'<br>');
echo($myJSON_2);