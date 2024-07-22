<!-- variables -->
 
 <?php 
 
     $x = 8;
     $y = 7;
     echo $y+$x . " this is my result";

     // Globle variable's scope
    $number = 10;
     function num(){
        $numb =9;
        echo "<p>Variable x inside function is: $numb</p>," ;
     }
     echo $number . "the value of number varible aoutsite is ";
     num();
     // local variable
     function local_variable(){
        $numb =9; // local variable
        echo "<p>Variable x inside function as <h1>local varible is : </h1> $numb</p>," ;
     }
     local_variable();

     // using print satements

     $var = "Your are a good persone!";
     print '<h4>print:</h4>' .$var;
     
     // datatypes

     // using var-dup to know the datatype of the variable

     $name = "Osaman";
     echo "<p> this for checking!";
     var_dump($name);

     // arrays
     echo "<h3> array datatype<h3>";

     $names = array("yasin","Ali","Yacquub");
     var_dump( $names);

     // using class and object datatypes

     class Person{
        public $name ;
        public $age;
        public $address;
       public function __construct($name,$age,$address){
        $this->$name = $name;
        $this->$age = $age;
        $this->$address = $address;
       }
       public function message(){
        return 'my name is: ' . $this->name .   ',this my age: ' . $this->age;'and location is : ' .$this->address;

       }

        
       }
       $infor = new Person("Ali",23,"suuqa xoolaha");
       var_dump($infor);

       // String Length
       echo "<p> ....</p>";

       $str = "hello my is ......! ";
       echo strlen($str);
       echo "<p> </p>";


       // word count

       $two_names = "Ali and Abas";
       echo str_word_count($two_names);

       //strpos function
       echo "<p></P>";
       
    
       echo strpos("Omar Osman","O");
       echo "<p></P>";
       

       // string modifier
       $modifier = "Ali Osman";
       echo strtoupper($modifier);
       echo "<h1></h1>";
       echo strtolower($modifier);
       echo "<p></P>";
       echo strrev($modifier);

       //

       

    
     ?>