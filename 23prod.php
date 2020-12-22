<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Product{
        public $brand;
        public $price;
        public $quantity;

    
    function __construct($brand,$price,$quantity){
        $this->brand=$brand;
        $this->price=$price;
        $this->quantity=$quantity;

    }
    function totalCost(){
        echo $this->price*$this->quantity;
    }
}
    class Laptop extends Product{
       public $accessories=array("charger","ear-phones");

        function __construct($brand,$price,$quantity,$accessories){
            $this->brand=$brand;
            $this->price=$price;
            $this->quantity=$quantity;
            $this->accessories->$accessories;
       
        }
        
        function showAccessories(){
            foreach($this->accessories as $values){
                echo"<br>accesories:",$values,"<br>";
            }
        }
    }

$lap1=new Product("lenovo",30000,2);
$lap1->totalCost();
$laps=new Laptop("sony",35000,5,$accessories);
$laps->showAccessories();



    
    
    
    
    
    
    
    
    ?>
</body>
</html>