<?php
class Cat {
    use Colorful;
}

class Box {
    use Colorful;
    private $width;
    protected $height;
    private $length;

    public static $count = 0;

    
    public static function test(){
        //var_dump($this->width);
        var_dump(static::class);
    }

    public function __construct($w=0, $h=0, $l=0)
    {
        self::$count++;
        $this->width = $w;
        $this->height = $h;
        $this->length = $l;
    }

    public function getWidth(){
        return $this->width;
    }

    public function setWidth(){
        if($width > 0 && is_int($width)){
            $this->width = $width;
        } else {
            throw new Exception('you are stupid dumbass');
        }
    }

    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}

class MetalBox extends Box {
    public $material = 'metal';
    public $massPerUnit = 2;

    public function changeWidth() {
        $this->width = 333;
    }

    public function mass() {
        return $this->volume() * $this->massPerUnit;
    }
}

trait Colorful {
    private $color;

    public function setColor($color){
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }
}

$metalBox = new MetalBox(2,3,4);

$box2 = new Box(2,4,5);
Box::test();
MetalBox::test();
var_dump(Box::$count, Box::$count);

//$metalBox->width = 'Cool value';
$metalBox->setWidth(67);
//$metalBox->width = 123;
//$metalBox->changeWidth();
//var_dump($metalBox->width);

var_dump($metalBox);
var_dump($metalBox->volume());
var_dump($metalBox->mass());