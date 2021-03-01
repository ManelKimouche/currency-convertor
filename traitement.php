<?php

if(isset($_POST['submit'])){

$from= $_POST['from'];
$to=$_POST['to'];
$val=$_POST['val'];
$new_val=$_POST['new_val'];



//convert any currency to USD
switch ($from) {
    case "USD":
        $val_in_usd=$val;
        break;
    case "EURO":
        $val_in_usd=$val*1.2227 ;
        break;
    case "POUND":
        $val_in_usd=$val*1.4135;
        break;
    case "YEN":
        $val_in_usd=$val*0.0094;
        break;
    case "DZD":
        $val_in_usd=$val*0.0075;
        break;
    case "AED":
        $val_in_usd=$val*0.27223;
        break;
}

//convert from usd to others
switch ($to) {
    case "USD":
        $new_val=$val_in_usd;
        break;
    case "EURO":
        $new_val=$val_in_usd*0.8180;
        break;
    case "POUND":
        $new_val=$val_in_usd*0.7075;
        break;
    case "YEN":
        $new_val=$val_in_usd*106.1774;
        break;
    case "DZD":
        $new_val=$val_in_usd*132.55478;
        break;
    case "AED":
        $new_val=$val_in_usd*3.67275;
        break;
}




}
?>