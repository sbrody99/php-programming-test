<?php

class ReverseArray
{
    // property declaration
    private  $string1 = 'I am a student';

    public function __construct($str) {
        $this->string1 = $str;
    }

    // method declaration
    public function displayReverseArr() {

        $result = explode(" ",$this->string1);       
        $reverse = array_reverse($result);      
       foreach ($reverse as $value) {
             echo "$value <br>";
        }
    }
}
?>