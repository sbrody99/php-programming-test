
<?php
class GetDistance{

function distance($space1, $space2) {

    $lon1 = $space1['lon'];
    $lat1 = $space1['lat'];
    $lon2 = $space2['lon'];
    $lat2 = $space2['lat'];
    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
     $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
        echo $miles;
     
}

}
?>