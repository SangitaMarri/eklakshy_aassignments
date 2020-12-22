<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Student{
        private $name;
        private $studentid;
        private $dept;
        private $city;
         public $sum=0;

        public function set_name($name){
            $this->name=$name;
        }
        public function set_studentid($studentid){
            $this->studentid=$studentid;
        }
        public function set_dept($dept){
            $this->dept=$dept;
        }
        public function set_city($city){
            $this->city=$city;
        }
        function get_name(){
            return $this->name;

        }
        function get_studentid(){
            return $this->studentid;

        }
        function get_dept(){
            return $this->dept;

        }
        function get_city(){
            return $this->city;

        }


        function printDetails() {
           echo $this->name,"<br>";
           echo $this->studentid,"<br>";
           echo $this->dept,"<br>";
           echo $this->city,"<br>";

        }
        function showGrade($mark1,$mark2,$mark3){
            $sum=$mark1+$mark2+$mark3;
            $average=$sum/3;
            echo "<br>average:",$average;
            if( $avg>=90){
                echo "Grade is A+";
            }
            else if( $avg>=80 && $avg< 90)
            {
                echo "Grade is B";
            }
            else if( $avg>=70 && $avg< 80)
            {
                echo "Grade is C";
            }
            else{
                echo "Grade if F";
            }


        }
    }
    
$stud1=new Student("sangita",163050,"ECE","Mumbai");
$stud1->printDetails();
$stud1->showGrade(90,80,70);
echo $stud1->get_name()."<br>";
echo $stud1->set_name("renu");
echo $stud1->get_name()."<br>";

$stud2=new Student("sangita",163050,"ECE","Mumbai");
$stud2->printDetails();
$stud2->showGrade(90,50,70);

    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>