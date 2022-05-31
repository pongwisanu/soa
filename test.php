<?php
$response = file_get_contents('http://localhost:8080/soa64_03/rest/services/room');

                                $response = json_decode($response , true);

                                //$response = getAllRoom();

                                print_r($response);

                                $building = $response[0]["roomId"];

                                echo $building;
                                print_r($building);