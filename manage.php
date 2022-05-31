<?php

$reserve = $_POST["reserve"];
print_r($reserve);

if ($reserve["date"] != null && $reserve["time"] != null && $reserve["category"] != null) {
    $url = 'http://localhost:8080/soa64_03/rest/services/reserve/create';
    $data = array('catagory' => array('catagoryId' => $reserve['category']), 'time' => array('timeId' => $reserve['time']) , 
            'room' => $reserve['room'] , 'reserver' => $reserve['reserver'] , 'reserveDate' => $reserve['date']
             );
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data),
        )
    );

    print_r($options);
    
    $context  = stream_context_create($options);
    $result = file_get_contents($url, true, $context);
    $response = (array) json_decode($result);
}

header("location: ./reserve.php");