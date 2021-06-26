<?php
abstract class fruit{
public function __construct($name){
    $this->name=$name;
}
abstract public function intro() : string;
}
class apple extends fruit{
 public function intro() : string{
return"this is a $this->name";
}

}
$apple=new apple("apple");
echo $apple->intro();
?>