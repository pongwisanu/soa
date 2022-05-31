<?php

if (isset($_POST['reserveId'])) {
    $id = $_POST['reserveId'];

    //$response = file_get_contents('http://localhost:8080/soa64_03/rest/services/reserve/delete/id='.$id);

    //$response = json_decode($response, true);

    //print_r($response);

    $url = 'http://localhost:8080/soa64_03/rest/services/reserve/delete/id='.$id;
    $data = array();
    
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => "DELETE",
            'content' => json_encode($data),
        )
    );

    print_r($options);
    
    $context  = stream_context_create($options);
    $result = file_get_contents($url, true, $context);
    $response = (array) json_decode($result);


}

header("location: ./reserved.php");