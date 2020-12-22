<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Mobile{
    public $brand;
    public $price;
    public $model;
    static $accessories=array("charger","ear-phones");

    function __construct($brand,$price,$model){
        $this->brand=$brand;
        $this->price=$price;
        $this->model=$model;
      
    }

    function __destruct(){
        echo"bye bye";
    }

    function printDetails(){
        echo $this->brand,"<br>";
        echo $this->price,"<br>";
        echo $this->model,"<br>";
        echo"accessories:";
        foreach(Mobile::$accessories as $values){
            echo $values,"<br>";
        }
    }

     
        private function discount($amount){
            return $this->price-$amount;
        }
        public function showDiscountedprice($amount){
            echo "discounted price:",$this->discount($amount);
        }

}
$mob1=new Mobile("Vivo",15000,"vivo1807");
$mob1->printDetails();
$mob1->showDiscountedprice(200);


$mob2=new Mobile("oppo",16000,"oppof17pro");
$mob2->printDetails();
$mob2->showDiscountedprice(500);


















?>


    
</body>
</html>