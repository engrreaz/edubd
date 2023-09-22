<?php
require_once 'inc.php';
?>




<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <nav>
        <div class="container">
            <ol>
                <li><a href="index.php">
                        <?php echo HOME; ?>
                    </a></li>
                <li>
                    <?php echo MANAGEMENT; ?>
                </li>
                <li>
                    <?php echo STAFF; ?>
                </li>
            </ol>
        </div>
    </nav>
</div><!-- End Breadcrumbs -->



<main id="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <section id="testimonials" class="testimonials">
                    <div class="container" data-aos="fade-up">

                        <div class="section-header">
                            <h2>
                                <?php echo STAFF_TITLE; ?>
                            </h2>
                            <p>
                                <?php echo STAFF_SUBTITLE; ?>
                            </p>
                            <!-- <p
                                style="display:inline-block; margin-top:15px; padding:8px 20px; border:1px solid var(--color-primary); border-radius:8px;">
                                Committee Active from <b>Monday, 31 November, 2025</b></p> -->
                        </div>









                        <section id="portfolio" class="portfolio" style="z-index:990;">
                            <div class="container" data-aos="fade-up"
                                style="border:0px solid red; margin-top:-90px; -index:999;">


                                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                                    data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                                    <div>
                                        <ul class="portfolio-flters">
                                            <li data-filter="*" class="filter-active">All</li>
                                            <li data-filter=".filter-app">Staffs</li>

                                        </ul><!-- End Portfolio Filters -->
                                    </div>

                                    <div class="row gy-4 portfolio-container">

                                        <?php
                                        $sql0 = "SELECT * FROM teacher where sccode='$sccode' and status=1 and ranks>6 order by ranks, id ";
                                        $result0bb = $eimbox->query($sql0);
                                        if ($result0bb->num_rows > 0) {
                                            while ($row0 = $result0bb->fetch_assoc()) {
                                                $tname = $row0["tname"];
                                                $tname = $row0["tname"];
                                                $tid = $row0["tid"];
                                                // { {
                                                if (file_exists('resources/teachers/' . $tid . '.png')) {
                                                    $pth = 'resources/teachers/' . $tid . '.png';
                                                } else {
                                                    $pth = 'resources/teachers/no-img.png';
                                                }
                                                ?>

                                                <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                                                    <div class="portfolio-wrap">
                                                        <a href="teacher-details.php?id=<?php echo $tid; ?>"
                                                            data-gallery="portfolio-gallery-app" class="glightbox"><img
                                                                src="<?php echo $pth; ?>" class="img-fluid"
                                                                style="height:200px;" alt=""></a>
                                                        <div class="portfolio-info">
                                                            <div style="overflow:hidden; height:25px;">
                                                                <?php echo $tname; ?>
                                                            </div>
                                                            <p>Designation</p>
                                                        </div>
                                                    </div>
                                                </div><!-- End Portfolio Item -->

                                                <?php
                                            }
                                        }
                                        ?>









                                    </div><!-- End Portfolio Container -->

                                </div>

                            </div>
                        </section><!-- End Portfolio Section -->



                    </div>
                </section><!-- End Testimonials Section -->
            </div>
            <div class="col-lg-4">
                <div class="cell" data-aos="fade-up">
                    <?php include 'content_right.php'; ?>
                </div>
            </div>
        </div>
    </div>



</main><!-- End #main -->




<?php include 'bottom.php'; ?>