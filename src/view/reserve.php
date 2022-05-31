<?php
include_once("./layout/header.php");
include_once("./modal/loginModal.php");

$day = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

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
                    <h1>ตึก 8 ห้อง 8401</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="index.php">หน้าแรก</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">8401</li>
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
                                        <img alt="detail" src="img/products/parkin.jpg" class="responsive border-0 border-radius img-fluid mb-3" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="detail" src="img/products/napoleonshat.jpg" class="responsive border-0 border-radius img-fluid mb-3" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="detail" src="img/products/marble-cake.jpg" class="responsive border-0 border-radius img-fluid mb-3" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="detail" src="img/products/fruitcake.jpg" class="responsive border-0 border-radius img-fluid mb-3" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="detail" src="img/products/magdalena.jpg" class="responsive border-0 border-radius img-fluid mb-3" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="detail" src="img/products/tea-loaf.jpg" class="responsive border-0 border-radius img-fluid mb-3" />
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="glide thumbs">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <li class="glide__slide">
                                        <img alt="thumb" src="img/products/parkin-thumb.jpg" class="responsive border-0 border-radius img-fluid" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="thumb" src="img/products/napoleonshat-thumb.jpg" class="responsive border-0 border-radius img-fluid" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="thumb" src="img/products/marble-cake-thumb.jpg" class="responsive border-0 border-radius img-fluid" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="thumb" src="img/products/fruitcake-thumb.jpg" class="responsive border-0 border-radius img-fluid" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="thumb" src="img/products/magdalena-thumb.jpg" class="responsive border-0 border-radius img-fluid" />
                                    </li>
                                    <li class="glide__slide">
                                        <img alt="thumb" src="img/products/tea-loaf-thumb.jpg" class="responsive border-0 border-radius img-fluid" />
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
                    <div class="position-absolute card-top-buttons">
                        <button class="btn btn-header-light icon-button">
                            <i class="simple-icon-refresh"></i>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="post-icon mr-3 d-inline-block"><a href="#"><i class="simple-icon-heart mr-1"></i></a> <span>4
                                    Likes</span></div>
                            <div class="post-icon d-inline-block"><i class="simple-icon-bubble mr-1"></i> <span>1
                                    Comment</span></div>
                        </div>
                        <p class="mb-3">
                            Vivamus ultricies augue vitae commodo condimentum. Nullam faucibus eros eu mauris
                            feugiat, eget consectetur tortor tempus.
                            <br /><br />
                            Sed volutpat mollis dui eget fringilla.
                            Vestibulum blandit urna ut tellus lobortis tristique. Vestibulum ante ipsum primis in
                            faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque quis cursus
                            mauris.
                            <br /><br />
                            Nulla non purus fermentum, pulvinar dui condimentum, malesuada nibh. Sed
                            viverra quam urna, at condimentum ante viverra non. Mauris posuere erat sapien, a
                            convallis libero lobortis sit amet. Suspendisse in orci tellus.
                        </p>
                        <p class="text-muted text-small mb-2">Tags</p>
                        <p class="mb-3">
                            <a href="#">
                                <span class="badge badge-pill badge-outline-theme-2 mb-1">FRONTEND</span>
                            </a>
                            <a href="#">
                                <span class="badge badge-pill badge-outline-theme-2 mb-1">JAVASCRIPT</span>
                            </a>
                            <a href="#">
                                <span class="badge badge-pill badge-outline-theme-2 mb-1">SECURITY</span>
                            </a>
                            <a href="#">
                                <span class="badge badge-pill badge-outline-theme-2 mb-1">DESIGN</span>
                            </a>
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
                                    <input class="form-control datepicker" placeholder="เลือกวันที่" value="<?php echo date("m/d/Y",time()); ?>">
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="tab-content">
                            <table class="data-table data-table-standard responsive nowrap" data-order="[[ 0, &quot;asc&quot; ]]">
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
                                        <td hidden="true">
                                            <?php echo 0 ?>
                                        </td>
                                        <td>
                                            <p class="list-item-heading">9.00-10.30</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">-</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success half mb-10" disabled>ว่าง</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td hidden="true">
                                            <?php echo 1 ?>
                                        </td>
                                        <td>
                                            <p class="list-item-heading">10.30-12.00</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">ใครสักคน</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn text-light half mb-1" style="background-color: #808080;" disabled>เต็ม</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td hidden="true">
                                            <?php echo 2 ?>
                                        </td>
                                        <td>
                                            <p class="list-item-heading">13.00-14.30</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">ใครสักคน</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn text-light half mb-1" style="background-color: #808080;" disabled>เต็ม</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td hidden="true">
                                            <?php echo 3 ?>
                                        </td>
                                        <td>
                                            <p class="list-item-heading">14.30-16.00</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">ใครสักคน</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn text-light half mb-1" style="background-color: #808080;" disabled>เต็ม</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td hidden="true">
                                            <?php echo 4 ?>
                                        </td>
                                        <td>
                                            <p class="list-item-heading">16.00-17.30</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">ใครสักคน</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn text-light half mb-1" style="background-color: #808080;" disabled>เต็ม</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td hidden="true">
                                            <?php echo 5 ?>
                                        </td>
                                        <td>
                                            <p class="list-item-heading">17.30-19.00</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">ใครสักคน</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn text-light half mb-1" style="background-color: #808080;" disabled>เต็ม</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="card mb-4">

                    <div class="card-header">
                        <div class="mt-4">
                            <h2>จองห้อง</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-12 col-xl-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="mb-4">Date Picker Embeded</h5>
                                    <div class="form-group">
                                        <div class="date-inline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <label>ช่วงเวลา</label>
                                <select class="form-control select2-single" data-width="100%">
                                    <option label="&nbsp;">&nbsp;</option>
                                    <option value="9.00-10.30">9.00-10.30</option>
                                    <option value="10.30-12.00">10.30-12.00</option>
                                    <option value="13.00-14.30">13.00-14.30</option>
                                    <option value="14.30-16.00">14.30-16.00</option>
                                    <option value="16.00-17.30">16.00-17.30</option>
                                    <option value="17.00-19.00">17.00-19.00</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-end align-items-center mt-4">
                                <button class="btn btn-success half ">จอง</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

<?php
include_once("./layout/footer.php");
?>