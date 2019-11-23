<?php
/*
Yapım:Sefa Sayğan
 */

$pay=3500; // pay
$payda=1500; //payda

$mod=$pay%$payda; // pay ve paydanın modu alınır
if($pay<$payda){ // payda paydan küçükse yapılacaklar

$payim=$pay/$pay; //pay pay ile bölünür
$paydam=$payda/$pay; // payda pay ile bölünür

echo $payim."/".$paydam; // pay ve payda sonucu ekrana yazılır
}
else{// pay büyük veya eşitse yapılacaklar

if($mod){ //mod işlemi çalışıyorsa 
$payim=$pay/$mod; // pay mod ile bölünür
$paydam=$payda/$mod; // payda mod ile bölünür

echo $payim."/".$paydam; // pay ve payda birbirine bölünerek sonuç çıkar.
}else{ // mod işlemi çalışmıyorsa
	echo $pay/$payda; // işlem tam sayıdır ve sadece bölünür
}


}


  ?>