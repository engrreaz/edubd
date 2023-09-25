<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Our Recent Activities</h2>
            <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet
                deleniti
                fignissimos eos quam</p>
        </div>

        <div class="slides-2 swiper" data-aos="fade-in" data-aos-delay="10">
            <div class="swiper-wrapper">

                <style>

                </style>
                <?php
                $sql0 = "SELECT * FROM blog order by posttime desc limit 5";
                $result0bbx = $conn->query($sql0);
                if ($result0bbx->num_rows > 0) {
                    while ($row0 = $result0bbx->fetch_assoc()) {
                        $posttitle = $row0["title"];
                        $postbody = $row0["body"];
                        $category = $row0["category"];
                        $author = $row0["author"];
                        $posttime = $row0["posttime"];
                        $pic = $row0["pic"];
                        $authpic = $row0["authpic"];
                        $post = $row0["post"];
                        ?>

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item " style="">


                                    <div class="post-img blogbox" style="  ">
                                        <img src="resources/blog/<?php echo $pic; ?>" alt="" class="img-fluid " style="width:100%; height:200px; display: flex; 
  flex-wrap: wrap;">
                                    </div>

                                    <article style=" font-style:normal;">



                                        <p class="post-categorys"  style="font-size:14px; font-style:normal;"  >
                                            <?php echo $category; ?>
                                        </p>

                                        <h4 class="title">
                                            <a href="#">
                                                <?php echo $posttitle; ?>
                                            </a>
                                        </h4>

                                        <div class="d-flex align-items-center">
                                            <img src="resources/teacher/<?php echo $authpic; ?>" alt=""
                                                class="img-fluid post-author-img flex-shrink-0 rnd" style="">
                                            <div class="post-meta" style="padding-left:8px;">
                                                <small><time datetime="<?php echo $posttime; ?>">Jan 1, 2022</time></small>
                                                <p class="post-author" style="margin:0; ">
                                                    <b>
                                                        <?php echo $author; ?>
                                                    </b>
                                                    <br>
                                                    <small style="font-size:11px;"><?php echo $post; ?></small>
                                                </p>
                                            </div>

                                        </div>

                                    </article>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <?php
                    }
                } else {
                    echo 'No Activities Found';
                }
                ?>



            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->