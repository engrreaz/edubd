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
                    <?php echo GALLERY; ?>
                </li>
            </ol>
        </div>
    </nav>
</div>



<main id="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">



                <section id="portfolio" class="portfolio sections-bgs">
                    <div class="container" data-aos="fade-up">

                        <div class="section-header">
                            <h2>Photo Gallery</h2>
                        </div>

                        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                            data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                            <div>
                                <ul class="portfolio-flters">
                                    <li data-filter="*" class="filter-active">All</li>
                                    <?php
                                    $sql0 = "SELECT category FROM upload where uploadtype='gallery' and category!='-' group by category order by category; ";
                                    $result0r = $conn->query($sql0);
                                    if ($result0r->num_rows > 0) {
                                        while ($row0 = $result0r->fetch_assoc()) {

                                            $cat = $row0["category"];
                                            echo '<li data-filter=".filter-' . $cat . '">' . $cat . '</li>';
                                        }
                                    }
                                    ?>

                                </ul><!-- End Portfolio Filters -->
                            </div>

                            <div class="row gy-4 portfolio-container">
                                <?php
                                $sql0 = "SELECT * FROM upload where uploadtype='gallery' and category!='-' order by id desc; ";
                                $result0rr = $conn->query($sql0);
                                if ($result0rr->num_rows > 0) {
                                    while ($row0 = $result0rr->fetch_assoc()) {
                                        $title = $row0["title" . $lang];
                                        $subtitle = $row0["subtitle" . $lang];
                                        $cat = $row0["category"];
                                        $pth = $row0["location"];

                                        ?>
                                        <div class="col-xl-4 col-md-6 portfolio-item filter-institute">
                                            <div class="portfolio-wrap">
                                                <a href="<?php echo $pth; ?>"
                                                    data-gallery="portfolio-gallery-<?php echo $cat; ?>" class="glightbox"><img
                                                        src="<?php echo $pth; ?>" class="img-fluid" alt=""></a>
                                                <div class="portfolio-info">
                                                    <h4><a href="portfolio-details.html" title="More Details">
                                                            <?php echo $title; ?>
                                                        </a></h4>
                                                    <p>
                                                        <?php echo $subtitle; ?>
                                                    </p>
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
            <div class="col-lg-4">
                <div class="cell" data-aos="fade-up">
                    <?php include 'content_right.php'; ?>
                </div>
            </div>
        </div>
    </div>



</main><!-- End #main -->




<?php include 'bottom.php'; ?>