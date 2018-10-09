<?php

class GetDiffArray
{
   
    // method declaration
    public function getDiff($data1,$data2) {

    	$length = count($data1);
        for ($i = 0; $i < $length; $i++) {
   			echo  $data1[$i] = $data1[$i] - $data2[$i];
   			echo "<br>";
		} 
		 
    }
}

?>