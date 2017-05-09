<?php
$array = [
  'forname' => 'Иван',
  'lastname' => 'Петров',
  'age' => '33',
];
$string = json_encode($array);
echo($string);
