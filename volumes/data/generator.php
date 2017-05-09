<?php

class UserGenerator {

  private $num;

  public function __construct($num) {
    $this->num = $num;
  }
  public function generate() {
    $array = [
      'forname' => 'Иван',
      'lastname' => 'Петров',
      'age' => '33',
    ];

    $string = [ $array ];

    if( $this->num > 1 ) {
      for ( ; $this->num > 1; --$this->num) {
        array_push($string, $array);
      }
    }

    $ret = json_encode($string, JSON_UNESCAPED_UNICODE);
    echo($ret);
  }

};

$ug = new UserGenerator(2);
$ug->generate();
