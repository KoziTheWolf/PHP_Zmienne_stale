<?php
//ZAD1
//kod oblicza pierwiastek z podanej liczby w zmiennej x i ma zabezpieczenie na liczby minusowe

$x=3;
if ($x<0)
{
    echo"error";
}
else 
{
    $wynik=sqrt($x);
    echo$wynik."</br>";
}
//ZAD 2
//kod sprawdza która zmienna jest większa
$a=4;
$b=2;
if($a<$b)
{
    echo "b jest większe od a";
}
else if($a>$b)
{
    echo "a jest większe od b";
}
else if($a=$b)
{
    echo "liczby są równe";
}
echo "</br>";
//ZAD3
//kod sprawdza czy dostałeś się do następnej klasy
$ocena =4;
switch($ocena)
{
    case 1:echo "Brak promocji do następnej klasy"; break;

    case 6: echo "Promocja z oceną celującą" ;break;
    
    default: echo "Promocja do następnej klasy";
}

?>