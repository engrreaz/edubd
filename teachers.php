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
                    <?php echo TEACHER; ?>
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
                                <?php echo TEACHER_TITLE; ?>
                            </h2>
                            <p>
                                <?php echo TEACHER_SUBTITLE; ?>
                            </p>
                            <p
                                style="display:inline-block; margin-top:15px; padding:8px 20px; border:1px solid var(--color-primary); border-radius:8px;">
                                Committee Active from <b>Monday, 31 November, 2025</b></p>
                        </div>

                        <div class="section-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Members Name & Title</th>
                                        <th>Address & Mobile</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql0 = "SELECT * FROM committee where type='smc'  order by sl; ";
                                    $result0bb = $conn->query($sql0);
                                    if ($result0bb->num_rows > 0) {
                                        while ($row0 = $result0bb->fetch_assoc()) {
                                            $member = $row0["memberen"];
                                            $post = $row0["posten"];
                                            $add = $row0["adden"];
                                            $pmobile = $row0["mobileen"];

                                            ?>
                                            <tr>
                                                <td style="vertical-align:middle; padding-left:15px;">
                                                    <h5 style="color:var(--color-primary); font-weight:500;">
                                                        <?php echo $member; ?>
                                                    </h5>
                                                    <?php echo $post; ?>
                                                </td>
                                                <td style="vertical-align:middle; padding-left:15px;">
                                                    <div style="font-style:italic;">
                                                        <?php echo $add; ?>
                                                    </div>
                                                    <b>
                                                        <?php echo $pmobile; ?>
                                                    </b>
                                                </td>
                                                <td style="vertical-align:middle; ">
                                                    <a href="resources/syllabus/<?php echo $cls . $sec; ?>.pdf"
                                                        target="_blank"><i style="font-size:30px;"
                                                            class="bi bi-file-earmark-arrow-down-fill"></i></a>
                                                    <a href="resources/syllabus/<?php echo $cls . $sec; ?>.pdf"><i
                                                            style="font-size:30px;" class="bi bi-book-half"></i></a>

                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>








                        <section id="portfolio" class="portfolio">
                            <div class="container" data-aos="fade-up">


                                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                                    data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                                    <div>
                                        <ul class="portfolio-flters">
                                            <li data-filter="*" class="filter-active">All</li>
                                            <li data-filter=".filter-app">App</li>
                                            <li data-filter=".filter-product">Product</li>
                                            <li data-filter=".filter-branding">Branding</li>
                                            <li data-filter=".filter-books">Books</li>
                                        </ul><!-- End Portfolio Filters -->
                                    </div>

                                    <div class="row gy-4 portfolio-container">

                                        <?php
                                        $sql0 = "SELECT * FROM teacher where sccode='$sccode' and status=1 and ranks<=6 order by ranks, id ";
                                        $result0bb = $eimbox->query($sql0);
                                        if ($result0bb->num_rows > 0) {
                                            while ($row0 = $result0bb->fetch_assoc()) {
                                                $tname = $row0["tname"];
                                                // { {
                                        
                                                ?>

                                                <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                                                    <div class="portfolio-wrap">
                                                        <a href="assets/img/portfolio/app-1.jpg"
                                                            data-gallery="portfolio-gallery-app" class="glightbox"><img
                                                                src="assets/img/portfolio/app-1.jpg" class="img-fluid"
                                                                alt=""></a>
                                                        <div class="portfolio-info">
                                                            <h4 style="overflow:auto; height:35px;"><a
                                                                    href="portfolio-details.html" title="More Details">
                                                                    <?php echo $tname; ?>
                                                                </a>
                                                            </h4>
                                                            <p>Social Science</p>
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