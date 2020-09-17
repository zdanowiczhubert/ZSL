<?php
    //wersja php 7.4.9
    echo PHP_VERSION, '<br';
  //  echo phpinfo();

  $potega = 2 ** 10;
  echo $potega;

  echo 'a'.'b'.'c'; //a+b+c wyświetli abc
  echo 'a','b','c'; //wyświetli a, wyświetli b, wyświetli c

 // operatory bitowe
 // and &, or |, not ~, xor ^, <<, >>

  $x = 0b1010;
  echo "$x<br>"; //10
  $x = $x << 1;
  echo "$x<br>"; //10100(2) => 4+16=20

  $x= $x >> 2;
  echo "$x<br>"; //101(2) => 1+4=5

  //porównanie
  $x = 10;
  $y = 11;
  echo $x <=> $y;
  $result = $x <=> $y;
  echo $result;

  $x=10;
  $y=10.0;

  if ($x==$y) {
    echo 'zmienne są identyczne<br>';
  }else {
    'zmienne są nieidentyczne<br>';
  }

  echo gettype($x); //integer
  echo gettype($y); //double

#######################################

/*
preinkrementacja ++$x
predekrementacja --$xx
postinkrementacja $x++
postdekrementacja $x--
*/

$x=2;
echo $x; //2
$x=$x--;
$x=$x+3;
echo $x; //5
$x=$x++;
echo $x; //5
$x=++$x;
echo $x,'<br'; //6
$y=++$x,;
$y=++$x*2+3;
echo $x,"<br>"; //8
echo $y; <hr>//19

$x=2;
echo $x++; // 2
echo ++$x; // 4
echo $x; // 4
$y=$x++;
echo $y; // 4
$y=++$x;
echo $y; // 6
echo ++$y; //7

//operatory rzutowania
// bool, int, float, string, array, object, date_sunset

$text='123abc';
$text1=0;
$text2=20;

echo 'Typ danych $text:',gettype($text),'<br>';
$x=(int)$text;
echo $x;
echo '<br>Typ danych $x',gettype($x),'<br>';
echo '<br>Typ danych
$text:',gettype($text),'<br>';

$x=(bool)$text1;
echo $x; //false


 ?>
