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
                    <?php echo INSNAV; ?>
                </li>
                <li>
                    <?php echo INSACK; ?>
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
                                <?php echo ACK_TITLE; ?>
                            </h2>
                            <p>
                                <?php echo ACK_SUBTITLE; ?>
                            </p>
                        </div>

                        <div>
                            <img src="resources/acknowledgement.png" style="width:100%;"
                                class="img-fluid rounded-4 mb-4 docpic" alt="">
                            <object data="resources/acknowledgement.pdf" type="application/pdf" width="100%"
                                height="1000">
                                alt : <a href="resources/acknowledgement.pdf">Institute Acknowledgement Letter</a>
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