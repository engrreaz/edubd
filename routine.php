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
                    <?php echo ACADEMIC; ?>
                </li>
                <li>
                    <?php echo ROUTINE; ?>
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
                                <?php echo ROUTINE_TITLE; ?>
                            </h2>
                            <p>
                                <?php echo ROUTINE_SUBTITLE; ?>
                            </p>
                        </div>

                        <div>
                            <img src="resources/routine.png" class="img-fluid rounded-4 mb-4 docpic" alt="">
                            <object data="resources/routine.pdf" type="application/pdf" width="100%" height="1000">
                                alt : <a href="resources/routine.pdf">Class Routine</a>
                            </object>
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