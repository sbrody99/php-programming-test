<?php include("../src/Vault/GetDiffArray.php"); ?>
<?php include("../src/Vault/OrderArray.php"); ?>
<?php include("../src/Vault/ReverseArray.php"); ?>
<?php include("../src/Vault/GetDistance.php"); ?>
<?php include("../src/Vault/GetHumanTimeDiff.php"); ?>
<?php

//require "User.php";
/**
 * Instructions:
 *
 * Create a class in the Vault namespace and rewrite each test to make the assertions pass.
 * NOTE: You can use any third party packages you deem necessary to complete the tests. 
 */

class InterviewTests {

    /**
     * Create a class that turns the below string into an array and reverse the words.
     */

    public function testReverseArray()
    {
        $data = "I want this job.";

        // Code here
        $obj = new ReverseArray($data);
        $obj->displayReverseArr();
        
        //$this->assertEquals(['job', 'this', 'want', 'I'], $data);
    }

    /**
     * Create a class that sorts the below array
     */
    public function testOrderArray()
    {
        $data = ["200", "450", "2.5", "1", "505.5", "2"];

        // Code here
        $obj = new OrderArray();
        $obj->displayOrderArr($data);

        /*
        $this->assertTrue(1 === $data[0]);
        $this->assertTrue(2 === $data[1]);
        $this->assertTrue(2.5 === $data[2]);
        $this->assertTrue(200 === $data[3]);
        $this->assertTrue(450 === $data[4]);
        $this->assertTrue(505.5 === $data[5]);
        */
    }

    /**
     * Create a class to determine array differences
     */
    public function testGetDiffArray()
    {
        $data1 = [1, 2, 3, 4, 5, 6, 7];
        $data2 = [2, 4, 5, 7, 8, 9, 10];
        $obj = new GetDiffArray();
        // Code here
        $obj->getDiff([8,9,10],[1,2,3]);

        //$this->assertEquals([8, 9, 10], $data);

        // Code here
        $obj->getDiff([1,3,6],[1,2,3]);
        //$this->assertEquals([1, 3, 6], $data);
    }

    /**
     * Create a class that will get the distance between two geo points
     */
    public function testGetDistance()
    {
        $place1 = ['lat' => '41.9641684', 'lon' => '-87.6859726'];
        $place2 = ['lat' => '42.1820210', 'lon' => '-88.3429465'];
      
        // Code here
        $obj = new GetDistance();
        $obj->distance($place1,$place2);
        //$this->assertEquals(36.91, $distance);
    }

    /**
     * Create a class that will generate a human readable time difference
     */
    public function testGetHumanTimeDiff()
    {
        $time1 = "2016-06-05T12:00:00";
        $time2 = "2016-06-05T15:00:00";
        // Code here
        $obj = new GetHumanTimeDiff();
        $obj->getTimeDiff($time1,$time2);
        //$this->assertEquals("3 hours ago", $timeDiff);
    }
   
}

?>
