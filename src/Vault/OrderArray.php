<?php

class OrderArray
{
 
 // method declaration
    public function displayOrderArr($data) {

		sort($data);
		$clength = count($data);
		for($x = 0; $x < $clength; $x++) {
   		 	echo $data[$x];
    		echo "<br>";
		}
    }
}
?>