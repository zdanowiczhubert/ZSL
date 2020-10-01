<?php
  $text = <<<  T
    zsl - Zespół
    Szkół
    Łączności<br>
T;

  echo $text;
  echo nl2br($text);

  $name = 'jaNUsZ <br>';

//zamiana na małe litery
  $name = strtolower($name); //janusz
  echo $name;

//zamiana na duże litery
  $name = 'KRyStYna <br>';
  echo strtoupper($name); //KRYSTYNA

//zamiana pierwszej litery na dużą
  $name = 'aNNa noWak <br>';
  echo ucfirst($name); //ANNa noWak

//Zamiana wszystkich pierwszych liter w słowach
  echo ucwords($name); //ANNa noWak
  echo "<hr>";

//zad 1.
//zamień $name, aby wyglądała w następujący sposób: Anna Nowak
  echo ucwords(strtolower($name));

// LOREUM IPSUM
$text = <<<LOREM
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
 non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
LOREM;

  echo "$lorem<br>";
  $col = wordwrap($lorem, 40, '<br>');
  echo $col,"<br>";
  $col = wordwrap($lorem, 40, '<hr');
  echo $col;

//czyszczenie zawartości bufora
  ob_clean();

//usuwanie białych znakówarning
  $name = 'Anna';
  $name1 = '  Anna ';
  echo 'Długość $name: ',strlen($name); //4
  echo '<br>Długość $name1: ',strlen($name1),'<br>'; //7

  echo strlen(ltrim($name1)); //5
  echo strlen(rtrim($name1)); //6
  echo strlen(trim($name1)); //4

  echo  strlen($name1); //7
  $name1 = trim($name1);
  echo strlen($name1); //4

//przeszukiwanie ciągów znaków
  $address = "Poznań, ul. Polna 2, tel. (61)123-45-67";
  $search = strstr($address, 'tel');
  echo "<br>$search<br>";// tel. (61)123-45-67

  $address = "Poznań, ul. Polna 2, tel. (61)123-45-67";
  $search = strstr($address, 'tel', true);
  echo "<br>$search<br>";//Poznań, ul. Polna 2,

  $address = "Poznań, ul. Polna 2, tel. (61)123-45-67";
  $search = strstr($address, 'Tel', true); //Poznań, ul. Polna 2,
  echo "<br>$search<br>";

  echo strstr('zsl@gmail.com', '@');//@gmail
  echo strstr('zsl@gmail.com', 64);//@gmail

  $domain = substr(strstr('zsl@gmail.com','@'), 1);
  echo "<br>$domain";

?>
