<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   abstract class Account{
  protected $balance;

    public function __construct( $balance){
        $this->balance=$balance;

    }
    public function set_balance($balance){
        $this->balance=$balance;
    }
    public function get_balance(){
        return $this->balance;
    }
     abstract function withdraw( $amount);
        
      
       abstract function deposit($amount);
        
      
    function  getBalance(){
       echo"<br>balance is:", $this->balance;
    }


    
}
class Savings extends Account{
    public function __construct( $balance){
       parent::__construct($balance);
    }
    
    function withdraw($amount){
        
       
        if ($amount>0 && $amount<=50000 && $this->balance>=$amount){
            echo"<br>your account balance in savings account is",$this->balance;
        echo "<br>withdrawed amount in Savings account:",$amount;
        echo"<br>now your balance is:",$this->balance-$amount,"<br>";
        }
        else{
            echo"<br>your account balance in savings account is",$this->balance; 
            echo"<br>Amount to be withdrawed should be less than 50K <br>and balance should be greater than amount to be withdrawed<br>";
        }
    }
    function deposit($amount){
        
        if($amount>0 && $amount<100000 ){
            echo"<br>your account balance in current account is",$this->balance;
        echo"<br>deposited amount in Savings account:",$amount;
        echo"<br>now your balance is:",$this->balance+$amount,"<br>";
        }
        else{
            echo"<br>your account balance in current account is",$this->balance;
            echo"<br>Amount to be deposited should be less than or equal to 1 lakh<br>";
        }
    }
}
class Current extends Account{
    public function __construct( $balance){
        parent::__construct($balance);
     }
 
    function withdraw($amount){
        
        if ($amount>0 && $amount<=50000 && $this->balance>=($amount+1000)){
            echo"<br>your account balance is",$this->balance;
            echo "<br>withdrawed amount in Current amount:",$amount;
            echo"<br>now your balance is:",$this->balance-$amount,"<br>";

            }
            else{
                echo"<br>your account balance is",$this->balance;   
            echo"<br>Amount to be withdraw should be less than 50k <br>and balance should be greater than amount to be withdrawed+1000<br>";  
    }
}
    function deposit($amount){
       
        if($amount>0 && $amount<100000 && $this->balance>=1000){
            echo"<br>your account balance is",$this->balance;
            echo"<br>deposited amount in Current amount:",$amount,"<br>";
            echo"<br>now your balance is:",$this->balance+$amount;
            }
            else{
                echo"<br>your account balance is",$this->balance;
                echo"<br>Amount to be deposited should be less than or equal to 1 lakh and minimum balance should be 1000<br>";
            }  
    }
}

$sav1=new Savings(2000);
$sav1->getBalance();
$sav1->withdraw(1500);
$sav1->deposit(2500);

$cur1=new Savings(2500);
$cur1->getBalance();
$cur1->withdraw(1000);
$cur1->deposit(25000);
















?>
    
</body>
</html>