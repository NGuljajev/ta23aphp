<?php
 
class Box {
    public $width;
    protected $height;
    private $length;
 
 
    public static $count = 0;

    public static function test()
    {
        //var_dump($this->width);    
    }
 
    public function __construct($w, $h, $l) 
    {
        self::$count++;
        $this->width = $w;
        $this->height = $h;
        $this->length = $l;
    }
 
    public function getWidth() {
        return $this->width;
    }
    public function getWidth($width) 
    {
        if ($width > 0 && is_numeric($width)) {
            $this->width = $width;
        }
    }
 
    public function volume() {
        return $this->width * $this->height * $this->length;
    }
}
 
class MetalBox extends Box {
    public $material = "Metal";
    public $massPerUnit = 2;
 
    public function changeWidth() {
        $this->width = 333;
    }
 
    public function mass() {
        return $this->volume() * $this ->massPerUnit;
    }
}
 
$metalBox = new Box(2, 3, 4,);
$metalBox::$count = 1;
$box2 = new Box(2, 4, 5); 
$box2 :: $count = 2; 
var_dump($metalBox::$count, $box2::$count);

 
var_dump($metalBox);
var_dump($metalBox->volume());