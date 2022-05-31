<?php
session_start();

if (isset($_GET["error"])) {
    if ($_GET["error"] == 2) {
?>
        <script>
            alert("username หรือ password ผิดพลาด")
        </script>
    <?php
    } 
}

if (isset($_SESSION["userdata"])) {
    include_once("./layout/headerLoged.php");
} else {
    include_once("./layout/header.php");
    include_once("./modal/loginModal.php");
}
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
                <h1>หน้าแรก</h1>
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
                                    <th>ห้อง</th>
                                    <th>ตึก</th>
                                    <th>ประเภทห้อง</th>
                                    <th>ความจุ</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $response = file_get_contents('http://localhost:8080/soa64_03/rest/services/room');

                                $response = json_decode($response, true);

                                //$response = getAllRoom();


                                for ($i = 0; $i < sizeof($response); $i++) {
                                ?>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading"><?php echo $response[$i]["roomNumber"]; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php $building = $response[$i]["building"];
                                                                    echo $building["buildingNumber"];  ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php $type = $response[$i]["type"];
                                                                    echo $type["typeName"];  ?></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><?php echo $response[$i]["roomSize"]; ?></p>
                                        </td>
                                        <td>
                
                                            <form class="group" method="POST" action='./reserve.php'>
                                                <button type="submit" class="btn btn-primary half" id="roomId" name="roomId" value="<?php echo $response[$i]["roomId"] ?>">รายละเอียด</button>
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