<?php
function faktorijel($a)
{
    $b=$a;
    $rezultat=1;
   for($i=1;$i<=$a;$i++)
   {
        $rezultat=$rezultat*($b);
        $b--;
   }
  return $rezultat;
}
$number=7;
$f = faktorijel($number);
echo "faktorijel od broja $number je $f";


?>

