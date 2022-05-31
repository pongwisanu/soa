<?php
session_start();
$roomId = $_SESSION["room"];

if (isset($_POST["date"])) {
    $date = $_POST["date"];

    $response = file_get_contents('http://localhost:8080/soa64_03/rest/services/reserve');

    $response = json_decode($response, true);

    $filter = [];
    for($i=0;$i<sizeof($response);$i++){
        if($response[$i]["room"] == $roomId["roomId"])
        {
            array_push($filter , $response[$i]);
        }
    }

    $data = [];
    for ($i = 0; $i < sizeof($filter); $i++) {
        if ($filter[$i]["reserveDate"] == $date) {
            array_push($data, $filter[$i]);
        }
    }

    $time = file_get_contents('http://localhost:8080/soa64_03/rest/services/time');
    $time = json_decode($time, true);

    $freeTime = [];
    for($i=0;$i<sizeof($time);$i++)
    {
        for($j=0;$j<sizeof($data);$j++)
        {
            $t = $data[$j]["reserveDate"];
            if($t = $time[$i]["timeRange"]){
                break;
            }
        }
        array_push($freeTime , $time[$i]);
    }


    if (sizeof($freeTime) > 0) {
        echo '<option value="">เลือกช่วงเวลา</option>';
        for ($i = 1; $i < sizeof($freeTime); $i++) {
            echo '<option value="' . $freeTime[$i]["timeId"] . '">' . $freeTime[$i]["timeRange"] . '</option>';
        }
    } else {
        echo '<option value="">ไม่มีช่วงเวลาที่ว่าง</option>';
    }
}
