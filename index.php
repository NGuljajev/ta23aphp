<?php

$bool = true && false;
$bool = true || false;
$bool = !false;
$bool = (true && false || true) && !(true || false && true); //false
var_dump($bool);