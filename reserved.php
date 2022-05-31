<?php
session_start();
date_default_timezone_set('Asia/Bangkok');
if (isset($_SESSION["userdata"])) {
    include_once("./layout/headerLoged.php");
    $userdata = $_SESSION["userdata"];
} else {
    include_once("./layout/header.php");
    include_once("./modal/loginModal.php");
}

$reserve = file_get_contents('http://localhost:8080/soa64_03/rest/services/reserve');

$reserve = json_decode($reserve, true);


?>
<style>
    .btn.half {
        border-radius: 5px;
    }
</style>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>ข้อมูลการจอง</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card h-100">
                    <div class="card-body">
                        <table class="data-table data-table-standard responsive nowrap" data-order="[[ 0, &quot;asc&quot; ]]">
                            <thead>
                                <tr>
                                    <th hidden="true">day</th>
                                    <th>ห้อง</th>
                                    <th>ตึก</th>
                                    <th>ประเภทห้อง</th>
                                    <th>วัน เวลา</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $filter = null;
                                $j = 0;
                                for ($i = 0; $i < sizeof($reserve); $i++) {
                                    if ($reserve[$i]["reserver"] == $userdata["userId"]) {
                                        $filter[$j] = $reserve[$i];
                                        $j++;
                                    }
                                }

                                $date = date("m/d/Y/G/i", time());
                                $dateSplit = explode('/', $date);
                                $data = [];
                                $j = 0;
                                for ($i = 0; $i < sizeof($filter); $i++) {
                                    $reserveDate = $filter[$i]["reserveDate"];
                                    $reserveDate = explode("/", $reserveDate);
                                    $time = $filter[$i]["time"];
                                    $time = explode("-", $time["timeRange"]);
                                    if ($reserveDate[0] >= $dateSplit[0] && $reserveDate[1] >= $dateSplit[1] && $reserveDate[2] >= $dateSplit[2]) {
                                        if ($dateSplit[1] == $reserveDate[1]) {
                                            if ($time[0] >= $dateSplit[3]) {
                                                $data[$j] = $filter[$i];
                                                $j++;
                                            }
                                        } else {
                                            $data[$j] = $filter[$i];
                                            $j++;
                                        }
                                    }
                                }
                                if ($data != null)
                                    for ($i = 0; $i < sizeof($data); $i++) {


                                        $room = file_get_contents('http://localhost:8080/soa64_03/rest/services/room/id=' . $data[$i]["room"]);

                                        $room = json_decode($room, true);

                                        $date = $data[$i]["reserveDate"];
                                        $date = explode('/',$date);
                                ?>
                                    <tr>
                                        <td hidden="true">
                                            <p><?php echo $date[1] ?></p>
                                        </td>
                                        <td>
                                            <p class="list-item-heading"><?php echo $room["roomNumber"] ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $room["building"]["buildingNumber"] ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $room["type"]["typeName"] ?></p>
                                        </td>
                                        <td>

                                            <p class="text-muted">
                                                <?php $time = $data[$i]["time"];

                                                echo " วันที่ " . $data[$i]["reserveDate"] . " เวลา " . $time["timeRange"]; ?> </p>
                                        </td>
                                        <td>
                                            <form class="group" method="POST" action='./manageReserve.php'>
                                                <button type="submit" class="btn btn-danger half" id="reserveId" name="reserveId" value="<?php echo $data[$i]["reserveId"] ?>">ยกเลิก</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include_once("./layout/footer.php");
?>