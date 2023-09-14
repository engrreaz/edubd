<!-- ======= About Us Section ======= -->
<section id="about" class="about"
    style="border:0px solid deeppink; margin-top:35px; padding-top:30px; background:#E8F6F3; border-radius:10px;">
    <div class="container relative" data-aos="fade-up">
        <img src="assets/icon/announcement.png" alt="announcement" class="head-icon" />

        <div class=" section-header ex">
            <h2>Notice Board</h2>
        </div>

        <style>
            .desc {
                font-size: 13px;
                font-style: italic;
            }

            .desc span {
                font-style: normal;
                font-size: 11px;
                display: block;
                color: var(--color-primary);
            }

            .desc span::before {
                content: "---";
            }
        </style>

        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="content ps-0 ps-lg-5">

                    <ul>


                        <?php
                        $sql0 = "SELECT * FROM noticeboard where startfrom<='$cur' and endto>='$cur'  order by id; ";
                        $result0bb = $conn->query($sql0);
                        if ($result0bb->num_rows > 0) {
                            while ($row0 = $result0bb->fetch_assoc()) {
                                if ($lang == 'en') {
                                    $notice = $row0["noticeen"];
                                    $noticedesc = $row0["noticedescen"];
                                } else {
                                    $notice = $row0["noticebn"];
                                    $noticedesc = $row0["noticedescbn"];
                                }


                                $noticeby = $row0["noticeby"];
                                $ntime = $row0["noticetime"];


                                $dur = strtotime($cur) - strtotime($ntime);

                                if ($dur >= 3600 * 24 * 365) {
                                    $ago = floor($dur / (3600 * 24 * 365)) . ' Years';
                                } else if ($dur >= 3600 * 24 * 30) {
                                    $ago = floor($dur / (3600 * 24 * 30)) . ' Months';
                                } else if ($dur >= 3600 * 24 * 7) {
                                    $ago = floor($dur / (3600 * 24 * 7)) . ' Weeks';
                                } else if ($dur >= 3600 * 24) {
                                    $ago = floor($dur / (3600 * 24)) . ' Days';
                                } else if ($dur >= 3600) {
                                    $ago = floor($dur / (3600)) . ' Hours';
                                } else if ($dur >= 60) {
                                    $ago = floor($dur / (60)) . ' Minutes';
                                } else {
                                    $ago = floor($dur / (1)) . ' Seconds';
                                }
                                ?>

                                <li><i class="bi bi-check-circle-fill"></i>
                                    <b>
                                        <?php echo $notice; ?>
                                    </b>
                                    <p class="desc">

                                        <?php echo $noticedesc; ?>
                                        <span>
                                            Submited on
                                            <?php echo $ago . ' ago'; ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            by
                                            <b>
                                                <?php echo $noticeby; ?>
                                            </b>
                                        </span>
                                    </p>
                                </li>

                                <?php
                            }
                        }
                        ?>











                    </ul>

                </div>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->