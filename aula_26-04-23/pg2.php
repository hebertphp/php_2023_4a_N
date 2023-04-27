<?php
$i=0;
while ($i <= 5) {
    echo  "$i  ";
    $i++;
}
echo "<hr>";
/*
Saída: 0 1 2 3 4 5 
1) Qual o valor inicial? 0
2) Qual a condição? $i<=5
3) Qual é o contador? $i++
4) Quantas vezes o looping foi executado? 6
5) Qual o valor que tornou a condição falso? 6
*/
$j=7;
while($j<=10){
    echo "$j ";
    $j++;
}
echo "<hr>";
/*
Saída: 7 8 9 10
1) Qual o valor inicial? 7
2) Qual a condição? $j<=10 ou $j<11
3) Qual é o contador? $j++
4) Quantas vezes o looping foi executado? 4
5) Qual o valor que tornou a condição falso? 11
*/
$i=4;
while ($i >= 0) {
    echo  "$i  ";
    $i--;
}
echo "<hr>";
/*
Saída: 4 3 2 1 0
1) Qual o valor inicial? 4
2) Qual a condição? $k>=0 ou $k>-1
3) Qual é o contador? $k--
4) Quantas vezes o looping foi executado? 5
5) Qual o valor que tornou a condição falso? -1
*/
$i=0;
while($i<=10){
    echo "$i ";
    $i+=2;
    //$i++;$i++;
    //$i++//$i=$i+1//$i+=1
    //$i+=1 //
}
/*
Saída: 0 2 4 6 8 10
1) Qual o valor inicial? 0
2) Qual a condição? $i<=10 ou $i<11 ou $i<12
3) Qual é o contador? $i+=2
4) Quantas vezes o looping foi executado? 6
5) Qual o valor que tornou a condição falso? 12
*/
?>