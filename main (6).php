<?php
/******************************************************************************

    Emre Üçbudak Karadeniz Teknik Üniversitesi

*******************************************************************************/
//  dizi farklı elemanlarını bulmak için array_merge
$dizi = array("emre","üçbudak");
$dizi1 = array("ktü");
$yenidizi = array_diff($dizi,$dizi1);
echo($yenidizi[0])
?>
