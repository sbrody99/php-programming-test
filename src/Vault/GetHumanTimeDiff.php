<?php

class GetHumanTimeDiff
{
   
    // method declaration
    public function getTimeDiff($data1,$data2) {

		$datetime1 = new DateTime($data1);
		$datetime2 = new DateTime($data2);
     	 $dteDiff  = $datetime1->diff($datetime2); 
      	 echo $dteDiff->format("%H:%I:%S"); 		 
    }
}
?>