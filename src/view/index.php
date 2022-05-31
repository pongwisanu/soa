<?php
session_start();

if(isset($_SESSION["userdata"]))
{
    include_once("./layout/headerLoged.php");
}
else 
{
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
                        <table class="data-table data-table-standard responsive nowrap" data-order="[[ 1, &quot;desc&quot; ]]">
                            <thead>
                                <tr>
                                    <th>ห้อง</th>
                                    <th>ตึก</th>
                                    <th>ประเภทห้อง</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="list-item-heading">8401</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">8</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">ห้องเรียน</p>
                                    </td>
                                    <td>
                                        <a href="./reserve.php" type="button" class="btn btn-primary half">รายละเอียด</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="list-item-heading">8402</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">8</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">ห้องเรียน</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary half">รายละเอียด</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="list-item-heading">8403</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">8</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">ห้องเรียน</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary half">รายละเอียด</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="list-item-heading">8404</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">8</p>
                                    </td>
                                    <td>
                                        <p class="text-muted">ห้องเรียน</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary half">รายละเอียด</button>
                                    </td>
                                </tr>
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