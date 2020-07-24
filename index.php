<?php

class abc{
    public function __toString(){
        return "can't return object as a string ". get_class($this);
    }
}

$obj = new abc;
echo $obj;

?>
