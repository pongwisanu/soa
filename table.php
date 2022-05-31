<!DOCTYPE html>
<html>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 5px;
    }
</style>

<head>
    <meta charset="UTF-8">
    <title>SOA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="css/vendor/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="css/vendor/datatables.responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/glide.core.min.css" />
    <link rel="stylesheet" href="css/vendor/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/vendor/fullcalendar.min.css" />
    <link rel="stylesheet" href="css/vendor/select2.min.css" />
    <link rel="stylesheet" href="css/vendor/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="css/vendor/dropzone.min.css" />
    <link rel="stylesheet" href="css/vendor/cropper.min.css" />
    <link rel="stylesheet" href="css/vendor/nouislider.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-tagsinput.css" />

    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <form class="group" id="dateTable" name="dateTable">
        <input class="form-control datepicker" id="dateIn" name="dateIn" onchange="test1()">
    </form>
    <table id="showFreeRoom" name="showFreeRoom" data-order="[[ 0, &quot;asc&quot; ]]">
    </table>
    <script src="./main.js"></script>
    <script>
        function test1() {
            var date = document.forms["dateTable"]["dateIn"].value;
            var reserve = <?php $api_url = 'http://localhost:8080/soa64_03/rest/services/reserve';
                            $json_data = file_get_contents($api_url);
                            echo $json_data; ?>;

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
                        table += '<tbody><tr><td hidden = "true">' + time[i].timeId +
                            '</td><td><p class ="list-item-heading" >' + time[i].timeRange +
                            '</p></td><td><p class = "text-muted" > ' + data[j].reserver +
                            '</p></td><td><button type = "button"class = "btn btn-danger half mb-10"disabled > เต็ม </button></td></tr></tbody>';
                    }
                    else {
                        table += '<tbody><tr><td hidden = "true">' + time[i].timeId +
                        '</td><td><p class ="list-item-heading" >' + time[i].timeRange +
                        '</p></td><td><p class = "text-muted" >-</p></td><td><button type = "button"class = "btn btn-success half mb-10"disabled > ว่าง </button></td></tr></tbody>';
                    }
                }
                if (data.length == 0) {
                    table += '<tbody><tr><td hidden = "true">' + time[i].timeId +
                        '</td><td><p class ="list-item-heading" >' + time[i].timeRange +
                        '</p></td><td><p class = "text-muted" >-</p></td><td><button type = "button"class = "btn btn-success half mb-10"disabled > ว่าง </button></td></tr></tbody>';
                }
            }
            document.getElementById("showFreeRoom").innerHTML = table;
        }


        /*$('#dateTable').on('change', function() {
        var date = $(this).val();
        console.log(date)
        if (date) {
        $.ajax({
        type: 'POST',
        url: 'manageSelect.php',
        data: 'dateTable=' + date,
        success: function(html) {
        $('#showFreeRoom').html(html)
        }
        });
        }
        });*/
    </script>

    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/datatables.min.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/vendor/baguetteBox.min.js"></script>
    <script src="js/vendor/glide.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/vendor/moment.min.js"></script>
    <script src="js/vendor/fullcalendar.min.js"></script>
    <script src="js/vendor/bootstrap-notify.min.js"></script>
    <script src="js/vendor/select2.full.js"></script>
    <script src="js/vendor/bootstrap-datepicker.js"></script>
    <script src="js/vendor/dropzone.min.js"></script>
    <script src="js/vendor/bootstrap-tagsinput.min.js"></script>
    <script src="js/vendor/nouislider.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>
    <script src="js/vendor/cropper.min.js"></script>
    <script src="js/vendor/typeahead.bundle.js"></script>
    <script src="js/dore-plugins/select.from.library.js"></script>

    <script src="js/scripts.js"></script>
</body>

</html>