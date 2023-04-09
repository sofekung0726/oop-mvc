<!-- Course section -->
<?php 
$cs_img="images/12.png";
$cs_name="อบรมเชิงปฏิบัติการ<br/>การผลิตปุ๋ยมูลไส้เดือนดินเพื่อกำจัดขยะอินทรีย์และเพื่อการค้า";
$cs_date="30-31 ก.ค. 65";
$cs_wallet="1,990 บ.";
?>
<div class="col mb-5">
                    <a href="course/12.html" class="card-link">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?=$cs_img;?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder course-name"><?=$cs_name;?></h5>
                                    <!-- course tag line-->
                                    <div class="course-note"><i class="far fa-calendar-alt"></i> วันที่อบรม <?=$cs_date;?></div>
                                    <!-- <div class="course-note"><i class="fab fa-internet-explorer"></i> -</div> -->
                                    <div class="course-note"><i class="far fa-building"></i> มหาวิทยาลัยราชภัฏนครปฐม</div>
                                    <!-- <div class="course-note"><i class="fas fa-graduation-cap"></i> - </div> -->
                                    <div class="course-note"><i class="fas fa-wallet"></i> <?=$cs_wallet;?></div>

                                </div>
                            </div>
                        </div>
                      </a>
                  </div>
                  <!-- End Course section -->