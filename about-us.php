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
                    <?php echo ABOUT; ?>
                </li>
                <li>
                    <?php echo ABOUT_US; ?>
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
                                <?php echo scname; ?>
                            </h2>

                        </div>

                        <img src="resources/about-institute.jpg" class="img-fluid rounded-4 mb-4" alt="">

                        <div style="text-align:justify">
                            <?php
                            $sql0 = "SELECT * FROM txtnote where title='aboutus'";
                            $result0bb = $conn->query($sql0);
                            if ($result0bb->num_rows > 0) {
                                while ($row0 = $result0bb->fetch_assoc()) {
                                    $text = $row0["text" . $lang];
                                    echo $text;
                                    echo 'ss';
                                }
                            }
                            ?>
                        </div>


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