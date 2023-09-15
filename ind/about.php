<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>About Us</h2>
            <h3>
                <?php if ($lang == 'en') {
                    echo 'About ' . scname;
                } else {
                    echo scname . ' সম্পর্কে';
                } ?>
            </h3>
        </div>

        <div class="row gy-4">
            <div class="col-lg-6">

                <img src="resources/about-institute.jpg" class="img-fluid rounded-4 mb-4" alt="">
            </div>
            <div class="col-lg-6">
                <div class="content ps-0 ps-lg-5">
                    <p class="fst-italic">
                        <?php
                        $sql0 = "SELECT * FROM txtnote where title='aboutus'";
                        $result0bb = $conn->query($sql0);
                        if ($result0bb->num_rows > 0) {
                            while ($row0 = $result0bb->fetch_assoc()) {
                                $txt = $row0["text" . $lang];
                                $text = implode(' ', array_slice(explode(' ', $txt), 0, 40));
                                echo $text . ' ...';
                            }
                        }
                        ?>
                        <br>
                        <a href="about-us.php" class="readmore stretched-link">Read more <i
                                class="bi bi-arrow-right"></i></a>

                    </p>
                    <!-- <ul>
                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip
                            ex ea
                            commodo consequat.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in
                            reprehenderit in
                            voluptate velit.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip
                            ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            trideta
                            storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul> -->


                    <div class="position-relative mt-4">
                        <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->