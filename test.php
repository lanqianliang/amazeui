<?php

$arr = [1,2,3,4,5,6,7];
$str = "a,b,c,d,e,f,g";
$strtoarr = explode(','$str);
$arrtostr = implode(',',$arr);
$arr_mer = array_merge($arr,$strtoarr);
$strs = $str.$arrtostr;
echo "<pre>";
var_dump($strs);
echo "<pre/>";
