<?php

$sehirler = array("Balikesir","Kütahya","Ankara","Bursa","Eskişehir","İstanbul");//dizi

for ($i=0;$i<count($sehirler);$i++)//şehirler dizisinin uzunluğu kadar döner
{
//echo $sehirler [i];ekrana yazdırma
echo("<br/>");
}

echo("<br/>");

$i = 0;
do{ 
print_r($sehirler);//ekrana yazdırma
echo("<br/>");
     $i++; 
}while($i<1); 

echo("<br/>");

foreach($sehirler as $key => $sehir)//foreach de tüm elemanlara ulaşılır, yanlızca dizilerle kullanılır,$key indislerini alır
{ 

echo " - ";
echo $key;//indisi


continue;//continue den önceki kodları döndürür sadece

echo "<br/>";
echo $sehir;//ekrana yazdırma
echo("<br/>");
}


?>