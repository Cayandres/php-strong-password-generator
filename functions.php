<?php 
function passwordGenerator($length){
  $psw = ''; 

  $pswCharList = [
    'abcdefghijklmnopqrstuvwxyz',
    'ABCDEFGHIJKLMNOPQRSTUVXYZ',
    '0123456789',
    '!£$%&()=?°*;:><'
  ];
  
  $pswCharIndex = 0;

  while (strlen($psw) < $length) {
    $charStr = $pswCharList[$pswCharIndex];
    $char = $charStr[rand(0, strlen($charStr) -1)];
    $psw .= $char;
    $pswCharIndex++;
    if($pswCharIndex === count($pswCharList)) $pswCharIndex = 0;
  }
  return str_shuffle($psw);
}



?>