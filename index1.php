<?php

function addition($nombre1, $nombre2)
{
  $result = $nombre1 + $nombre2;
  return $result;
}
echo "<br>";
echo addition(1, 2);
echo "<br>";


function soustraction($nombre1, $nombre2)
{
  $result = $nombre1 - $nombre2;
  return $result;
}
echo "<br>";
echo soustraction(20, 2);
echo "<br>";

function multiplication($nombre1, $nombre2)
{
  $result = $nombre1 * $nombre2;
  return $result;
}
echo "<br>";
echo multiplication(12, 5);
echo "<br>";

function modulo($nombre1, $nombre2)
{
  $result = $nombre1 % $nombre2;
  return $result;
}
echo "<br>";
echo modulo(10, 3);
echo "<br>";