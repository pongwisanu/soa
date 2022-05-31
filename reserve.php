<?php
session_start();

if (isset($_SESSION["userdata"])) {
    include_once("./layout/headerLoged.php");
    $userdata = $_SESSION["userdata"];
} else {
    include_once("./layout/header.php");
    include_once("./modal/loginModal.php");
}

if (isset($_POST["roomId"])) {
    $roomId = $_POST['roomId'];

    $response = file_get_contents('http://localhost:8080/soa64_03/rest/services/room/id=' . $roomId);

    $response = json_decode($response, true);

    $_SESSION['room'] = $response;
}

$time = file_get_contents('http://localhost:8080/soa64_03/rest/services/time');

$time = json_decode($time, true);



$category = file_get_contents('http://localhost:8080/soa64_03/rest/services/catagory');

$category = json_decode($category, true);

$roomData = $_SESSION['room'];
?>

<style>
    .btn.half {
        border-radius: 5px;
    }

    .btn.lg.half {
        border-radius: 5px;
    }
</style>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="mb-2">
                    <h1>
                        <?php
                        $building = $roomData["building"];
                        echo "ตึก " . $building["buildingNumber"] . " ห้อง " . $roomData["roomNumber"];
                        ?>
                    </h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="index.php">หน้าแรก</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $roomData["roomNumber"]; ?></li>
                        </ol>
                    </nav>
                </div>
                <div class="separator mb-5"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 col-xl-6">
                <div class="card mb-4">
                    <div class="card-body">

                        <div class="glide details">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <li class="glide__slide">
                                        <img alt="detail" src="img/default/room_default.jpg" class="responsive border-0 border-radius img-fluid mb-3" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="detail" src="img/default/room_default.jpg" class="responsive border-0 border-radius img-fluid mb-3" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="detail" src="img/default/room_default.jpg" class="responsive border-0 border-radius img-fluid mb-3" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="detail" src="img/default/room_default.jpg" class="responsive border-0 border-radius img-fluid mb-3" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="detail" src="img/default/room_default.jpg" class="responsive border-0 border-radius img-fluid mb-3" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="detail" src="img/default/room_default.jpg" class="responsive border-0 border-radius img-fluid mb-3" />
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="glide thumbs">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <li class="glide__slide">
                                        <img alt="thumb" src="img/default/room_default.jpg" class="responsive border-0 border-radius img-fluid" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="thumb" src="img/default/room_default.jpg" class="responsive border-0 border-radius img-fluid" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="thumb" src="img/default/room_default.jpg" class="responsive border-0 border-radius img-fluid" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="thumb" src="img/default/room_default.jpg" class="responsive border-0 border-radius img-fluid" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="thumb" src="img/default/room_default.jpg" class="responsive border-0 border-radius img-fluid" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="thumb" src="img/default/room_default.jpg" class="responsive border-0 border-radius img-fluid" />
                                    </li>
                                </ul>
                            </div>
                            <div class="glide__arrows" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="simple-icon-arrow-left"></i></button>
                                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="simple-icon-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">

                    <div class="card-body">
                        <p class="mb-3">
                        <h2>รายละเอียดเพิ่มเติม</h2>
                        <br><br>
                        <h3>
                            <?php echo "อาคาร : " . $roomData["building"]["buildingNumber"] . " " . $roomData["building"]["buildingName"] ?>
                            <br><br>
                            <?php echo "ชื่อห้อง : " . $roomData["roomName"] ?>
                            <br><br>
                            <?php echo "ประเภท : " . $roomData["type"]["typeName"] ?>
                            <br><br>
                            <?php echo "ความจุ : " . $roomData["roomSize"] ?>
                        </h3>
                        </p>
                    </div>
                </div>
            </div>

            <!-- RightCol -->

            <div class="col-12 col-md-12 col-xl-6 col-right">

                <div class="card mb-4">
                    <div class="card-header">
                        <div class="mt-4">
                            <div class="row">
                                <div class="col">
                                    <h2>ตารางการใช้ห้อง</h2>
                                </div>
                                <div class="col">
                                    <form class="group" id="dateTable" name="dateTable" autocomplete="off">
                                        <input class="form-control datepicker" id="dateIn" name="dateIn" onchange="test1()" placeholder="เลือกวันที่ที่ต้องการ">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <table class="data-table data-table-standard responsive nowrap" id="showFreeRoom" name="showFreeRoom" data-order="[[ 0, &quot;asc&quot; ]]">
                                <thead>
                                    <tr>
                                        <th hidden="true">id</th>
                                        <th>เวลา</th>
                                        <th>ผู้จอง</th>
                                        <th>สถานะ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td hidden="true">0</td>
                                        <td>เลือกวันที่</td>
                                        <td>เลือกวันที่</td>
                                        <td>เลือกวันที่</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php

                if (isset($_SESSION["userdata"])) {
                ?>
                    <div class="card mb-4">

                        <div class="card-header">
                            <div class="mt-4">
                                <h2>จองห้อง</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-12 col-xl-12 mb-4">
                                <form id="formReserve" class="group" method="POST" action='./manage.php' id="    " autocomplete="off">
                                    <input type="hidden" id="room" name="reserve[room]" value="<?php echo $roomData["roomId"]; ?>">
                                    <input type="hidden" id="reserver" name="reserve[reserver]" value="<?php echo $userdata["userId"]; ?>">
                                    <div class="mb-4">
                                        <label>เลือกวันที่</label>
                                        <input class="form-control datepicker" id="date" name="reserve[date]" onchange="test2()">
                                    </div>
                                    <div class="mt-4">
                                        <label>ช่วงเวลา</label>
                                        <select class="form-control select2-single" id="time" name="reserve[time]" data-width="100%">
                                            <option label="&nbsp;">&nbsp;</option>
                                        </select>
                                    </div>

                                    <div class="mt-4">
                                        <label>เหตุผลการจอง</label>
                                        <select class="form-control select2-single" id="category" name="reserve[category]" data-width="100%">
                                            <option label="&nbsp;">&nbsp;</option>
                                            <?php for ($i = 0; $i < sizeof($category); $i++) { ?>
                                                <option value="<?php echo $category[$i]["catagoryId"]  ?>"><?php echo $category[$i]["catagoryName"] ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>

                                    <div class="d-flex justify-content-end align-items-center mt-4">
                                        <button type="submit" class="btn btn-success half ">จอง</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    </div>
</main>
<script>
    function test1() {

        var date = document.forms["dateTable"]["dateIn"].value;
        var roomId = <?php echo $roomData["roomId"]; ?>;
        var filter = <?php $api_url = 'http://localhost:8080/soa64_03/rest/services/reserve';
                        $json_data = file_get_contents($api_url);
                        echo $json_data; ?>;

        var reserve = [];
        for (var i = 0; i < filter.length; i++) {
            if (filter[i]["room"] == roomId) {
                reserve.push(filter[i]);
            }
        }

        var time = <?php $api_url = 'http://localhost:8080/soa64_03/rest/services/time';
                    $json_data = file_get_contents($api_url);
                    echo $json_data; ?>;

        var data = [];
        for (var i = 0; i < reserve.length; i++) {
            if (reserve[i].reserveDate == date) {
                data.push(reserve[i]);
            }
        }

        console.log(data)
        var table = '<thead><tr><th hidden="true">id</th><th>เวลา</th><th>ผู้จอง</th><th>สถานะ</th></tr></thead>';
        for (var i = 0; i < time.length; i++) {
            for (var j = 0; j < data.length; j++) {
                if (data[j].time.timeRange == time[i].timeRange) {
                    table += '<tbody><tr><td hidden="true">' + time[i].timeId +
                        '</td><td><p class ="list-item-heading" >' + time[i].timeRange +
                        '</p></td><td><p class = "text-muted" > ' + data[j].reserver +
                        '</p></td><td><button type = "button"class = "btn btn-danger half mb-10"disabled > เต็ม </button></td></tr></tbody>';
                } else {
                    table += '<tbody><tr><td hidden="true">' + time[i].timeId +
                        '</td><td><p class ="list-item-heading" >' + time[i].timeRange +
                        '</p></td><td><p class = "text-muted" >-</p></td><td><button type = "button"class = "btn btn-success half mb-10"disabled > ว่าง </button></td></tr></tbody>';
                }
            }
            if (data.length == 0) {
                table += '<tbody><tr><td hidden="true">' + time[i].timeId +
                    '</td><td><p class ="list-item-heading" >' + time[i].timeRange +
                    '</p></td><td><p class = "text-muted" >-</p></td><td><button type = "button"class = "btn btn-success half mb-10"disabled > ว่าง </button></td></tr></tbody>';
            }
        }
        document.getElementById("showFreeRoom").innerHTML = table;

    }

    function test2() {
        var date = document.forms["formReserve"]["date"].value;
        var roomId = <?php echo $roomData["roomId"]; ?>;
        var filter = <?php $api_url = 'http://localhost:8080/soa64_03/rest/services/reserve';
                        $json_data = file_get_contents($api_url);
                        echo $json_data; ?>;

        var reserve = [];
        for (var i = 0; i < filter.length; i++) {
            if (filter[i]["room"] == roomId) {
                reserve.push(filter[i]);
            }
        }

        var time = <?php $api_url = 'http://localhost:8080/soa64_03/rest/services/time';
                    $json_data = file_get_contents($api_url);
                    echo $json_data; ?>;

        var data = [];
        for (var i = 0; i < reserve.length; i++) {
            if (reserve[i].reserveDate == date) {
                data.push(reserve[i]);
            }
        }

        var freeTime = [];
        var exist = 0;
        var input = '<option label="&nbsp;">&nbsp;</option>';
        console.log(data);
        for (var i = 0; i < time.length; i++) {
            for (var j = 0; j < data.length; j++) {

                if (data[j].time.timeRange == time[i].timeRange) {
                    exist = 1;
                    break;
                }
            }
            if (exist == 0) {
                input += '<option value="' + time[i].timeId +
                    '">' + time[i].timeRange + '</option>';
            }
            exist = 0;
        }
        document.getElementById("time").innerHTML = input;
    }
</script>
<?php
include_once("./layout/footer.php");
?>