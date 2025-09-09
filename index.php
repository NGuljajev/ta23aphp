<?php

for($i=0; $i<10; $i++) {
    var_dump($i);
}

for($a=10;$a>0;$a--) {
    var_dump($a);
}

for($a=1;$a<11111110;$a*=2) {
    var_dump($a);
}

$time = time();
while(time() < $time + 10) {
    var_dump(time());
    // wait 1 second

}
$i = 10;
while($i < 10) {
    var_dump($i);
}
do {
    var_dumb('do');
} while($i > 10);

$array = [1,2,3,4,5];

foreach($array as $value) {
    var_dump($value);
}

$a = 1;
$b = $a;
$b = 2;
var_dump($a);

$array = [1,2,3,4,5];
foreach(array as &$value){
    $value = $value * 2;
}
var_dump($array);