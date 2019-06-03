<?php

spl_autoload_register(function ($className) {
    include $className . '.php';
});


$Beast = new Character(rand(60,90), rand(60,90), rand(40,60), rand(40,60), rand(25,40)); 
$Hero  = new Character(rand(70,100), rand(70,80), rand(45,55), rand(40,50), rand(10,30)); 


$is_running = true;
$max_tries  = 20;
$is_first = '';
$damage = 0;

if ($Hero->__get('speed') > $Beast->__get('speed')){
    $is_first = 'hero'; 
} elseif ($Hero->__get('speed') == $Beast->__get('speed')){
    if ($Hero->__get('luck')>$Beast->__get('luck')){
        $is_first = 'hero';
    } else {
        $is_first = 'beast';
    }
} else {
    $is_first = 'beast';
}


while ($Hero->__get('health')!=0 && $Beast->__get('health')!=0 && $max_tries!=0){

   if ($is_first=="beast"){

    $damage = $Beast->__get('strength') - $Hero->__get('defence');
    $damage = $Hero->__get('health') - $damage;

    $Hero->__set('health',$damage);
    $is_first=="hero";

   } else {
    $damage = $Hero->__get('strength') - $Beast->__get('defence');
    $damage = $Beast->__get('health') - $damage;

    $Beast->__set('health',$damage);
    $is_first=="beast";
   }

    $max_tries--;
}


