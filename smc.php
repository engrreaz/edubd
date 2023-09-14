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
                    <?php echo SMC; ?>
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
                                <?php echo SMC_TITLE; ?>
                            </h2>
                            <p>
                                <?php echo SMC_SUBTITLE; ?>
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