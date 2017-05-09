<?php
$array = [
  'forname' => 'Иван',
  'lastname' => 'Петров',
  'age' => '33',
];
$string = json_encode($array, JSON_UNESCAPED_UNICODE);
echo($string);
