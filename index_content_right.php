<style>
    #bongobondu {
        margin-top: -50px;
        ;
    }

    #chairman {
        margin-top: -120px;
    }

    .testimonial-imgs {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 1px solid var(--color-primary);
        margin: 3px;
    }
</style>
<div style="">

    <!-- ======= Testimonials Section ======= -->
    <section id="bongobondu" class="testimonials">
        <div class="container" data-aos="fade-up">



            <div class="slides-1 swiper" data-aos="fade-in" data-aos-delay="10">
                <div class="swiper-wrapper">




                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item " style="">


                                <div class="post-img blogbox" style="  ">

                                    <div class="corner-title">
                                        <?php echo BSMCORNER; ?>
                                    </div>
                                    <div style="text-align:center;">
                                        <img src="resources/bongobondhu/bsm-1.jpg" alt="" style="width:100%"
                                            class="img-fluid ">
                                    </div>

                                </div>


                                <article style="">



                                    <p class="post-category">Politics</p>

                                    <h2 class="title">
                                        <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                                    </h2>

                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/blog/blog-author.jpg" alt=""
                                            class="img-fluid post-author-img flex-shrink-0 rnd" style="">
                                        <div class="post-meta">
                                            <small><time datetime="2022-01-01">Jan 1, 2022</time></small>
                                        </div>
                                    </div>
                                    <p class="post-author">Maria Doe jskaksf skjksf
                                        <br>
                                        <small>Asstt. Teacher</small>
                                    </p>

                                </article>












                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item " style="">


                                <div class="post-img blogbox" style="  ">


                                    <div style="text-align:center;">
                                        <img src="resources/bongobondhu/bsm-2.jpg" alt="" style="width:100%"
                                            class="img-fluid ">
                                    </div>

                                </div>


                                <article style="">

                                    <div class="corner-title">
                                        <?php echo BSMCORNER; ?>
                                    </div>

                                    <p class="post-category">Politics</p>

                                    <h2 class="title">
                                        <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                                    </h2>

                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/blog/blog-author.jpg" alt=""
                                            class="img-fluid post-author-img flex-shrink-0 rnd" style="">
                                        <div class="post-meta">
                                            <small><time datetime="2022-01-01">Jan 1, 2022</time></small>
                                        </div>
                                    </div>
                                    <p class="post-author">Maria Doe jskaksf skjksf
                                        <br>
                                        <small>Asstt. Teachers</small>
                                    </p>

                                </article>












                            </div>
                        </div>
                    </div><!-- End testimonial item -->



                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->



    <section id="chairman" class="testimonials" style="">
        <div class="container" data-aos="fade-up">

            <div class="slides-10 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item" style="margin-top:5px;">
                                <div style="text-align:center;">
                                    <div class="card-header"
                                        style="text-align:certer; color:var(--color-primary); font-weight:bold;">
                                        <?php echo SPCHAIRMAN; ?>
                                    </div>
                                    <hr>
                                    <div class="d-flexx align-items-center">
                                        <div>
                                            <img src="resources/chairman.jpg" class="testimonial-imgs flex-shrink-0"
                                                alt="">
                                        </div>
                                    </div>
                                    <?php
                                    $sql0 = "SELECT * FROM committee where type='smc' and posten='Chairman'";
                                    $result0bb = $conn->query($sql0);
                                    if ($result0bb->num_rows > 0) {
                                        while ($row0 = $result0bb->fetch_assoc()) {
                                            $nam = $row0["member" . $lang];
                                            $post = $row0["post" . $lang];
                                            $addr = $row0["add" . $lang];
                                        }
                                    }
                                    ?>
                                    <div>
                                        <h3>
                                            <?php echo $nam; ?>
                                        </h3>
                                        <h4>
                                            <?php echo $post; ?>
                                        </h4>
                                        <?php echo $addr; ?>
                                    </div>
                                </div>
                                <p style="text-align:justify">
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <?php
                                    $sql0 = "SELECT * FROM txtnote where title='chairmanspeech'";
                                    $result0bb = $conn->query($sql0);
                                    if ($result0bb->num_rows > 0) {
                                        while ($row0 = $result0bb->fetch_assoc()) {
                                            $text = $row0["text" . $lang];
                                        }
                                    }
                                    $text = implode(' ', array_slice(explode(' ', $text), 0, 30));
                                    echo $text . ' ...';
                                    ?>
                                    <i class="bi bi-quote quote-icon-right"></i><br>
                                    <a href="#" class="readmore stretched-link">Read more <i
                                            class="bi bi-arrow-right"></i></a>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                </div>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item" style="margin-top:5px;">
                                <div style="text-align:center;">
                                    <div class="card-header"
                                        style="text-align:certer; color:var(--color-primary); font-weight:bold;">
                                        <?php echo SPHT; ?>
                                    </div>
                                    <hr>
                                    <div class="d-flexx align-items-center">
                                        <div>
                                            <img src="resources/ht.jpg" class="testimonial-imgs flex-shrink-0" alt="">
                                        </div>
                                    </div>
                                    <?php
                                    $sql0 = "SELECT * FROM committee where type='smc' and posten='Secretary'";
                                    $result0bb = $conn->query($sql0);
                                    if ($result0bb->num_rows > 0) {
                                        while ($row0 = $result0bb->fetch_assoc()) {
                                            $nam = $row0["member" . $lang];
                                            $post = $row0["post" . $lang];
                                            $addr = $row0["add" . $lang];
                                        }
                                    }
                                    ?>
                                    <div>
                                        <h3>
                                            <?php echo $nam; ?>
                                        </h3>
                                        <h4>
                                            <?php echo $post; ?>
                                        </h4>
                                        <?php echo $addr; ?>
                                    </div>
                                </div>
                                <p style="text-align:justify">
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <?php
                                    $sql0 = "SELECT * FROM txtnote where title='htspeech'";
                                    $result0bb = $conn->query($sql0);
                                    if ($result0bb->num_rows > 0) {
                                        while ($row0 = $result0bb->fetch_assoc()) {
                                            $text = $row0["text" . $lang];
                                        }
                                    }
                                    $text = implode(' ', array_slice(explode(' ', $text), 0, 30));
                                    echo $text . ' ...';
                                    ?>
                                    <i class="bi bi-quote quote-icon-right"></i><br>
                                    <a href="#" class="readmore stretched-link">Read more <i
                                            class="bi bi-arrow-right"></i></a>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                </div>

            </div>
    </section>
</div>